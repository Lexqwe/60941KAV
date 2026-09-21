<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class AdditionalService extends Model
{
    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class, 'order_services', 'service_id', 'order_id');
    }
}
