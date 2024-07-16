<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_club',
        'nombre_presidente',
        'ciudad',
        'direccion',
        'telefono',
        'fecha_registro',
    ];
}
