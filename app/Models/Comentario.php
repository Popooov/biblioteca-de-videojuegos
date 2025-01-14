<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public function user () {
        return $this->belongsTo(User::class);
    }

    public function videojuego () {
        return $this->belongsTo(Videojuego::class);
    }

    protected $fillable = ['comentario', 'puntuacion', 'user_id', 'videojuego_id'];
}
