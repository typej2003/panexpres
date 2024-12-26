<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryArea extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'state_id',
        'city_id',
        'comercio_id',
        'name',
        'distance',
        'coste',
    ];

    public function comercios()
    {
        return $this->hasMany(Comercio::class, 'id', 'comercio_id');
    }    

    public function country()
    {
        return $this->hasOne(Country::class, 'id', 'country_id');
    }

    public function province()
    {
        return $this->hasOne(Estado::class, 'id', 'state_id');
    }

    public function city()
    {
        return $this->hasOne(Cities::class, 'id', 'city_id');
    }
}
