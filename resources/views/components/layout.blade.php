<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <title>Biblioteca de videojuegos</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="h-full">
        <div class="min-h-full">
            <nav class="bg-gray-800">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 items-center justify-between">
                        <div class="flex items-center">
                            <div class="shrink-0">
                                <img class="size-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <x-nav-link href="/" :active="request()->is('/')">Inicio</x-nav-link>
                                    <x-nav-link href="/videojuegos" :active="request()->is('/videojuegos')">Biblioteca de videojuegos</x-nav-link>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-4 flex items-center md:ml-6">
                                @guest
                                    <x-nav-link href="/login" :active="request()->is('login')">Iniciar Sesión</x-nav-link>
                                    <x-nav-link href="/register" :active="request()->is('register')">Registrarse</x-nav-link>
                                @endguest
                                @auth
                                    <form method='POST' action='/logout'>
                                        @csrf
                                        <x-form-button>Cerrar sesíon</x-form-button>
                                    </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="md:hidden" id="mobile-menu">
                    <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                        <x-nav-link href="/" :active="request()->is('/')">Inicio</x-nav-link>
                        <x-nav-link href="/videojuegos" :active="request()->is('/videojuegos')" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Biblioteca de videojuegos</x-nav-link>
                    </div>
                    <div class="border-t border-gray-700 pb-3 pt-4">
                        @guest
                            <x-nav-link href="/login" :active="request()->is('login')" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Iniciar Sesión</x-nav-link>
                            <x-nav-link href="/register" :active="request()->is('register')" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Registrarse</x-nav-link>
                        @endguest
                        @auth
                            <form class='px-2 sm:px-3' method='POST' action='/logout'>
                                @csrf
                                <x-form-button>Cerrar sesíon</x-form-button>
                            </form>
                        @endauth
                    </div>
                </div>
            </nav>
        
            <header class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between sm:items-center">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>

                    <x-button href="/videojuegos/create">Añadir videojuego</x-button>
                    
                </div>
            </header>
            <main>
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>
</html>
