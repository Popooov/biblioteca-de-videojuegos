<x-layout>
    <x-slot:heading>
      Añadir videojuego
    </x-slot:heading>
    <form method="POST" action="/">
        @csrf
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-4">
                <label for="titulo" class="block text-sm/6 font-medium text-gray-900">Titulo</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" name="titulo" id="titulo" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" required placeholder="titulo de videojuego">
                  </div>

                  @error('titulo')
                    <p class="text-xs text-red-600 font-semibold mt-1">{{ $message }}</p>
                  @enderror

                </div>
              </div>

              <div class="sm:col-span-4">
                <label for="lanzamiento" class="block text-sm/6 font-medium text-gray-900">Lanzamiento</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" name="lanzamiento" id="lanzamiento" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" required placeholder="lanzamiento de videojuego">
                  </div>

                  @error('lanzamiento')
                    <p class="text-xs text-red-600 font-semibold mt-1">{{ $message }}</p>
                  @enderror

                </div>
              </div>

              <div class="sm:col-span-4">
                <label for="genero" class="block text-sm/6 font-medium text-gray-900">Genero</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" name="genero" id="genero" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" required placeholder="genero de videojuego">
                  </div>

                  @error('genero')
                    <p class="text-xs text-red-600 font-semibold mt-1">{{ $message }}</p>
                  @enderror

                </div>
              </div>

              <div class="sm:col-span-4">
                <label for="plataforma" class="block text-sm/6 font-medium text-gray-900">Plataforma</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" name="plataforma" id="plataforma" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" required placeholder="plataforma de videojuego">
                  </div>

                  @error('plataforma')
                    <p class="text-xs text-red-600 font-semibold mt-1">{{ $message }}</p>
                  @enderror

                </div>
              </div>
      
              <div class="col-span-full mb-5">
                <label for="descripcion" class="block text-sm/6 font-medium text-gray-900">Descripción</label>
                <div class="mt-2">
                  <textarea name="descripcion" id="descripcion" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required></textarea>
                </div>

                @error('descripcion')
                  <p class="text-xs text-red-600 font-semibold mt-1">{{ $message }}</p>
                @enderror

              </div>
            </div>

            <div class="col-span-full">
                <label for="cover-photo" class="block text-sm/6 font-medium text-gray-900">Imagen de videojuego</label>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                  <div class="text-center">
                    <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                      <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                    </svg>
                    <div class="mt-4 flex text-sm/6 text-gray-600">
                      <label for="subir-imagen" class="relative cursor-pointer rounded-md bg-gray-100 font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                        <span>Sube la imagen</span>
                        <input id="subir-imagen" name="subir-imagen" type="file" class="sr-only">
                      </label>
                      <p class="pl-1">o arrastra y suéltala aquí</p>
                    </div>
                    <p class="text-xs/5 text-gray-600">PNG, JPG, GIF hasta 10MB</p>
                  </div>
                </div>
              </div>

          </div>
        </div>
      

        <div class="mt-6 flex items-center justify-end gap-x-6">
          <a href="/" class="text-sm/6 font-semibold text-gray-700">Cancelar</a>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Añadir</button>
        </div>
      </form>
      
</x-layout>
