<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Detalles del Videojuego
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-bold">{{ $videojuego->titulo }}</h3>
                    <p class="mt-2">{{ $videojuego->descripcion }}</p>
                    @if ($videojuego->caratula)
                        <img src="{{ asset('storage/' . $videojuego->caratula) }}" alt="Carátula" class="w-1/3 mt-4">
                    @endif
                    <div class="mt-6">
                        <a href="{{ route('videojuegos.edit', $videojuego->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Editar</a>
                        <form action="{{ route('videojuegos.destroy', $videojuego->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Eliminar</button>
                        </form>
                        <a href="{{ route('videojuegos.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>