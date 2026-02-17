<?php

namespace Database\Seeders;

use App\Models\Tier;
use Illuminate\Database\Seeder;

class TierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tier::create([
            'name' => 'Bronze',
            'min_points' => 0,
            'discount_percentage' => 0,
            'color' => '#CD7F32',
            'benefits' => [
                'Free shipping above R$100',
                'Birthday bonus: 25 points',
            ],
        ]);

        Tier::create([
            'name' => 'Prata',
            'min_points' => 500,
            'discount_percentage' => 5,
            'color' => '#C0C0C0',
            'benefits' => [
                'Free shipping above R$50',
                'Birthday bonus: 50 points',
                '5% discount on all purchases',
                'Priority support',
            ],
        ]);

        Tier::create([
            'name' => 'Ouro',
            'min_points' => 1000,
            'discount_percentage' => 10,
            'color' => '#FFD700',
            'benefits' => [
                'Free shipping above R$25',
                'Birthday bonus: 100 points',
                '10% discount on all purchases',
                'Priority support',
                'Early access to sales',
            ],
        ]);

        Tier::create([
            'name' => 'Platina',
            'min_points' => 5000,
            'discount_percentage' => 15,
            'color' => '#E5E4E2',
            'benefits' => [
                'Free shipping on all orders',
                'Birthday bonus: 250 points',
                '15% discount on all purchases',
                'VIP support 24/7',
                'Early access to new releases',
                'Exclusive events and promotions',
            ],
        ]);
    }
}
