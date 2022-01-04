<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numero_registre_national' => $this->faker->unique()->numberBetween(100000000000, 999999999999) ,
            'nom' => $this->faker->firstName,
            'prenom' => $this->faker->lastName,
            'date_anniversaire' => $this->faker->date($format = 'd-m-Y', $max = 'now'),
            'genre' => 'Homme',
            'pays' => $this->faker->country,
            'ville' => $this->faker->city,
            'addresse' => $this->faker->address,
            'code_postale' => $this->faker->postcode,
            'numero_telephone' => $this->faker->phoneNumber,
            'nom_contact' => $this->faker->name,
            'numero_contact' => $this->faker->phoneNumber,
        ];
    }
}
