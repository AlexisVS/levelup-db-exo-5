<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {

            $table->string('numero_registre_national')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('date_anniversaire');
            $table->string('genre');
            $table->string('pays');
            $table->string('ville');
            $table->string('addresse');
            $table->string('code_postale');
            $table->string('numero_telephone');
            $table->string('nom_contact');
            $table->string('numero_contact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
