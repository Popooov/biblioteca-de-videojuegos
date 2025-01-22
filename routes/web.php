<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'videojuegos' => [
            [
                'id' => 1,
                'titulo' => "Sid Meier's: Civilization VII",
                'descripcion' => 'Construye el mayor imperio que el mundo haya conocido.',
                'lanzamiento' => '11 febrero 2025',
                'genero' => 'Estrategia',
                'plataforma' => 'Switch'
            ],
            [
                'id' => 2,
                'titulo' => "EA SPORTS FC 25",
                'descripcion' => 'EA SPORTS FC™ 25 te ofrece más formas de ganar por el club.',
                'lanzamiento' => '27 septiembre 2024',
                'genero' => 'Deportes',
                'plataforma' => 'PS5'
            ],
            [
                'id' => 3,
                'titulo' => "It Takes Two",
                'descripcion' => 'Embárcate en la aventura más loca de tu vida con It Takes Two, un juego de plataformas multigénero creado exclusivamente para jugar en cooperativo.',
                'lanzamiento' => '26 marzo 2021',
                'genero' => 'Aventura',
                'plataforma' => 'PS4'
            ],
        ]
    ]);
});

Route::get('/{id}', function ($id) {
    $videojuegos = [
        [
            'id' => 1,
            'titulo' => "Sid Meier's: Civilization VII",
            'descripcion' => 'Construye el mayor imperio que el mundo haya conocido.',
            'lanzamiento' => '11 febrero 2025',
            'genero' => 'Estrategia',
            'plataforma' => 'Switch'
        ],
        [
            'id' => 2,
            'titulo' => "EA SPORTS FC 25",
            'descripcion' => 'EA SPORTS FC™ 25 te ofrece más formas de ganar por el club.',
            'lanzamiento' => '27 septiembre 2024',
            'genero' => 'Deportes',
            'plataforma' => 'PS5'
        ],
        [
            'id' => 3,
            'titulo' => "It Takes Two PS4",
            'descripcion' => 'Embárcate en la aventura más loca de tu vida con It Takes Two, un juego de plataformas multigénero creado exclusivamente para jugar en cooperativo.',
            'lanzamiento' => '26 marzo 2021',
            'genero' => 'Aventura',
            'plataforma' => 'PS4'
        ],
    ];

    $videojuego = Arr::first($videojuegos, fn($vj) => $vj['id'] == $id);

    return view('videojuego', ['videojuego' => $videojuego]);
});