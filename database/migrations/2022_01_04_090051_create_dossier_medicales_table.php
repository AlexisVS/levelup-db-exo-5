<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossierMedicalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossier_medicales', function (Blueprint $table) {
            $table->id();
            $table->string('numero_registre_national');
            $table->foreign('numero_registre_national')->references('numero_registre_national')->on('patients');
            $table->foreignId('maladie_id')->constrained();
            $table->foreignId('dossier_medicale_status_id')->constrained();
            $table->foreignId('consultation_id')->constrained();
            $table->string('diagnostic');
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
        Schema::dropIfExists('dossier_medicales');
    }
}
