<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             "name" => $this->faker->lastName,
            "prenom"=> $this->faker->firstName,
            'email' => $this->faker->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            "sexe" => $this->faker->randomElement(['Home', 'Femme']),
            "tel"=> $this->faker->phoneNumber,
            'numeroPieceIdentite' => $this->faker->unique()->bankAccountNumber,

            "date_naissance" => $this->faker->date('Y-m-d', '-18 years'),
            "adresse"=> $this->faker->address,

       'departement' => $this-> faker->randomElement(['Ressources humaines', 'Support technique','Administration ', 'Développement', 'Finance']),
        'poste' =>  $this->faker->randomElement(['développeur', 'commercial',' ', 'Teacher', 'Chef']),
        'type_contrat' =>  $this->faker->randomElement(['CDI', 'CDD', 'Stage', 'Intérim']),
        'dateDembauche' =>  $this->faker->date('Y-m-d'),


        //    'remember_token' => Str::random(10),
        //     'email_verified_at' => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
