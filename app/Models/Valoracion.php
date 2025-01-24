<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    /** @use HasFactory<\Database\Factories\ValoracionFactory> */
    use HasFactory;

    public function videojuego () {
        return $this->belongsTo(Videojuego::class);
    }

    public function user () {
        return $this->belongsTo(User::class);
    }
}
