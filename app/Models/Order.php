<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    /** @return BelongsTo  */
    public function pricing()
    {
        return $this->belongsTo(Pricing::class);
    }
    
    /** @return BelongsTo  */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /** @return App\Models\Service  */
    public function getServiceAttribute()
    {
        return $this->pricing->service;
    }
}
