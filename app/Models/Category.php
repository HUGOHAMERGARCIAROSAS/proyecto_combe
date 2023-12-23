<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'id_categoria';
    protected $fillable = [
        'descripcion', 'abrev', 'tipo','estado'
    ];
}
