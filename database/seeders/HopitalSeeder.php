<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HopitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hopitals')->insert([
            [
                'nom' => 'Hopital jean charle',
                'addresse' => ' rue de jean charle 5',
            ],
            [
                'nom' => 'Hopital jean maurice',
                'addresse' => ' rue de jean maurice 15',
            ],
            [
                'nom' => 'Hopital jean baptiste',
                'addresse' => ' rue de jean baptiste 25',
            ],
        ]);
    }
}
