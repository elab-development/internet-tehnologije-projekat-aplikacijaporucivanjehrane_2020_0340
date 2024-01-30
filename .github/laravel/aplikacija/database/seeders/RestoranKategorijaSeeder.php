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
       // RestoranKategorija::factory()->count(20)->create();
       RestoranKategorija::factory()->create([
        //stepin vajat -rostilj
        'restoran_id' => '1',
        'kategorija_id' => '1',
    ]);

    RestoranKategorija::factory()->create([
        //walter -rostilj
        'restoran_id' => '2',
        'kategorija_id' => '1',
    ]);

    RestoranKategorija::factory()->create([
        //kale -rostilj
        'restoran_id' => '3',
        'kategorija_id' => '1',
    ]);

    RestoranKategorija::factory()->create([
        //grizli -rostilj
        'restoran_id' => '4',
        'kategorija_id' => '1',
    ]);

    RestoranKategorija::factory()->create([
        //rollbar -poslastice
        'restoran_id' => '5',
        'kategorija_id' => '2',
    ]);

    RestoranKategorija::factory()->create([
        //ferdinand -poslastice
        'restoran_id' => '6',
        'kategorija_id' => '2',
    ]);

    RestoranKategorija::factory()->create([
        //rollbar -poslastice
        'restoran_id' => '7',
        'kategorija_id' => '2',
    ]);

    RestoranKategorija::factory()->create([
        //rollbar -poslastice
        'restoran_id' => '8',
        'kategorija_id' => '2',
    ]);

    RestoranKategorija::factory()->create([
        //rollbar -poslastice
        'restoran_id' => '9',
        'kategorija_id' => '3',
    ]);

    RestoranKategorija::factory()->create([
        //rollbar -poslastice
        'restoran_id' => '10',
        'kategorija_id' => '3',
    ]);

    RestoranKategorija::factory()->create([
        //rollbar -poslastice
        'restoran_id' => '11',
        'kategorija_id' => '3',
    ]);

    RestoranKategorija::factory()->create([
        //rollbar -poslastice
        'restoran_id' => '12',
        'kategorija_id' => '3',
    ]);
    }
}
