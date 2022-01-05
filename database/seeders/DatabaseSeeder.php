<?php

namespace Database\Seeders;

use App\Models\Consultation;
use App\Models\Docteur;
use App\Models\Dossier_medicale;
use App\Models\Dossier_medicale_status;
use App\Models\Local;
use App\Models\Maladie;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

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
            DossierMedicaleStatusesSeeder::class,
            ConsultationStatusSeeder::class,
        ]);

        Docteur::factory()->count(50)->create();

        Patient::factory()->count(200)->state(new Sequence(
            ['genre' => 'H'],
            ['genre' => 'F'],
        ))->create();

        Local::factory()->count(150)->create();

        $consultations = Consultation::factory()->count(200)->state(new Sequence(
            ['consultation_status_id' => 1],
            ['consultation_status_id' => 1],
            ['consultation_status_id' => 1],
            ['consultation_status_id' => 1],
            ['consultation_status_id' => 1],
            ['consultation_status_id' => 1],
            ['consultation_status_id' => 1],
            ['consultation_status_id' => 2],
            ['consultation_status_id' => 3],
            ['consultation_status_id' => 4],
        ))->create();

        foreach ($consultations as $consultation) {
            if ($consultation->consultation_status_id == 1 && Patient::all()->find('numero_registre_national', $consultation->numero_registre_national) ) {
                Dossier_medicale::factory()->state(
                    new Sequence(
                        fn ($sequence) => [
                            'numero_registre_national' => $consultation->numero_registre_national,
                            'consultation_id' => $consultation->id,
                        ]
                    )
                )->create();
            }
        }
    }
}
