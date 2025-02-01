<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\VideojuegoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::resource('videojuegos', VideojuegoController::class);

Route::get('/videojuegos', [VideojuegoController::class, 'index']);
Route::get('/videojuegos/create', [VideojuegoController::class, 'create']);
Route::post('/videojuegos', [VideojuegoController::class, 'store'])->middleware('auth');
Route::get('/videojuegos/{videojuego}', [VideojuegoController::class, 'show']);
Route::get('/videojuegos/{videojuego}/edit', [VideojuegoController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'videojuego');
Route::patch('/videojuegos/{videojuego}', [VideojuegoController::class, 'update']);
Route::delete('/videojuegos/{videojuego}', [VideojuegoController::class, 'destroy'])
    ->middleware('auth')
    ->can('delete', 'videojuego');

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
