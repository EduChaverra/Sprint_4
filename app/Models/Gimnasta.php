<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gimnasta extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellidos',
        'modalidad',
        'nivel',
        'genero',
        'ciudad',
        'direccion',
        'telefono',
        'fecha_registro',
        'club_id',
    ];
}
