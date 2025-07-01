<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reunion>
 */
class ReunionFactory extends Factory
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
            'type' =>$this->faker->randomElement(['reunion interne', 'reunion externe']),
            'date_reunions' => $this->faker->date(),
            'heure_reunions' =>$this->faker->time(),
        ];
    }
}
