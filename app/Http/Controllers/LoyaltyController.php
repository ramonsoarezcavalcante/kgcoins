<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\PointsTransaction;
use App\Models\Tier;
use App\Services\LoyaltyService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoyaltyController extends Controller
{
    private LoyaltyService $loyaltyService;

    public function __construct(LoyaltyService $loyaltyService)
    {
        $this->middleware('auth');
        $this->loyaltyService = $loyaltyService;
    }

    /**
     * Show loyalty dashboard for authenticated user.
     */
    public function showDashboard(): View
    {
        $user = auth()->user();
        $summary = $this->loyaltyService->getUserLoyaltySummary($user);
        $recentTransactions = $this->loyaltyService->getUserRecentTransactions($user, 5);
        $badges = $user->badges()->with('pivot')->get();
        $allTiers = Tier::orderBy('min_points')->get();

        // Calculate progress to next tier
        $nextTier = Tier::where('min_points', '>', $user->points)
            ->orderBy('min_points', 'asc')
            ->first();

        $progressPercentage = 0;
        if ($nextTier && $user->tier) {
            $currentTierMin = $user->tier->min_points;
            $nextTierMin = $nextTier->min_points;
            $pointsInRange = $user->points - $currentTierMin;
            $totalRange = $nextTierMin - $currentTierMin;
            $progressPercentage = ($pointsInRange / $totalRange) * 100;
        }

        return view('loyalty.dashboard', [
            'summary' => $summary,
            'recentTransactions' => $recentTransactions,
            'badges' => $badges,
            'allTiers' => $allTiers,
            'nextTier' => $nextTier,
            'progressPercentage' => $progressPercentage,
        ]);
    }

    /**
     * Get transaction history with pagination.
     */
    public function getTransactionHistory(Request $request): View
    {
        $user = auth()->user();
        $perPage = $request->query('per_page', 20);
        $reason = $request->query('reason');

        $query = $user->pointsTransactions()->with('order');

        if ($reason) {
            $query->where('reason', $reason);
        }

        $transactions = $query->paginate($perPage);

        $reasons = PointsTransaction::select('reason')
            ->whereNotNull('reason')
            ->distinct()
            ->pluck('reason');

        return view('loyalty.transactions', [
            'transactions' => $transactions,
            'reasons' => $reasons,
            'currentReason' => $reason,
        ]);
    }

    /**
     * Show available rewards to claim.
     */
    public function showRewards(): View
    {
        $user = auth()->user();

        // Example rewards structure - you can expand this
        $rewards = [
            [
                'id' => 1,
                'name' => 'R$10 Discount',
                'points_required' => 100,
                'description' => 'Get R$10 off on your next purchase',
            ],
            [
                'id' => 2,
                'name' => 'R$25 Discount',
                'points_required' => 250,
                'description' => 'Get R$25 off on your next purchase',
            ],
            [
                'id' => 3,
                'name' => 'Free Shipping',
                'points_required' => 150,
                'description' => 'Free shipping on your next order',
            ],
            [
                'id' => 4,
                'name' => 'R$50 Discount',
                'points_required' => 500,
                'description' => 'Get R$50 off on your next purchase',
            ],
        ];

        // Filter rewards based on user points
        $availableRewards = array_filter($rewards, function ($reward) use ($user) {
            return $user->points >= $reward['points_required'];
        });

        return view('loyalty.rewards', [
            'availableRewards' => $availableRewards,
            'allRewards' => $rewards,
            'userPoints' => $user->points,
        ]);
    }

    /**
     * Claim a reward (redeem points).
     */
    public function claimReward(Request $request)
    {
        $user = auth()->user();
        $rewardId = $request->input('reward_id');

        // Validate reward exists and user has enough points
        $rewards = [
            1 => 100,  // R$10 Discount = 100 points
            2 => 250,  // R$25 Discount = 250 points
            3 => 150,  // Free Shipping = 150 points
            4 => 500,  // R$50 Discount = 500 points
        ];

        if (!isset($rewards[$rewardId])) {
            return back()->with('error', 'Prêmio não encontrado.');
        }

        $pointsRequired = $rewards[$rewardId];

        if ($user->points < $pointsRequired) {
            return back()->with('error', 'Você não tem pontos suficientes para resgatar este prêmio.');
        }

        // Deduct points
        $this->loyaltyService->removePoints(
            $user,
            $pointsRequired,
            'redemption',
            "Resgate de prêmio #$rewardId"
        );

        // Here you would typically create a coupon or send an email with the reward
        // For now, we'll just redirect with a success message

        return back()->with('success', 'Parabéns! Você resgatou seu prêmio com sucesso.');
    }

    /**
     * Show referral information and tracking.
     */
    public function showReferral(): View
    {
        $user = auth()->user();

        if (!$user->referral_code) {
            $loyaltyService = new LoyaltyService();
            $loyaltyService->generateReferralCode($user);
            $user->refresh();
        }

        // Count referrals (users who registered with this referral code)
        // This would require tracking in the database
        $referralCount = 0;

        return view('loyalty.referral', [
            'referralCode' => $user->referral_code,
            'referralCount' => $referralCount,
            'referralBonus' => LoyaltyService::REFERRAL_BONUS,
        ]);
    }

    /**
     * Export loyalty data as PDF or CSV.
     */
    public function exportData(Request $request)
    {
        $user = auth()->user();
        $format = $request->query('format', 'pdf');

        $transactions = $user->pointsTransactions()
            ->with('order')
            ->latest()
            ->get();

        $summary = $this->loyaltyService->getUserLoyaltySummary($user);

        if ($format === 'csv') {
            return $this->exportCsv($transactions, $summary, $user);
        }

        return back()->with('error', 'Formato não suportado no momento.');
    }

    /**
     * Export transactions as CSV.
     */
    private function exportCsv($transactions, $summary, $user)
    {
        $filename = "loyalty_export_{$user->id}_" . now()->format('Y-m-d-His') . ".csv";

        $headers = [
            'Content-Type' => 'text/csv; charset=utf-8',
            'Content-Disposition' => "attachment; filename=$filename",
        ];

        $callback = function () use ($transactions, $summary, $user) {
            $file = fopen('php://output', 'w');

            // BOM for Excel UTF-8 support
            fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));

            // Summary section
            fputcsv($file, ['Resumo de Fidelidade']);
            fputcsv($file, ['']);
            fputcsv($file, ['Usuário:', $user->name]);
            fputcsv($file, ['Email:', $user->email]);
            fputcsv($file, ['Pontos Totais:', $summary['current_points']]);
            fputcsv($file, ['Nível Atual:', $summary['current_tier']]);
            fputcsv($file, ['Desconto:', $summary['discount_percentage'] . '%']);
            fputcsv($file, ['Total de Pedidos:', $summary['total_orders']]);
            fputcsv($file, ['Badges Conquistadas:', $summary['badges_count']]);
            fputcsv($file, ['']);

            // Transactions header
            fputcsv($file, ['Data', 'Motivo', 'Pontos', 'Descrição']);

            // Transactions data
            foreach ($transactions as $transaction) {
                fputcsv($file, [
                    $transaction->created_at->format('d/m/Y H:i'),
                    $transaction->reason,
                    $transaction->points,
                    $transaction->description,
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
