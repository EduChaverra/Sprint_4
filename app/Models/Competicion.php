<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competicion extends Model
{
    use HasFactory;
    protected $table = 'competiciones';
    protected $fillable = [
        'nombre',
        'fecha',
        'lugar',
        'valor_inscripcion',
    ];
}
