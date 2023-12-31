<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salida_Producto_Detalle extends Model{
    protected $table = 'salida_producto_detalle';
    protected $primaryKey = 'id_salida_detalle';
    protected $fillable =[
        'idsalida', 'idproducto','cantidad','cod_producto','precio'
        ];
}