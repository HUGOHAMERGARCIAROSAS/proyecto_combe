<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleProveedor extends Model
{
    protected $table = 'detalle_proveedor';
    protected $primaryKey = 'id_detproveedor';
    protected $fillable = [
        'id_cotizacion','id_proveedor','estado','activo'
    ];
}
