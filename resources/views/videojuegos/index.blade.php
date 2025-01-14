<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Lista de Videojuegos
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (session('success'))
                        <div class="mb-4 text-green-500">
                            {{ session('success') }}
                        </div>
                    @endif
                    <a href="{{ route('videojuegos.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Crear Videojuego</a>
                    <table class="table-auto w-full border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border border-gray-300 px-4 py-2">Título</th>
                                <th class="border border-gray-300 px-4 py-2">Descripción</th>
                                <th class="border border-gray-300 px-4 py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($videojuegos as $videojuego)
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">{{ $videojuego->titulo }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $videojuego->descripcion }}</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <a href="{{ route('videojuegos.show', $videojuego->id) }}" class="text-blue-500">Ver</a>
                                        <a href="{{ route('videojuegos.edit', $videojuego->id) }}" class="text-yellow-500 ml-2">Editar</a>
                                        <form action="{{ route('videojuegos.destroy', $videojuego->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 ml-2">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
