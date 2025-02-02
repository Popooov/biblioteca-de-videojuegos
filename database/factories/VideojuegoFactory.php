<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Videojuego>
 */
class VideojuegoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'titulo' => fake()->word(),
            'descripcion' => fake()->text(),
            'lanzamiento' => fake()->date(),
            'genero' => fake()->word(),
            'plataforma' => fake()->word()
        ];
    }
}
