<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'min_points',
        'discount_percentage',
        'benefits',
        'color',
    ];

    protected $casts = [
        'benefits' => 'array',
        'min_points' => 'integer',
        'discount_percentage' => 'decimal:2',
    ];

    /**
     * Get all users belonging to this tier.
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
