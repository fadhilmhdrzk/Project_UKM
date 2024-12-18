<?php

namespace Database\Seeders;

use App\Models\ukm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ukmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ukm::factory()->count(10)->create();
    }
}
