<?php

namespace App\Http\Controllers\Admin;

use App\Models\Badge;
use App\Models\Order;
use App\Models\PointsTransaction;
use App\Models\Referral;
use App\Models\Setting;
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
        $settings = [
            'default_commission_percentage' => Setting::get('default_commission_percentage', '10.00'),
        ];

        return view('admin.loyalty.dashboard', compact('stats', 'topUsers', 'recentTransactions', 'tiers', 'badges', 'settings'));
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

        // Recalcular tier de todos os usuários após mudança nos critérios
        User::all()->each(fn(User $user) => $this->loyaltyService->updateTier($user));

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
        $tiers = Tier::orderBy('min_points')->get();
        return view('admin.loyalty.badges.create', compact('tiers'));
    }

    /**
     * Store new Badge
     */
    public function storeBadge(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name'          => 'required|string|unique:badges|max:255',
            'description'   => 'nullable|string|max:500',
            'icon'          => 'nullable|string|max:255',
            'is_active'     => 'nullable|boolean',
            'unlock_type'   => 'nullable|in:points_threshold,first_purchase,tier_reached,purchases_count,manual',
            'unlock_points' => 'nullable|integer|min:0',
            'unlock_count'  => 'nullable|integer|min:1',
            'unlock_tier'   => 'nullable|exists:tiers,id',
        ]);

        $unlockCondition = $this->buildUnlockCondition($validated);

        Badge::create([
            'name'             => $validated['name'],
            'description'      => $validated['description'] ?? null,
            'icon'             => $validated['icon'] ?? '🎖️',
            'unlock_condition' => $unlockCondition,
            'is_active'        => (bool) ($validated['is_active'] ?? true),
        ]);

        return redirect()->route('admin.loyalty.badges.index')
            ->with('success', 'Badge criado com sucesso!');
    }

    /**
     * Show Badge edit form
     */
    public function editBadge(Badge $badge): View
    {
        $tiers = Tier::orderBy('min_points')->get();
        return view('admin.loyalty.badges.edit', compact('badge', 'tiers'));
    }

    /**
     * Update Badge
     */
    public function updateBadge(Request $request, Badge $badge): RedirectResponse
    {
        $validated = $request->validate([
            'name'          => 'required|string|max:255|unique:badges,name,' . $badge->id,
            'description'   => 'nullable|string|max:500',
            'icon'          => 'nullable|string|max:255',
            'is_active'     => 'nullable|boolean',
            'unlock_type'   => 'nullable|in:points_threshold,first_purchase,tier_reached,purchases_count,manual',
            'unlock_points' => 'nullable|integer|min:0',
            'unlock_count'  => 'nullable|integer|min:1',
            'unlock_tier'   => 'nullable|exists:tiers,id',
        ]);

        $unlockCondition = $this->buildUnlockCondition($validated);

        $badge->update([
            'name'             => $validated['name'],
            'description'      => $validated['description'] ?? null,
            'icon'             => $validated['icon'] ?? $badge->icon,
            'unlock_condition' => $unlockCondition,
            'is_active'        => (bool) ($validated['is_active'] ?? $badge->is_active),
        ]);

        return redirect()->route('admin.loyalty.badges.index')
            ->with('success', 'Badge atualizado com sucesso!');
    }

    /**
     * Monta a condição de desbloqueio a partir dos campos da view.
     */
    private function buildUnlockCondition(array $data): ?array
    {
        $type = $data['unlock_type'] ?? null;

        if (!$type || $type === 'manual') {
            return null;
        }

        $condition = ['type' => $type];

        if ($type === 'points_threshold') {
            $condition['points'] = (int) ($data['unlock_points'] ?? 0);
        } elseif ($type === 'purchases_count') {
            $condition['count'] = (int) ($data['unlock_count'] ?? 1);
        } elseif ($type === 'tier_reached') {
            $condition['tier_id'] = (int) ($data['unlock_tier'] ?? 0);
        }

        return $condition;
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
    public function managePoints(Request $request): View
    {
        $query = User::with('tier')->orderBy('points', 'desc');

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('email', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('tier')) {
            $query->where('tier_id', $request->tier);
        }

        $users = $query->paginate(20);
        $tiers = Tier::orderBy('min_points')->get();

        return view('admin.loyalty.points.manage', compact('users', 'tiers'));
    }

    /**
     * Update User Points
     */
    public function updateUserPoints(Request $request, User $user): RedirectResponse
    {
        $validated = $request->validate([
            'points'      => 'required|integer|min:-100000|max:1000000|not_in:0',
            'reason'      => 'required|in:bonus,adjustment,redemption',
            'description' => 'nullable|string|max:500',
        ]);

        $this->loyaltyService->addPoints(
            $user,
            $validated['points'],
            $validated['reason'],
            null,
            $validated['description'] ?? 'Ajuste manual de pontos pelo admin'
        );

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

    // =========================================================================
    // GERENCIAMENTO DE INDICAÇÕES
    // =========================================================================

    /**
     * Listar todas as indicações
     */
    public function indexReferrals(Request $request): View
    {
        $query = Referral::with(['referrer', 'referred', 'order']);

        if ($request->filled('referrer_id')) {
            $query->where('referrer_id', $request->referrer_id);
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('from_date')) {
            $query->whereDate('created_at', '>=', $request->from_date);
        }

        if ($request->filled('to_date')) {
            $query->whereDate('created_at', '<=', $request->to_date);
        }

        $referrals = $query->latest()->paginate(30);
        $users = User::orderBy('name')->get(['id', 'name', 'email']);

        $stats = [
            'total'             => Referral::count(),
            'pending'           => Referral::where('status', 'pending')->count(),
            'approved'          => Referral::where('status', 'approved')->count(),
            'paid'              => Referral::where('status', 'paid')->count(),
            'total_commission'  => Referral::whereIn('status', ['approved', 'paid'])->sum('commission_amount'),
        ];

        return view('admin.loyalty.referrals.index', compact('referrals', 'users', 'stats'));
    }

    /**
     * Formulário de criação de indicação
     */
    public function createReferral(): View
    {
        $users = User::orderBy('name')->get(['id', 'name', 'email', 'referral_code']);
        $orders = Order::with('user')->latest()->get();
        $defaultCommission = Setting::get('default_commission_percentage', '10.00');

        return view('admin.loyalty.referrals.create', compact('users', 'orders', 'defaultCommission'));
    }

    /**
     * Salvar nova indicação
     */
    public function storeReferral(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'referrer_id'           => 'required|exists:users,id',
            'referred_id'           => 'nullable|exists:users,id|different:referrer_id',
            'order_id'              => 'nullable|exists:orders,id',
            'product_name'          => 'nullable|string|max:255',
            'product_value'         => 'nullable|numeric|min:0',
            'commission_percentage' => 'required|numeric|min:0|max:100',
            'notes'                 => 'nullable|string|max:1000',
        ]);

        if (!empty($validated['product_value']) && !empty($validated['commission_percentage'])) {
            $validated['commission_amount'] = round(
                $validated['product_value'] * ($validated['commission_percentage'] / 100),
                2
            );
        }

        $referral = Referral::create($validated);

        return redirect()->route('admin.loyalty.referrals.index')
            ->with('success', "Indicação #{$referral->id} criada com sucesso!");
    }

    /**
     * Formulário de edição de indicação
     */
    public function editReferral(Referral $referral): View
    {
        $users = User::orderBy('name')->get(['id', 'name', 'email', 'referral_code']);
        $orders = Order::with('user')->latest()->get();

        return view('admin.loyalty.referrals.edit', compact('referral', 'users', 'orders'));
    }

    /**
     * Atualizar indicação
     */
    public function updateReferral(Request $request, Referral $referral): RedirectResponse
    {
        $validated = $request->validate([
            'referrer_id'           => 'required|exists:users,id',
            'referred_id'           => 'nullable|exists:users,id|different:referrer_id',
            'order_id'              => 'nullable|exists:orders,id',
            'product_name'          => 'nullable|string|max:255',
            'product_value'         => 'nullable|numeric|min:0',
            'commission_percentage' => 'required|numeric|min:0|max:100',
            'status'                => 'required|in:pending,approved,paid,cancelled',
            'notes'                 => 'nullable|string|max:1000',
        ]);

        if (!empty($validated['product_value']) && !empty($validated['commission_percentage'])) {
            $validated['commission_amount'] = round(
                $validated['product_value'] * ($validated['commission_percentage'] / 100),
                2
            );
        }

        if ($validated['status'] === 'approved' && $referral->status !== 'approved') {
            $validated['approved_at'] = now();
        }

        if ($validated['status'] === 'paid' && $referral->status !== 'paid') {
            $validated['paid_at'] = now();
        }

        $referral->update($validated);

        return redirect()->route('admin.loyalty.referrals.index')
            ->with('success', "Indicação #{$referral->id} atualizada com sucesso!");
    }

    /**
     * Aprovar indicação rapidamente
     */
    public function approveReferral(Referral $referral): RedirectResponse
    {
        $referral->update([
            'status'      => 'approved',
            'approved_at' => now(),
        ]);

        return back()->with('success', "Indicação #{$referral->id} aprovada!");
    }

    /**
     * Marcar indicação como paga
     */
    public function payReferral(Referral $referral): RedirectResponse
    {
        $referral->update([
            'status'  => 'paid',
            'paid_at' => now(),
        ]);

        return back()->with('success', "Indicação #{$referral->id} marcada como paga!");
    }

    /**
     * Deletar indicação
     */
    public function destroyReferral(Referral $referral): RedirectResponse
    {
        $id = $referral->id;
        $referral->delete();

        return redirect()->route('admin.loyalty.referrals.index')
            ->with('success', "Indicação #{$id} removida com sucesso!");
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

    /**
     * Salvar configurações gerais do sistema de fidelidade
     */
    public function updateSettings(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'default_commission_percentage' => 'required|numeric|min:0|max:100',
        ]);

        Setting::set('default_commission_percentage', number_format((float) $validated['default_commission_percentage'], 2, '.', ''));

        return redirect()->route('admin.loyalty.dashboard')
            ->with('success', 'Configurações salvas com sucesso.');
    }
}
