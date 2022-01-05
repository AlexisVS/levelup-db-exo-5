<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DossierMedicaleStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dossier_medicale_statuses')->insert([
            [
                'status' => 'diagnostiqué',
            ],
            [
                'status' => 'en cours de traitement',
            ],
            [
                'status' => 'guéri',
            ],
            [
                'status' => 'incurable',
            ],
        ]);
    }
}
