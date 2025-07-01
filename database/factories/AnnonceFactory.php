<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Annonce>
 */
class AnnonceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->sentence(4),
            // 'responsable' => $this->faker->name(),
            // 'date_publication' => $this->faker->date(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
