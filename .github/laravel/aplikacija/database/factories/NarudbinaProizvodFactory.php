<?php

namespace Database\Factories;

use App\Models\Narudzbina;
use App\Models\Proizvod;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NarudbinaProizvod>
 */
class NarudbinaProizvodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'narudzbina_id' => function () {
                return Narudzbina::factory()->create()->id;
            },
            'proizvod_id' => function () {
                return Proizvod::factory()->create()->id;
            },
            'kolicina' => $this->faker->randomNumber(2),
        ];
    }
}
