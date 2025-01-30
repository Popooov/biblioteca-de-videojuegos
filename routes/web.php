<?php

use App\Models\Videojuego;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $videojuegos = Videojuego::with('user')->latest()->simplePaginate(12);

    return view('videojuegos.index', [
        'videojuegos' => $videojuegos
    ]);
});

Route::get('/aniadir', function () {
    return view('videojuegos.aniadir');
});

Route::post('/', function () {
    request()->validate([
        'titulo' => ['required', 'min:3'],
        'descripcion' => ['required'],
        'lanzamiento' => ['required'],
        'genero' => ['required'],
        'plataforma' => ['required'],
    ]);

    Videojuego::create([
        'user_id' => 1,
        'titulo' => request('titulo'),
        'descripcion' => request('descripcion'),
        'lanzamiento' => request('lanzamiento'),
        'genero' => request('genero'),
        'plataforma' => request('plataforma'),
        // 'imagen' => request('imagen')
    ]);

    return redirect('/');
});

Route::get('/{id}', function ($id) {

    $videojuego = Videojuego::find($id);

    return view('videojuegos.mostrar', ['videojuego' => $videojuego]);
});
