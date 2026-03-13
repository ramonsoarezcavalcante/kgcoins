<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Referral extends Model
{
    protected $fillable = [
        'referrer_id',
        'referred_id',
        'order_id',
        'product_name',
        'product_value',
        'commission_percentage',
        'commission_amount',
        'status',
        'notes',
        'approved_at',
        'paid_at',
    ];

    protected $casts = [
        'product_value'         => 'decimal:2',
        'commission_percentage' => 'decimal:2',
        'commission_amount'     => 'decimal:2',
        'approved_at'           => 'datetime',
        'paid_at'               => 'datetime',
    ];

    public function referrer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'referrer_id');
    }

    public function referred(): BelongsTo
    {
        return $this->belongsTo(User::class, 'referred_id');
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Calcula o valor da comissão com base no valor do produto e porcentagem.
     */
    public function calculateCommission(): float
    {
        if ($this->product_value && $this->commission_percentage) {
            return round($this->product_value * ($this->commission_percentage / 100), 2);
        }

        return 0.00;
    }

    /**
     * Atualiza a comissão calculada automaticamente.
     */
    public function recalculateCommission(): void
    {
        $this->update(['commission_amount' => $this->calculateCommission()]);
    }

    public function isPending(): bool
    {
        return $this->status === 'pending';
    }

    public function isApproved(): bool
    {
        return $this->status === 'approved';
    }

    public function isPaid(): bool
    {
        return $this->status === 'paid';
    }

    public function isCancelled(): bool
    {
        return $this->status === 'cancelled';
    }
}
