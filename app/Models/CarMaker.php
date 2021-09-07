<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarMaker extends Model
{
    use HasFactory;

    protected $fillable = ['maker', 'country'];
    protected $table = 'car_makers';

    public function models(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(CarModel::class, 'maker_id');
    }
}
