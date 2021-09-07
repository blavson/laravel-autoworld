<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    public function maker(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(CarMaker::class, 'maker_id');
    }

    public function cars(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Car::class);
    }
}
