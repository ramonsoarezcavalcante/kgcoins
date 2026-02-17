<?php

namespace App\Http\Controllers\Admin;

use App\Models\Badge;
use App\Models\PointsTransaction;
use App\Models\Tier;
use App\Models\User;
use App\Services\LoyaltyService;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class AdminLoyaltyController extends Controller
{
    private LoyaltyService $loyaltyService;

    public function __construct(LoyaltyService $loyaltyService)
    {
        $this->middleware('admin');
        $this->loyaltyService = $loyaltyService;
    }

    /**
     * Admin Loyalty Dashboard
     */
    public function dashboard(): View
    {
        $stats = [
            'total_users' => User::count(),
            'total_points_distributed' => PointsTransaction::sum('points'),
            'total_tiers' => Tier::count(),
            'total_badges' => Badge::count(),
            'active_users_with_points' => User::where('points', '>', 0)->count(),
        ];

        $topUsers = User::orderBy('points', 'desc')->limit(10)->get();
        $recentTransactions = PointsTransaction::with('user', 'order')->latest()->limit(10)->get();
        $tiers = Tier::all();
        $badges = Badge::all();

        return view('admin.loyalty.dashboard', compact('stats', 'topUsers', 'recentTransactions', 'tiers', 'badges'));
    }

    /**
     * List all Tiers
     */
    public function indexTiers(): View
    {
        $tiers = Tier::orderBy('min_points')->paginate(15);
        return view('admin.loyalty.tiers.index', compact('tiers'));
    }

    /**
     * Show Tier creation form
     */
    public function createTier(): View
    {
        return view('admin.loyalty.tiers.create');
    }

    /**
     * Store new Tier
     */
    public function storeTier(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:tiers|max:255',
            'min_points' => 'required|integer|min:0',
            'discount_percentage' => 'required|numeric|min:0|max:100',
            'color' => 'required|string|regex:/^#[0-9a-f]{6}$/i',
            'benefits' => 'nullable|string',
        ]);

        $validated['benefits'] = array_filter(
            array_map('trim', explode("\n", $validated['benefits'] ?? ''))
        );

        Tier::create($validated);

        return redirect()->route('admin.loyalty.tiers.index')
            ->with('success', 'Tier criado com sucesso!');
    }

    /**
     * Show Tier edit form
     */
    public function editTier(Tier $tier): View
    {
        return view('admin.loyalty.tiers.edit', compact('tier'));
    }

    /**
     * Update Tier
     */
    public function updateTier(Request $request, Tier $tier): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:tiers,name,' . $tier->id,
            'min_points' => 'required|integer|min:0',
            'discount_percentage' => 'required|numeric|min:0|max:100',
            'color' => 'required|string|regex:/^#[0-9a-f]{6}$/i',
            'benefits' => 'nullable|string',
        ]);

        $validated['benefits'] = array_filter(
            array_map('trim', explode("\n", $validated['benefits'] ?? ''))
        );

        $tier->update($validated);

        // Update users in this tier
        $this->loyaltyService->updateTier($tier);

        return redirect()->route('admin.loyalty.tiers.index')
            ->with('success', 'Tier atualizado com sucesso!');
    }

    /**
     * Delete Tier
     */
    public function destroyTier(Tier $tier): RedirectResponse
    {
        if ($tier->users()->count() > 0) {
            return back()->with('error', 'Não é possível deletar um tier que possui usuários.');
        }

        $tier->delete();
        return redirect()->route('admin.loyalty.tiers.index')
            ->with('success', 'Tier deletado com sucesso!');
    }

    /**
     * List all Badges
     */
    public function indexBadges(): View
    {
        $badges = Badge::paginate(15);
        return view('admin.loyalty.badges.index', compact('badges'));
    }

    /**
     * Show Badge creation form
     */
    public function createBadge(): View
    {
        return view('admin.loyalty.badges.create');
    }

    /**
     * Store new Badge
     */
    public function storeBadge(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:badges|max:255',
            'description' => 'nullable|string|max:500',
            'icon' => 'nullable|string|max:255',
            'unlock_condition_type' => 'nullable|in:points_threshold,first_purchase,tier_reached,purchases_count',
            'unlock_condition_value' => 'nullable|numeric|min:0',
            'is_active' => 'boolean',
        ]);

        $unlockCondition = null;
        if ($validated['unlock_condition_type']) {
            $unlockCondition = [
                'type' => $validated['unlock_condition_type'],
            ];

            if (in_array($validated['unlock_condition_type'], ['points_threshold', 'tier_reached', 'purchases_count'])) {
                $unlockCondition[$validated['unlock_condition_type'] === 'tier_reached' ? 'tier_id' : 
                                 ($validated['unlock_condition_type'] === 'points_threshold' ? 'points' : 'count')] 
                    = $validated['unlock_condition_value'];
            }
        }

        Badge::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'icon' => $validated['icon'] ?? '🎖️',
            'unlock_condition' => $unlockCondition,
            'is_active' => $validated['is_active'] ?? true,
        ]);

        return redirect()->route('admin.loyalty.badges.index')
            ->with('success', 'Badge criado com sucesso!');
    }

    /**
     * Show Badge edit form
     */
    public function editBadge(Badge $badge): View
    {
        return view('admin.loyalty.badges.edit', compact('badge'));
    }

    /**
     * Update Badge
     */
    public function updateBadge(Request $request, Badge $badge): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:badges,name,' . $badge->id,
            'description' => 'nullable|string|max:500',
            'icon' => 'nullable|string|max:255',
            'unlock_condition_type' => 'nullable|in:points_threshold,first_purchase,tier_reached,purchases_count',
            'unlock_condition_value' => 'nullable|numeric|min:0',
            'is_active' => 'boolean',
        ]);

        $unlockCondition = null;
        if ($validated['unlock_condition_type']) {
            $unlockCondition = [
                'type' => $validated['unlock_condition_type'],
            ];

            if (in_array($validated['unlock_condition_type'], ['points_threshold', 'tier_reached', 'purchases_count'])) {
                $unlockCondition[$validated['unlock_condition_type'] === 'tier_reached' ? 'tier_id' : 
                                 ($validated['unlock_condition_type'] === 'points_threshold' ? 'points' : 'count')] 
                    = $validated['unlock_condition_value'];
            }
        }

        $badge->update([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'icon' => $validated['icon'] ?? $badge->icon,
            'unlock_condition' => $unlockCondition,
            'is_active' => $validated['is_active'],
        ]);

        return redirect()->route('admin.loyalty.badges.index')
            ->with('success', 'Badge atualizado com sucesso!');
    }

    /**
     * Delete Badge
     */
    public function destroyBadge(Badge $badge): RedirectResponse
    {
        $badge->delete();
        return redirect()->route('admin.loyalty.badges.index')
            ->with('success', 'Badge deletado com sucesso!');
    }

    /**
     * Manage User Points
     */
    public function managePoints(): View
    {
        $users = User::orderBy('points', 'desc')->paginate(20);
        return view('admin.loyalty.points.manage', compact('users'));
    }

    /**
     * Update User Points
     */
    public function updateUserPoints(Request $request, User $user): RedirectResponse
    {
        $validated = $request->validate([
            'points' => 'required|integer|min:-10000|max:1000000',
            'reason' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
        ]);

        $currentPoints = $user->points;
        $pointsChange = $validated['points'] - $currentPoints;

        if ($pointsChange !== 0) {
            $reason = $pointsChange > 0 ? 'bonus' : 'adjustment';
            
            $this->loyaltyService->addPoints(
                $user,
                abs($pointsChange),
                $reason,
                null,
                $validated['description'] ?? ($validated['reason'] ?? 'Ajuste manual de pontos')
            );

            if ($pointsChange < 0) {
                $user->update(['points' => $currentPoints + $pointsChange]);
            }
        }

        return back()->with('success', 'Pontos do usuário atualizados com sucesso!');
    }

    /**
     * View Points Transactions
     */
    public function viewTransactions(Request $request): View
    {
        $query = PointsTransaction::with('user', 'order');

        if ($request->filled('user_id')) {
            $query->where('user_id', $request->user_id);
        }

        if ($request->filled('reason')) {
            $query->where('reason', $request->reason);
        }

        if ($request->filled('from_date')) {
            $query->whereDate('created_at', '>=', $request->from_date);
        }

        if ($request->filled('to_date')) {
            $query->whereDate('created_at', '<=', $request->to_date);
        }

        $transactions = $query->latest()->paginate(50);
        $reasons = PointsTransaction::select('reason')->distinct()->pluck('reason');

        return view('admin.loyalty.points.transactions', compact('transactions', 'reasons'));
    }

    /**
     * Export Loyalty Report
     */
    public function exportReport(Request $request)
    {
        $filename = "loyalty_report_" . now()->format('Y-m-d-His') . ".csv";

        $headers = [
            'Content-Type' => 'text/csv; charset=utf-8',
            'Content-Disposition' => "attachment; filename=$filename",
        ];

        $callback = function () {
            $file = fopen('php://output', 'w');
            fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));

            // Report Title
            fputcsv($file, ['Relatório de Fidelidade']);
            fputcsv($file, ['Data:', now()->format('d/m/Y H:i:s')]);
            fputcsv($file, ['']);

            // Summary Stats
            fputcsv($file, ['RESUMO GERAL']);
            fputcsv($file, ['Total de Usuários', User::count()]);
            fputcsv($file, ['Usuários com Pontos', User::where('points', '>', 0)->count()]);
            fputcsv($file, ['Pontos Totais Distribuídos', PointsTransaction::sum('points')]);
            fputcsv($file, ['']);

            // Users by Tier
            fputcsv($file, ['USUÁRIOS POR TIER']);
            fputcsv($file, ['Tier', 'Quantidade de Usuários']);
            foreach (Tier::all() as $tier) {
                fputcsv($file, [$tier->name, $tier->users()->count()]);
            }
            fputcsv($file, ['']);

            // Top Users
            fputcsv($file, ['TOP 20 USUÁRIOS']);
            fputcsv($file, ['Nome', 'Email', 'Pontos', 'Tier', 'Badges']);
            foreach (User::orderBy('points', 'desc')->limit(20)->get() as $user) {
                fputcsv($file, [
                    $user->name,
                    $user->email,
                    $user->points,
                    $user->tier?->name ?? 'N/A',
                    $user->badges()->count(),
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
