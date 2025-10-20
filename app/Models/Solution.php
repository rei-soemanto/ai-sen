<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Solution extends Model
{
    protected $fillable = [
        'name',
        'description',
        'last_update',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(SolutionImage::class, 'solution_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'last_updated_by');
    }

    public function product_solution(): BelongsToMany
    {
        return $this->belongsToMany(
            Product::class,
            'product_solution_assignments',
            'solution_id',
            'product_id'
        );
    }

    public function interested_solutions(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'interested_solutions',
            'solution_id',
            'user_id'
        );
    }
}
