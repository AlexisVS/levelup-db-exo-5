<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('local_types')->insert([
            [
                'type' => 'block operatoire'
            ],
            [
                'type' => 'chambre'
            ],
            [
                'type' => 'Urgence'
            ],
            [
                'type' => 'salle d\'attente'
            ],
            [
                'type' => 'toilette'
            ],
            [
                'type' => 'radiologie'
            ],
            [
                'type' => 'cafeteria'
            ],
            [
                'type' => 'accueil'
            ],
            [
                'type' => 'ascenceurs'
            ],
            [
                'type' => 'maternité'
            ],
            [
                'type' => 'somatologie'
            ],
            [
                'type' => 'salle de reunion'
            ],
            [
                'type' => 'salle d\'attente'
            ],
        ]);
    }
}
