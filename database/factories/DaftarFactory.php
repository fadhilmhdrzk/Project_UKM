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
                'nim2' => $this->faker->unique()->numberBetween(2300000000, 2600000000),
                'nama2' => $this->faker->name(),
                'kelas2' => $this->faker->randomElement(['1 HMKD', '1 BD', '1 AKTP A', '1 AKTP B', '1 AKTP SW', '2 AKTP A', '2 AKTP B', '2 AKTP C', '3 AKTP',
                                                         '1 TRK A', '1 TRK B', '2 TRK A', '2 TRK B', '3 TRK', '1 SI A', '1 SI B', '1 SI C', '1 SI D', '1 SI E',
                                                         '2 SI A', '2 SI B', '2 SI C', '2 SI D', '3 SI A', '3 SI B', '3 SI C', '3 SI D', '1 TI A', '1 TI B',
                                                         '1 TI C', '1 TI D', '1 TI E', '1 TI F', '1 TI SW', '2 TI A', '2 TI B', '2 TI C', '2 TI D', '2 TI E',
                                                         '2 TI F', '3 TI A', '3 TI B', '3 TI C', '3 TI D', '3 TI E', '3 TI F', '1 TMS A', '1 TMS B', '1 TMS C',
                                                         '2 TMS A', '2 TMS B', '3 TMS A', '1 TET A', '1 TET B', '2 TET A', '2 TET B', '3 TET A', '3 TET B',
                                                         '1 TL A', '1 TL B', '2 TL A', '2 TL B', '3 TL', '1 TRJT A', '1 TRJT B', '2 TRJT A', '2 TRJT B',
                                                         '3 TRJT A', '3 TRJT B', '1 TRM A', '1 TRM B', '1 TRM C', '2 TRM A', '2 TRM B', '3 TRM A', '3 TRM B',
                                                         '1 TRSE A', '1 TRSE B', '2 TRSE A', '2 TRSE B', '3 TRSE A', '3 TRSE B']), // Ubah ke data valid
                'generasi2' => $this->faker->randomElement(['23','24','25']),
            ];
    }
}
