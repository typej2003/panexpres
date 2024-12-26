<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    const CONFIRMED = '1';
    const NOTCONFIRMED = '0';

    const DELIVERED = 'delivered';
    const NOTDELIVERED = 'notdelivered';

    protected $fillable = [
        'nropedido',
        'reference',
        'comercio_id',
        'user_id',
        'title',
        'description',
        'coste',
        'currency',
        'metodo',
        'in_delivery',
        'confirmed',
        'shipping', 
        'address',
        'metodoentrega',
        //envio o pickupt
        //centro de distribucion
        'centrodistribucion_id',
        'comercio_id',
        //'address',
        'contactphone',
        'horario',        
        'comercio_id',
        //envio
        //'address',
        'identificationNac',
        'identificationNumber',
        'names',
        'surnames',
        'cellphonecode',
        'cellphone',
        'address',
        'country_id',
        'state_id',
        'city_id',
        'deliveryarea_id',
        'zipcode',
        //delivery
        'userdelivery_id',
        'pedidoentregado',
        'valoracionpedido',
        'valoraciondelivery',
    ];

    public function comercio()
    {
        return $this->hasOne(Comercio::class, 'id', 'comercio_id');
    }

    public function client()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
