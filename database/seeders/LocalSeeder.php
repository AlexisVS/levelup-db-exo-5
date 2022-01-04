<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locals')->insert([
            [
                'nom' => 'local 1',
                'local_type_id' => 1,
                'hopital_id' => 1,
            ],
            [
                'nom' => 'local 2',
                'local_type_id' => 2,
                'hopital_id' => 1,
            ],
            [
                'nom' => 'locale 3',
                'local_type_id' => 3,
                'hopital_id' => 1,
            ],
            [
                'nom' => 'locale 4',
                'local_type_id' => 4,
                'hopital_id' => 2,
            ],
            [
                'nom' => 'locale 5',
                'local_type_id' => 5,
                'hopital_id' => 2,
            ],
            [
                'nom' => 'locale 6',
                'local_type_id' => 6,
                'hopital_id' => 2,
            ],
            [
                'nom' => 'locale 7',
                'local_type_id' => 7,
                'hopital_id' => 3,
            ],
            [
                'nom' => 'locale 8',
                'local_type_id' => 8,
                'hopital_id' => 3,
            ],
            [
                'nom' => 'locale 9',
                'local_type_id' => 9,
                'hopital_id' => 3,
            ],
            [
                'nom' => 'locale 8',
                'local_type_id' => 8,
                'hopital_id' => 3,
            ],
        ]);
    }
}
