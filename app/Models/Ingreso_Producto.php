<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingreso_Producto extends Model
{
    protected $table = 'ingreso_productos';
    protected $primaryKey = 'id_producto';
    protected $fillable = [
        'fecha', 'observaciones', 'num_documento','estado','anio'
    ];
}
