<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table = 'orden';
    protected $primaryKey = 'id_orden';
    protected $fillable = [
        'fecha', 'observaciones', 'num_documento','estado','anio'
    ];
}
