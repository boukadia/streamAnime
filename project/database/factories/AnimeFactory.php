<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\anime>
 */
class AnimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "photo"=>fake()->url(),
            "titre"=>fake()->name(),
            "description"=>fake()->name(),
            "yearCreation"=>fake()->date(),
            "yearFin"=>fake()->date(),
            "trailer"=>fake()->url(),
            "studio"=>fake()->name(),
        ];
    }
}
