<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'persona';
    protected $primaryKey = 'persona_ID';
    protected $fillable = [
        'tipo_persona', 'tipo_documento', 'documento','sexo','celular','email','estado'
    ];
}
