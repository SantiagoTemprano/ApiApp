<?php

namespace Database\Seeders;

use App\Models\Peticion;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PeticionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Peticion::factory()->times(50)->create();
    }
}
