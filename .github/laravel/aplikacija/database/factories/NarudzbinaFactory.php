<?php

namespace Database\Factories;

use App\Models\Restoran;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Narudzbina>
 */
class NarudzbinaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),          
            'restoran_id' => Restoran::factory(),          
            'napomena' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['obradjeno', 'neobradjeno', 'potvrdjeno', 'isporuceno']),  
        ];
    }
}
