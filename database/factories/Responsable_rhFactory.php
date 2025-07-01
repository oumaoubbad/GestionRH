<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Responsable_rh>
 */
class Responsable_rhFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nom" => $this->faker->lastName,
            "prenom"=> $this->faker->firstName,
            "sexe" => $this->faker->randomElement(['M', 'F']),
            // "date_naissance" => $this->faker->dateTimeBetween("1980-01-01", "2003-12-30"),
            "date_naissance" => $this->faker->date('Y-m-d', '-18 years'),
            "tel"=> $this->faker->phoneNumber,
            "nationalite"=> $this->faker->country,
            'email' => $this->faker->unique()->safeEmail(),
            "adresse"=> $this->faker->address,
            "dateDembauche" => $this->faker->date('Y-m-d'),
            "poste" => $this->faker->jobTitle,
            "salaire" => $this->faker->randomFloat(2, 1000, 5000),

        ];
    }
}
