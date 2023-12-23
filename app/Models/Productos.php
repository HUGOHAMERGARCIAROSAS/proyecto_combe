<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    protected $fillable = [
        'codigo', 'descripcion', 'id_categoria','id_unidad_medida','estado'
    ];
}
