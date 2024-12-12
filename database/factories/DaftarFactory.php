<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Daftar>
 */
class DaftarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $idUkm = \App\Models\Ukm::pluck('id')->toArray();
            return [
                'nim2' => $this->faker->randomElement($idUkm),
                'nama2' => $this->faker->randomElement(),
                'kelas2' => $this->faker->randomElement(),
                'generasi2' => $this->faker->randomElement(['23','24','25']),
        ];
    }
}
