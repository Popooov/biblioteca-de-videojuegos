<x-layout>
    <x-slot:heading>
      Añadir videojuego
    </x-slot:heading>
    <form method="POST" action="/videojuegos">
        @csrf
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              
              <x-form-field>
                <x-form-label for="titulo">Titulo</x-form-label>
                <div class="mt-2">
                  <x-form-input name="titulo" id="titulo" placeholder="titulo de videojuego" required />
                  <x-form-error name="titulo" />
                </div>
              </x-form-field>
              
              <x-form-field>
                <x-form-label for="lanzamiento">Lanzamiento</x-form-label>
                <div class="mt-2">
                  <x-form-input name="lanzamiento" id="lanzamiento" placeholder="lanzamiento de videojuego" required />
                    <x-form-error name="lanzamiento" />
                </div>
              </x-form-field>
              
              <x-form-field>
                <x-form-label for="genero">Genero</x-form-label>
                <div class="mt-2">
                  <x-form-input name="genero" id="genero" placeholder="genero de videojuego" required />
                    <x-form-error name="genero" />
                </div>
              </x-form-field>
              
              <x-form-field>
                <x-form-label for="plataforma">Plataforma</x-form-label>
                <div class="mt-2">
                  <x-form-input name="plataforma" id="plataforma" placeholder="plataforma de videojuego" required />
                  <x-form-error name="plataforma" />
                </div>
              </x-form-field>
              
              <x-form-field>
                <x-form-label for="descripcion">Descripcion</x-form-label>
                <div class="mt-2">
                  <x-form-textarea name="descripcion" id="descripcion" rows="3" placeholder="descripcion de videojuego" required />
                  <x-form-error name="descripcion" />
                </div>
              </x-form-field>
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
          <a href="/videojuegos" class="text-sm/6 font-semibold text-gray-700">Cancelar</a>
          <x-form-button>Añadir</x-form-button>
        </div>
      </form>
</x-layout>
