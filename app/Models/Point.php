<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Point extends Model
{
    use HasFactory;

    /** @return BelongsToMany  */
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
