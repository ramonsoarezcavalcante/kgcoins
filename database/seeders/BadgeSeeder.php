<?php

namespace Database\Seeders;

use App\Models\Badge;
use Illuminate\Database\Seeder;

class BadgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Badge::create([
            'name' => 'Primeiros Passos',
            'description' => 'Conquistado ao registrar na plataforma',
            'icon' => '🎯',
            'unlock_condition' => null, // Manual unlock on registration
            'is_active' => true,
        ]);

        Badge::create([
            'name' => 'Primeira Compra',
            'description' => 'Realize sua primeira compra',
            'icon' => '🛍️',
            'unlock_condition' => [
                'type' => 'first_purchase',
            ],
            'is_active' => true,
        ]);

        Badge::create([
            'name' => 'Coletor de Pontos',
            'description' => 'Acumule 100 pontos de fidelidade',
            'icon' => '⭐',
            'unlock_condition' => [
                'type' => 'points_threshold',
                'points' => 100,
            ],
            'is_active' => true,
        ]);

        Badge::create([
            'name' => 'Fiel',
            'description' => 'Acumule 500 pontos de fidelidade',
            'icon' => '💎',
            'unlock_condition' => [
                'type' => 'points_threshold',
                'points' => 500,
            ],
            'is_active' => true,
        ]);

        Badge::create([
            'name' => 'VIP',
            'description' => 'Atinja o nível Platina',
            'icon' => '👑',
            'unlock_condition' => [
                'type' => 'tier_reached',
                'tier_id' => 4, // Platina
            ],
            'is_active' => true,
        ]);

        Badge::create([
            'name' => 'Comprador Ativo',
            'description' => 'Realize 5 compras na plataforma',
            'icon' => '🚀',
            'unlock_condition' => [
                'type' => 'purchases_count',
                'count' => 5,
            ],
            'is_active' => true,
        ]);

        Badge::create([
            'name' => 'Indicador',
            'description' => 'Indique 3 amigos para a plataforma',
            'icon' => '🤝',
            'unlock_condition' => [
                'type' => 'referrals_count',
                'count' => 3,
            ],
            'is_active' => true,
        ]);
    }
}
