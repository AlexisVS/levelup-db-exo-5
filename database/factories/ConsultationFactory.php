<?php

namespace Database\Factories;

use App\Models\Consultation;
use App\Models\Docteur;
use App\Models\Local;
use App\Models\Patient;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class ConsultationFactory extends Factory
{
    protected $model = Consultation::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'docteur_id' => Docteur::all()->random()->id,
            'numero_registre_national' => Patient::all()->random()->numero_registre_national,
            'consultation_status_id' => 1,
            'pass_consultation' => $this->faker->numberBetween(0, 1),
            'local_id' => Local::all()->random()->id,
            'consultation_date' => Carbon::parse(Carbon::createFromTimestamp(rand(1622505600, 1643587200), $tz = '1')->toDateTimeString())->hours(rand(8, 18)),
        ];
    }
}
