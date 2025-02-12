<?php

namespace App\Http\Controllers;

use App\Mail\VideojuegoCreado;
use App\Models\User;
use App\Models\Videojuego;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

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
            'imagen' => ['nullable','image', 'mimes:jpeg,png,jpg,gif', 'max:2048']
        ]);
        
        if (request()->hasFile('imagen')) {
            $rutaImagen = request()->file('imagen')->store('images', 'public');
        } else {
            $rutaImagen = 'images/ipd.webp';
        }

        $videojuego = Videojuego::create([
            'user_id' => Auth::getUser()->id,
            'titulo' => request('titulo'),
            'descripcion' => request('descripcion'),
            'lanzamiento' => request('lanzamiento'),
            'genero' => request('genero'),
            'plataforma' => request('plataforma'),
            'imagen' => $rutaImagen,
        ]);

        Mail::to($videojuego->user)->send(
            new VideojuegoCreado($videojuego)
        );
    
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
