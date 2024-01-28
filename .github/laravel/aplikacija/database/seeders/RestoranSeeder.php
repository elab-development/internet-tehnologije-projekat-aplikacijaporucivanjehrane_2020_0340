<?php

namespace Database\Seeders;

use App\Models\Restoran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestoranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Restoran::factory()->count(5)->create();
    }
}
