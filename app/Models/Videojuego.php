<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    protected $fillable = [
        'titulo',
        'descripcion',
        'lanzamiento',
        'genero',
        'plataforma'
    ];
}
