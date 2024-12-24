<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function comercios()
    {
        return $this->hasMany(Comercio::class);
    }    

    public function CantComercio()
    {
        return $this->hasMany(Comercio::class)->count();
    }

}
