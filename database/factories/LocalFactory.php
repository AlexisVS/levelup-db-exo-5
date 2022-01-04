<?php

namespace Database\Factories;

use App\Models\Local;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocalFactory extends Factory
{
    protected $model = Local::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name,
            'local_type_id' => $this->faker->numberBetween(1, 13),
            'hopital_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
