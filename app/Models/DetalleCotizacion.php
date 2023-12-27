<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleCotizacion extends Model
{
    protected $table = 'detalle_cotizacion';
    protected $primaryKey = 'id_detcotizacion';
    protected $fillable = [
        'id_cotizacion','id_producto','cantidad','activo','id_proveedor','precio'
    ];
}
