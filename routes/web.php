<?php

use App\Models\Videojuego;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $videojuegos = Videojuego::with('user')->paginate(12);

    return view('index', [
        'videojuegos' => $videojuegos
    ]);
});

Route::get('/{id}', function ($id) {

    $videojuego = Videojuego::find($id);

    return view('videojuego', ['videojuego' => $videojuego]);
});