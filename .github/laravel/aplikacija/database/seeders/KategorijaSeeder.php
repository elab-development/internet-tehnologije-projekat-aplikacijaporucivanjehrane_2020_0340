<?php

namespace Database\Seeders;

use App\Models\Kategorija;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategorijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategorija::insert([
            ['naziv' => 'Rostilj'],
            ['naziv' => 'Pasta'],
            ['naziv' => 'Salate'],
            ['naziv' => 'Dorucak'],
            ['naziv' => 'Susi'],
            ['naziv' => 'Dorucak'],
            ['naziv' => 'Poslastice'],
            ['naziv' => 'Pice'],
            ['naziv' => 'Posno'],
            ['naziv' => 'Vege'],
        ]);
    }
}
