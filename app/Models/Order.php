<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_amount',
        'status',
        'points_earned',
        'order_number',
        'notes',
        'paid_at',
        'shipped_at',
        'delivered_at',
    ];

    protected $casts = [
        'total_amount' => 'decimal:2',
        'points_earned' => 'integer',
        'paid_at' => 'datetime',
        'shipped_at' => 'datetime',
        'delivered_at' => 'datetime',
    ];

    /**
     * Get the user who made this order.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the points transactions related to this order.
     */
    public function pointsTransactions(): HasMany
    {
        return $this->hasMany(PointsTransaction::class);
    }

    /**
     * Generate unique order number.
     */
    public static function generateOrderNumber(): string
    {
        return 'ORD-' . now()->format('YmdHis') . '-' . str_pad(random_int(0, 9999), 4, '0', STR_PAD_LEFT);
    }
}
