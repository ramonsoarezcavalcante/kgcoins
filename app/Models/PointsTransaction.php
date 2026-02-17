<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PointsTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'points',
        'reason',
        'order_id',
        'description',
        'reference_id',
    ];

    protected $casts = [
        'points' => 'integer',
    ];

    /**
     * Get the user who owns this transaction.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the order associated with this transaction.
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Scope to filter transactions by reason.
     */
    public function scopeByReason($query, $reason)
    {
        return $query->where('reason', $reason);
    }

    /**
     * Scope to filter recent transactions.
     */
    public function scopeRecent($query, $days = 30)
    {
        return $query->where('created_at', '>=', now()->subDays($days));
    }
}
