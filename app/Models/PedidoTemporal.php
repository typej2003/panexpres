<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoTemporal extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'nropedido',
        'reference',
        'comercio_id',
        'user_id',
        'title',
        'description',
        'coste',
        'costeBs',
        'costeenvio',
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
        'zipcode',
        //delivery
        'deliveryarea_id',
        'deliveryarea',
        'userdelivery_id',
        'pedidoentregado',
        'valoracionpedido',
        'valoraciondelivery',
    ];

    protected $appends = [
        'metodo_entrega',
    ];

    public function getMetodoEntregaAttribute()
    {
        if($this->shipping == null)
		{
            return "No definido";
        }
			
        switch ($this->shipping) {
            case 'enviodelivery':
                return "Envio Delivery";
                # code...
                break;

            default:
                return "No definido";
                break;
        }	
		
    }

    public function getMonedaAttribute()
    {
        return ($this->currency == '1'?'Bs':'$');
    }

    public function getMonedaAttributeN()
    {
        return ($this->currency == '0'?'0':'1');
    }

    public function comercio()
    {
        return $this->hasOne(Comercio::class, 'id', 'comercio_id');
    }

    public function client()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function getConfirmed()
    {
        switch ($this->confirmed) {
            case '0':
                return 'NO CONFIRMADO';
                break;
            case '1':
                return 'CONFIRMADO';
                break;
            case '2':
                return 'CONFIRMACION RECHAZADA';
                break;
            
        }
    }

    public function getStatus()
    {
        switch ($this->status) {
            case '0':
                return 'En espera';
                break;
            case '1':
                return 'En Camino';
                break;
            case '2':
                return 'Entregado';
                break;
            
        }
    }
}
