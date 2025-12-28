<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagoZelle extends Model
{
    use HasFactory;

    protected $fillable = [
        'remitente',
        'monto',
        'referencia',
        'estado',
        'fecha_pago',
        'alias_identificador',
        'nota_memorandum',
    ];
}
