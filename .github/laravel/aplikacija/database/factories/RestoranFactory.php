<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restoran>
 */
class RestoranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'naziv' => $this->faker->company,          
            'adresa' => $this->faker->address,           
            'opis' => $this->faker->sentence,             
            'ocena' => $this->faker->randomFloat(2, 1, 5), 
            'email' => $this->faker->unique()->safeEmail(),
            'slika' => $this->faker->sentence, 
        ];
    }
}
