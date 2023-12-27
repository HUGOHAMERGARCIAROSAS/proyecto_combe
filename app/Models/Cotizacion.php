<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    protected $table = 'cotizacion';
    protected $primaryKey = 'id_cotizacion';
    protected $fillable = [
        'solicitante_id','fecha_solicitud','nombre_cotizacion','activo'
    ];
}
