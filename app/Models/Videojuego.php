<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    public function user () {
        return $this->belongsTo(User::class);
    }

    public function comentarios () {
        return $this->hasMany(Comentario::class);
    }

    protected $fillable = ['titulo', 'descripcion', 'caratula', 'user_id'];
}
