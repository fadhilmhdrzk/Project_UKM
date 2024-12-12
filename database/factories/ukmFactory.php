<?php

namespace Database\Factories;

use App\Models\Ukm; // Pastikan model diimpor
use Illuminate\Database\Eloquent\Factories\Factory;

class UkmFactory extends Factory
{
    /**
     * The name of the model that this factory is for.
     *
     * @var string
     */
    protected $model = Ukm::class; // Hubungkan ke model Ukm

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => fake()->unique()->randomNumber(),
            'nama' => fake()->name(),
            'kelas' => fake()->randomElement(['A', 'B', 'C']), // Ubah ke data valid
            'generasi' => fake()->randomElement(['23', '24', '25']),
        ];
    }
}
