<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'total_amount' => $this->faker->numberBetween(1000, 50000) / 100,
            'status' => $this->faker->randomElement(['pending', 'paid', 'processing', 'shipped', 'delivered', 'cancelled']),
            'points_earned' => 0,
            'order_number' => Order::generateOrderNumber(),
            'notes' => $this->faker->optional()->sentence(),
            'paid_at' => $this->faker->optional()->dateTime(),
            'shipped_at' => $this->faker->optional()->dateTime(),
            'delivered_at' => $this->faker->optional()->dateTime(),
        ];
    }
}
