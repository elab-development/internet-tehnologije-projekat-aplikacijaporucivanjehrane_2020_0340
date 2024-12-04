<?php

namespace Database\Factories;

use App\Models\Kategorija;
use App\Models\Restoran;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proizvod>
 */
class ProizvodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'naziv_proizvoda' => $this->faker->word,
            'cena' => $this->faker->randomFloat(2, 5, 100),
            'opis_proizvoda' => $this->faker->paragraph,
            'kategorija_id' =>  Kategorija::factory(),
            'restoran_id' =>  Restoran::factory(),
            /*function () {
                return Kategorija::factory()->create()->id;
            },*/
            'prilozi' => $this->faker->sentence,
            'slika' => $this->faker->sentence,
        ];
    }
}
