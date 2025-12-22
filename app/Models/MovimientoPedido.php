<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimientoPedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'nropedido',
        'userdelivery_id',
        'origen',
        'destino',
        'costeenvio',
        'condicion',
    ];

    public function usercomercio()
    {
        return $this->hasOne(User::class, 'id', 'userdelivery_id');
    }    

    public function pedido()
    {
        return $this->hasOne(Pedido::class, 'nropedido', 'nropedido');
    }    
}
