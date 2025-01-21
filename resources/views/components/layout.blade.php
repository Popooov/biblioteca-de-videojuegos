<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <title>Biblioteca de videojuegos</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
        <body class="font-sans antialiased dark:bg-black dark:text-white/50">
            <div class="bg-white">
                <header class="relative bg-white">
                    <nav aria-label="Top" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="border-b border-gray-200">
                            <div class="flex h-16 items-center">
                                <!-- Logo -->
                                <div class="ml-4 flex lg:ml-0">
                                    <a href="#">
                                    <span class="sr-only">Your Company</span>
                                    <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
                                    </a>
                                </div>
                    
                                <!-- Flyout menus -->
                                <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                                    <div class="flex h-full space-x-8">
                                        <div class="flex">
                                            <div class="relative flex">
                                            <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                                                <div class="relative z-10 -mb-px flex items-center border-b-2 border-transparent pt-px text-sm font-medium text-gray-700 transition-colors duration-200 ease-out hover:text-gray-800">
                                                    <x-nav-link href="#">Biblioteca de videojuegos</x-nav-link>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ml-auto flex items-center">
                                    <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                                        <x-nav-link href="#">Sign in</x-nav-link>
                                        <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                                        <x-nav-link href="#">Create account</x-nav-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>

                {{ $slot }}
            </div>
        </body>
</html>