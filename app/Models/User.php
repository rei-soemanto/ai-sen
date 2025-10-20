<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'last_updated_by');
    }

    public function solutions(): HasMany
    {
        return $this->hasMany(Solution::class, 'last_updated_by');
    }

    public function interested_products(): BelongsToMany
    {
        return $this->belongsToMany(
            Product::class,
            'interested_products',
            'user_id',
            'product_id'
        );
    }

    public function interested_solutions(): BelongsToMany
    {
        return $this->belongsToMany(
            Solution::class,
            'interested_solutions',
            'user_id',
            'solution_id'
        );
    }
}
