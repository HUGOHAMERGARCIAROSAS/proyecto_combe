<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnidadMedida extends Model
{
    protected $table = 'unidad_medida';
    protected $primaryKey = 'id_unidad_medida';
    protected $fillable = [
        'descripcion', 'abrev','estado'
    ];
}
