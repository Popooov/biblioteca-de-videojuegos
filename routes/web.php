<?php

use App\Http\Controllers\VideojuegoController;
use Illuminate\Support\Facades\Route;

Route::controller(VideojuegoController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::get('/{videojuego}', 'show');
    Route::post('/', 'store');
    Route::get('/{videojuego}/edit', 'edit');
    Route::patch('/{videojuego}', 'update');
    Route::delete('/{videojuego}', 'destroy');
});

// Route::get('/', function () {
//     return redirect('/videojuegos');
// });

// Route::resource('videojuegos', VideojuegoController::class);