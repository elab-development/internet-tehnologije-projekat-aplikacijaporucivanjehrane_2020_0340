<?php

namespace Database\Seeders;

use App\Models\RestoranKategorija;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestoranKategorijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RestoranKategorija::factory()->count(20)->create();
    }
}
