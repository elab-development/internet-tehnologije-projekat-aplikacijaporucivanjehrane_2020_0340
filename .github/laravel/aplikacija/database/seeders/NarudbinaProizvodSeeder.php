<?php

namespace Database\Seeders;

use App\Models\NarudbinaProizvod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NarudbinaProizvodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NarudbinaProizvod::factory()->count(20)->create();
    }
}
