<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'points',
        'tier_id',
        'referral_code',
        'last_points_update',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'points' => 'integer',
            'last_points_update' => 'datetime',
        ];
    }

    /**
     * Get the tier this user belongs to.
     */
    public function tier(): BelongsTo
    {
        return $this->belongsTo(Tier::class);
    }

    /**
     * Get all orders placed by this user.
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    /**
     * Get all points transactions for this user.
     */
    public function pointsTransactions(): HasMany
    {
        return $this->hasMany(PointsTransaction::class)->latest();
    }

    /**
     * Get all badges unlocked by this user.
     */
    public function badges(): BelongsToMany
    {
        return $this->belongsToMany(Badge::class, 'user_badges')
            ->withTimestamps()
            ->withPivot('unlocked_at');
    }

    /**
     * Check if user has a specific badge.
     */
    public function hasBadge($badgeId): bool
    {
        return $this->badges()->where('badge_id', $badgeId)->exists();
    }

    /**
     * Generate and set a unique referral code.
     */
    public function generateReferralCode(): void
    {
        $this->update([
            'referral_code' => 'REF-' . strtoupper(Str::random(8)),
        ]);
    }

    /**
     * Indicações feitas por este usuário (como indicador).
     */
    public function referralsMade(): HasMany
    {
        return $this->hasMany(Referral::class, 'referrer_id');
    }

    /**
     * Indicação em que este usuário foi o indicado.
     */
    public function referralReceived(): HasMany
    {
        return $this->hasMany(Referral::class, 'referred_id');
    }
}
