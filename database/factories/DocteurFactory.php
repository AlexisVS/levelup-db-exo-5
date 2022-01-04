<?php

namespace Database\Factories;

use App\Models\Docteur;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Docteur::class;
    public function definition()
    {
        return [
            'nom' => $this->faker->name,
            'annee_experience' => $this->faker->numberBetween(0,50),
            'specialisation' => $this->faker->jobTitle,
        ];
    }
}
