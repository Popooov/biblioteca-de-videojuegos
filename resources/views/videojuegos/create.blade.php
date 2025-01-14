<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Crear Videojuego
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('videojuegos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="titulo" class="block text-gray-700 dark:text-gray-300">Título</label>
                            <input type="text" name="titulo" id="titulo" class="block mt-1 w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="descripcion" class="block text-gray-700 dark:text-gray-300">Descripción</label>
                            <textarea name="descripcion" id="descripcion" class="block mt-1 w-full"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="caratula" class="block text-gray-700 dark:text-gray-300">Carátula</label>
                            <input type="file" name="caratula" id="caratula" class="block mt-1 w-full">
                        </div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
