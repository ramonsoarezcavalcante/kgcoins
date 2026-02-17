<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use App\Models\Badge;
use App\Services\LoyaltyService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateUserLoyaltyPoints implements ShouldQueue
{
    use InteractsWithQueue;

    private LoyaltyService $loyaltyService;

    /**
     * Create the event listener.
     */
    public function __construct(LoyaltyService $loyaltyService)
    {
        $this->loyaltyService = $loyaltyService;
    }

    /**
     * Handle the event.
     */
    public function handle(OrderCreated $event): void
    {
        $order = $event->order;
        $user = $order->user;

        // Calculate points for this order
        $points = $this->loyaltyService->calculatePointsForOrder($order);

        // Add points to user
        $this->loyaltyService->addPoints(
            $user,
            $points,
            'purchase',
            $order,
            "Pontos ganhos na compra #{$order->order_number}"
        );

        // Update order with points earned
        $order->update(['points_earned' => $points]);

        // Check for "Primeira Compra" badge
        if ($user->orders()->where('status', '!=', 'cancelled')->count() === 1) {
            $badge = Badge::where('name', 'Primeira Compra')->first();
            if ($badge) {
                $this->loyaltyService->unlockBadge($user, $badge);
            }
        }

        // Check for purchase count badges
        $purchaseCount = $user->orders()->where('status', 'delivered')->count();
        if ($purchaseCount === 5) {
            $badge = Badge::where('name', 'Comprador Ativo')->first();
            if ($badge) {
                $this->loyaltyService->unlockBadge($user, $badge);
            }
        }
    }
}
