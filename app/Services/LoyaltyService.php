<?php

namespace App\Services;

use App\Models\Badge;
use App\Models\Order;
use App\Models\PointsTransaction;
use App\Models\Tier;
use App\Models\User;
use Illuminate\Support\Str;

class LoyaltyService
{
    /**
     * Points per real spent (1 ponto a cada R$ 10).
     */
    const POINTS_PER_REAL = 0.1;

    /**
     * Registration bonus in points.
     */
    const REGISTRATION_BONUS = 50;

    /**
     * Referral bonus for both referrer and referee.
     */
    const REFERRAL_BONUS = 100;

    /**
     * Add points to a user and record the transaction.
     */
    public function addPoints(User $user, int $points, string $reason, ?Order $order = null, ?string $description = null, ?string $referenceId = null): PointsTransaction
    {
        $transaction = PointsTransaction::create([
            'user_id' => $user->id,
            'points' => $points,
            'reason' => $reason,
            'order_id' => $order?->id,
            'description' => $description,
            'reference_id' => $referenceId,
        ]);

        $user->update([
            'points' => $user->points + $points,
            'last_points_update' => now(),
        ]);

        // Update tier based on new points total
        $this->updateTier($user->refresh());

        // Check for badge unlocks
        $this->checkBadgeUnlocks($user);

        return $transaction;
    }

    /**
     * Subtract points from a user (e.g., redemption).
     */
    public function removePoints(User $user, int $points, string $reason, ?string $description = null): PointsTransaction
    {
        return $this->addPoints($user, -$points, $reason, null, $description);
    }

    /**
     * Calculate points earned from an order.
     */
    public function calculatePointsForOrder(Order $order): int
    {
        $basePoints = (int) floor($order->total_amount * self::POINTS_PER_REAL);

        // Apply tier multiplier if user has a tier
        if ($order->user->tier) {
            $multiplier = 1 + ($order->user->tier->discount_percentage / 100);
            return (int) floor($basePoints * $multiplier);
        }

        return $basePoints;
    }

    /**
     * Update user tier based on total points.
     */
    public function updateTier(User $user): void
    {
        $tier = Tier::where('min_points', '<=', $user->points)
            ->orderBy('min_points', 'desc')
            ->first();

        if ($tier && $user->tier_id !== $tier->id) {
            $user->update(['tier_id' => $tier->id]);
        }
    }

    /**
     * Check and unlock badges for user based on conditions.
     */
    public function checkBadgeUnlocks(User $user): void
    {
        $badges = Badge::where('is_active', true)->get();

        foreach ($badges as $badge) {
            if ($user->hasBadge($badge->id)) {
                continue; // Already has this badge
            }

            if ($this->checkBadgeCondition($user, $badge)) {
                $this->unlockBadge($user, $badge);
            }
        }
    }

    /**
     * Check if a badge's unlock condition is met.
     */
    private function checkBadgeCondition(User $user, Badge $badge): bool
    {
        $condition = $badge->unlock_condition;

        if (!$condition) {
            return false;
        }

        $type = $condition['type'] ?? null;

        if ($type === 'tier_reached') {
            if (!$user->tier || empty($condition['tier_id'])) {
                return false;
            }
            $requiredTier = Tier::find($condition['tier_id']);
            return $requiredTier && $user->tier->min_points >= $requiredTier->min_points;
        }

        return match ($type) {
            'points_threshold' => $user->points >= ($condition['points'] ?? 0),
            'first_purchase'   => $user->orders()->where('status', 'delivered')->count() >= 1,
            'purchases_count'  => $user->orders()->where('status', 'delivered')->count() >= ($condition['count'] ?? 1),
            default            => false,
        };
    }

    /**
     * Unlock a badge for user.
     */
    public function unlockBadge(User $user, Badge $badge): void
    {
        if (!$user->hasBadge($badge->id)) {
            $user->badges()->attach($badge->id, [
                'unlocked_at' => now(),
            ]);
        }
    }

    /**
     * Generate referral code for user.
     */
    public function generateReferralCode(User $user): string
    {
        $code = 'REF-' . strtoupper(Str::random(8));

        $user->update(['referral_code' => $code]);

        return $code;
    }

    /**
     * Get user's loyalty information summary.
     */
    public function getUserLoyaltySummary(User $user): array
    {
        $nextTier = Tier::where('min_points', '>', $user->points)
            ->orderBy('min_points', 'asc')
            ->first();

        return [
            'current_points' => $user->points,
            'current_tier' => $user->tier?->name ?? 'Bronze',
            'tier_color' => $user->tier?->color,
            'next_tier' => $nextTier?->name,
            'points_to_next_tier' => $nextTier ? $nextTier->min_points - $user->points : null,
            'total_orders' => $user->orders()->count(),
            'badges_count' => $user->badges()->count(),
            'discount_percentage' => $user->tier?->discount_percentage ?? 0,
        ];
    }

    /**
     * Get user's recent transactions.
     */
    public function getUserRecentTransactions(User $user, int $limit = 10): array
    {
        return $user->pointsTransactions()
            ->with('order')
            ->latest()
            ->limit($limit)
            ->get()
            ->toArray();
    }
}
