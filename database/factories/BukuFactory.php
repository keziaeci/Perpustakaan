<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => fake()->word(),
            'pengarang' => fake()->name(),
            'penerbit' => fake()->name(),
            'genre' => fake()->name(),
            'status' => fake()->name(),
            'tahun_terbit' => fake()->randomNumber(4,true),
            'sinopsis' => fake()->paragraph(5, true),
            'cover' => fake()->name(),
            'jumlah' => fake()->randomNumber(1),
        ];
    }
}
