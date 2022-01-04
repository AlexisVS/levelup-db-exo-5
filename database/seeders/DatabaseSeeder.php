<?php

namespace Database\Seeders;

use App\Models\Consultation;
use App\Models\Docteur;
use App\Models\Local;
use App\Models\Patient;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            HopitalSeeder::class,
            MaladieSeeder::class,
            LocalTypeSeeder::class,
            ConsultationStatusSeeder::class,
        ]);

        Docteur::factory()->count(50)->create();

        Patient::factory()->count(200)->state(new Sequence(
            ['genre' => 'H'],
            ['genre' => 'F'],
        ))->create();

        Local::factory()->count(150)->create();

        Consultation::factory()->count(200)->state(new Sequence(
            fn ($sequence) => ['docteur_id' => Docteur::all()->random()->id],
            fn ($sequence) => ['numero_registre_national' => Patient::all()->random()->numero_registre_national],
            ['consultation_status_id' => 1],
            ['consultation_status_id' => 1],
            ['consultation_status_id' => 1],
            ['consultation_status_id' => 2],
            fn ($sequence) => ['local_id' => Local::all()->random()->id],
            fn ($sequence) => ['consultation_date' => Carbon::now()->between('2021-06-01', '2022-01-31')],
            ['pass_consultation' => true],
            ['pass_consultation' => false],
        ))->create();
    }
}
