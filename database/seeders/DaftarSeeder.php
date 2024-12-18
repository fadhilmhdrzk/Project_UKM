<?php

namespace Database\Seeders;

use App\Models\Daftar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Daftar::factory()->count(10)->create();
    }
}
