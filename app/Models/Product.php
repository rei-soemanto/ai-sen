<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    protected $fillable = [
        'brand_id',
        'category_id',
        'name',
        'description',
        'image',
        'pdf_path',
        'last_update',
    ];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(ProductBrand::class, 'brand_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'last_updated_by');
    }

    public function product_solution(): BelongsToMany
    {
        return $this->belongsToMany(
            Solution::class,
            'product_solution_assignments',
            'product_id',
            'solution_id'
        );
    }

    public function interested_products(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'interested_products',
            'product_id',
            'user_id'
        );
    }
}
