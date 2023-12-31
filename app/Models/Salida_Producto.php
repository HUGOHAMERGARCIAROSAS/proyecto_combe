<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salida_Producto extends Model{
    protected $table = 'salida_productos';
    protected $primaryKey = 'id_producto';
    protected $fillable =[
        'fecha', 'observaciones','num_documento','estado','anio'
        ];
}