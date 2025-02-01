<?php

namespace App\Http\Controllers;

use App\Models\Videojuego;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class VideojuegoController extends Controller
{
    public function index() {
        $videojuegos = Videojuego::with('user')->latest()->simplePaginate(12);

        return view('videojuegos.index', [
            'videojuegos' => $videojuegos
        ]);
    }

    public function create() {
        return view('videojuegos.create');
    }

    public function show(Videojuego $videojuego) {
        return view('videojuegos.show', ['videojuego' => $videojuego]);
    }

    public function store() {
        request()->validate([
            'titulo' => ['required', 'min:3'],
            'descripcion' => ['required'],
            'lanzamiento' => ['required'],
            'genero' => ['required'],
            'plataforma' => ['required'],
        ]);
    
        Videojuego::create([
            'user_id' => 21,
            'titulo' => request('titulo'),
            'descripcion' => request('descripcion'),
            'lanzamiento' => request('lanzamiento'),
            'genero' => request('genero'),
            'plataforma' => request('plataforma'),
            // 'imagen' => request('imagen')
        ]);
    
        return redirect('/videojuegos');
    }

    public function edit(Videojuego $videojuego) {
        return view('videojuegos.edit', ['videojuego' => $videojuego]);
    }

    public function update(Videojuego $videojuego) {
        request()->validate([
            'titulo' => ['required', 'min:3'],
            'descripcion' => ['required'],
            'lanzamiento' => ['required'],
            'genero' => ['required'],
            'plataforma' => ['required'],
        ]);
    
        $videojuego->update([
            'titulo' => request('titulo'),
            'descripcion' => request('descripcion'),
            'lanzamiento' => request('lanzamiento'),
            'genero' => request('genero'),
            'plataforma' => request('plataforma'),
        ]);
    
        return redirect('/videojuegos/' . $videojuego->id);
    }

    public function destroy(Videojuego $videojuego) {
        $videojuego->delete();

        return redirect('/videojuegos');
    }
}
