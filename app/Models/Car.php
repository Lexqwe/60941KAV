<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    protected $fillable = [
        'license_plate', 'category_id', 'brand', 'model',
        'year', 'color', 'price_per_day', 'status',
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
