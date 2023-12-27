<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'area';
    protected $primaryKey = 'are_codigo';
    protected $fillable = [
        'are_descripcion', 'are_abreviatura', 'activo','correo'
    ];
}