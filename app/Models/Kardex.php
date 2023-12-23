<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kardex extends Model
{
    protected $table = 'kardex';
    protected $primaryKey = 'id_kardex';
    protected $fillable = [
        'id_producto', 'fecha', 'ingreso','salida','saldo',
        'tipo','id_ingreso','precio','metodo','estado'
    ];
}
