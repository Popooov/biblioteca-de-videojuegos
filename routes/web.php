<?php

use App\Models\Videojuego;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $videojuegos = Videojuego::with('user')->simplePaginate(12);

    return view('videojuegos.index', [
        'videojuegos' => $videojuegos
    ]);
});

Route::get('/crear', function () {
    return view('videojuegos.crear');
});

Route::post('/', function () {
    dd('sdfsd');
});

Route::get('/{id}', function ($id) {

    $videojuego = Videojuego::find($id);

    return view('videojuegos.mostrar', ['videojuego' => $videojuego]);
});
