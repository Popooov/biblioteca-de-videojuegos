<?php

namespace App\Http\Controllers;

use App\Models\Videojuego;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class VideojuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videojuegos = Videojuego::all();

        return view('videojuegos.index', compact('videojuegos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('videojuegos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'caratula' => 'nullable|image|max:2048',
        ]);
    
        if ($request->hasFile('caratula')) {
            $validated['caratula'] = $request->file('caratula')->store('caratulas', 'public');
        }
    
        $validated['user_id'] = Auth::id();
    
        Videojuego::create($validated);
    
        return redirect()->route('videojuegos.index')->with('success', 'Videojuego creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $videojuego = Videojuego::findOrFail($id);
        return view('videojuegos.show', compact('videojuego'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $videojuego = Videojuego::findOrFail($id);
        return view('videojuegos.edit', compact('videojuego'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $videojuego = Videojuego::findOrFail($id);
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'caratula' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('caratula')) {
            // Eliminar la carátula anterior si existe
            if ($videojuego->caratula) {
                Storage::disk('public')->delete($videojuego->caratula);
            }

            $validated['caratula'] = $request->file('caratula')->store('caratulas', 'public');
        }

        $videojuego->update($validated);

        return redirect()->route('videojuegos.index')->with('success', 'Videojuego actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $videojuego = Videojuego::findOrFail($id);

        // Eliminar la carátula si existe
        if ($videojuego->caratula) {
            Storage::disk('public')->delete($videojuego->caratula);
        }

        $videojuego->delete();

        return redirect()->route('videojuegos.index')->with('success', 'Videojuego eliminado exitosamente.');
    }
}
