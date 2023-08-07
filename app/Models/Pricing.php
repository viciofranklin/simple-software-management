<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pricing extends Model
{
    use HasFactory;

    /** @return BelongsTo  */
    public function pricelist()
    {
        return $this->belongsTo(Pricelist::class);
    }
    
    /** @return BelongsTo  */
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    
    /** @return BelongsTo  */
    public function point()
    {
        return $this->belongsTo(Point::class);
    }
}
