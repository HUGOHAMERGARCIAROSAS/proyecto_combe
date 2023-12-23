<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingreso_Producto_Detalle extends Model
{
    protected $table = 'ingreso_producto_detalle';
    protected $primaryKey = 'idproddet';
    protected $fillable = [
        'idingreso', 'idproducto', 'cantidad','cod_producto','precio'
    ];
}
