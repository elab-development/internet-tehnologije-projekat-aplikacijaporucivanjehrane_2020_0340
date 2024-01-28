<?php

namespace Database\Factories;

use App\Models\Kategorija;
use App\Models\Restoran;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RestoranKategorija>
 */
class RestoranKategorijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'restoran_id' => Restoran::factory(),
            'kategorija_id' => Kategorija::factory(),
        ];
    }
}
