<?php

namespace Database\Factories;

use App\Models\Dossier_medicale_status;
use App\Models\Maladie;
use Illuminate\Database\Eloquent\Factories\Factory;

class Dossier_medicaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'diagnostic' => $this->faker->text(200),
            'maladie_id' => Maladie::all()->random()->id,
            'dossier_medicale_status_id' => Dossier_medicale_status::all()->random()->id,
        ];
    }
}
