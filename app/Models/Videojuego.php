<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'titulo',
        'descripcion',
        'lanzamiento',
        'genero',
        'plataforma'
    ];

    public function user () {
        return $this->BelongsTo(User::class);
    }

    public function valoraciones () {
        return $this->hasMany(Valoracion::class);
    }
}
