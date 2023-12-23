<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdenDetalle extends Model
{
    protected $table = 'ingreso_producto_detalle';
    protected $primaryKey = 'idordendet';
    protected $fillable = [
        'idingreso', 'idproducto', 'cantidad','cod_producto','precio'
    ];
}
