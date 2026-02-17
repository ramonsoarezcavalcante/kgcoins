<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Badge extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'icon',
        'unlock_condition',
        'is_active',
    ];

    protected $casts = [
        'unlock_condition' => 'array',
        'is_active' => 'boolean',
    ];

    /**
     * Get all users who have unlocked this badge.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_badges')
            ->withTimestamps()
            ->withPivot('unlocked_at');
    }
}
