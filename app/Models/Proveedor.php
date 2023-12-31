<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedor';
    protected $primaryKey = 'id_proveedor';
    protected $fillable = [
        'nombres', 'ruc', 'estado','direccion','telefono',
        'email','persona_ID'
    ];

}
