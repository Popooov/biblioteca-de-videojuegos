<?php

use App\Models\Videojuego;
use Illuminate\Support\Facades\Route;

// Index
Route::get('/', function () {
    $videojuegos = Videojuego::with('user')->latest()->simplePaginate(12);

    return view('videojuegos.index', [
        'videojuegos' => $videojuegos
    ]);
});

// Añadir
Route::get('/aniadir', function () {
    return view('videojuegos.aniadir');
});

// Mostrar
Route::get('/{id}', function ($id) {

    $videojuego = Videojuego::find($id);

    return view('videojuegos.mostrar', ['videojuego' => $videojuego]);
});

// Guardar
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

// Editar
Route::get('/{id}/editar', function ($id) {

    $videojuego = Videojuego::find($id);

    return view('videojuegos.editar', ['videojuego' => $videojuego]);
});

// Actualizar
Route::patch('/{id}', function ($id) {
    request()->validate([
        'titulo' => ['required', 'min:3'],
        'descripcion' => ['required'],
        'lanzamiento' => ['required'],
        'genero' => ['required'],
        'plataforma' => ['required'],
    ]);

    $videojuego = Videojuego::findOrFail($id);

    $videojuego->update([
        'titulo' => request('titulo'),
        'descripcion' => request('descripcion'),
        'lanzamiento' => request('lanzamiento'),
        'genero' => request('genero'),
        'plataforma' => request('plataforma'),
    ]);

    return redirect('/' . $videojuego->id);
});

// Eliminar
Route::delete('/{id}', function ($id) {
    $videojuego = Videojuego::findOrFail($id);
    $videojuego->delete();

    return redirect('/');
});
