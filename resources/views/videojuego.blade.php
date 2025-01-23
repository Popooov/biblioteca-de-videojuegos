<x-layout>
    <x-slot:heading>
        Videojuego
    </x-slot:heading>
    <div class="bg-white">
        <div class="pt-6">
        <nav aria-label="Breadcrumb">
            <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <li>
                <div class="flex items-center">
                <a href="#" class="mr-2 text-sm font-medium text-gray-900">{{ $videojuego['genero'] }}</a>
                <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                    <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                </svg>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                <a href="#" class="mr-2 text-sm font-medium text-gray-900">{{ $videojuego['plataforma'] }}</a>
                <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                    <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                </svg>
                </div>
            </li>
    
            <li class="text-sm">
                <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">{{ $videojuego['titulo'] }}</a>
            </li>
            </ol>
        </nav>
    
        <!-- Image gallery -->
        <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <img src="{{ asset('images/ipd.webp') }}" alt="Two each of gray, white, and black shirts laying flat." class="hidden size-full rounded-lg object-cover lg:block">
            <!-- Options -->
            <div class="mt-4 lg:grid lg:grid-cols-1 lg:grid-rows-3 lg:mt-0">
                <h2 class="sr-only">Product information</h2>
                <div class="space-y-6">
                    <p class="text-3xl font-medium tracking-tight text-gray-900">{{ $videojuego['titulo'] }}</p>
                    <p class="text-base text-gray-900">{{ $videojuego['descripcion'] }}</p>
                </div>
                <!-- Reviews -->
                <div class="mt-6 self-end">
                    <h3 class="sr-only">Reviews</h3>
                    <div class="flex items-center">
                    <div class="flex items-center">
                        <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                        <svg class="size-5 shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                        </svg>
                        <svg class="size-5 shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                        </svg>
                        <svg class="size-5 shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                        </svg>
                        <svg class="size-5 shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                        </svg>
                        <svg class="size-5 shrink-0 text-gray-200" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <p class="sr-only">4 out of 5 stars</p>
                    <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117 reviews</a>
                    </div>
                </div>
        
                <form class="mt-10">
                    <!-- Colors -->
                    <div>
                    <h3 class="text-sm font-medium text-gray-900">Color</h3>
        
                    <fieldset aria-label="Choose a color" class="mt-4">
                        <div class="flex items-center gap-x-3">
                        <!-- Active and Checked: "ring ring-offset-1" -->
                        <label aria-label="White" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                            <input type="radio" name="color-choice" value="White" class="sr-only">
                            <span aria-hidden="true" class="size-8 rounded-full border border-black/10 bg-white"></span>
                        </label>
                        <!-- Active and Checked: "ring ring-offset-1" -->
                        <label aria-label="Gray" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                            <input type="radio" name="color-choice" value="Gray" class="sr-only">
                            <span aria-hidden="true" class="size-8 rounded-full border border-black/10 bg-gray-200"></span>
                        </label>
                        <!-- Active and Checked: "ring ring-offset-1" -->
                        <label aria-label="Black" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-900 focus:outline-none">
                            <input type="radio" name="color-choice" value="Black" class="sr-only">
                            <span aria-hidden="true" class="size-8 rounded-full border border-black/10 bg-gray-900"></span>
                        </label>
                        </div>
                    </fieldset>
                    </div>
                    <button type="submit" class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add to bag</button>
                </form>
                </div>
        </div>
    
        <!-- Product info -->
        <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto_auto_1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
        </div>
        </div>
    </div>
</x-layout>
