<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMikrotik extends Model
{
    use HasFactory;

    protected $fillable = [
        'server',
        'name',
        'password',
        'address',
        'macaddress',
        'profile',
        'routes',
        'email',
    ];

}
