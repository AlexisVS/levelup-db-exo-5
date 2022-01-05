<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('docteur_id')->constrained();
            $table->string('numero_registre_national');
            $table->foreign('numero_registre_national')->references('numero_registre_national')->on('patients');
            $table->foreignId('consultation_status_id')->constrained();
            $table->foreignId('local_id')->constrained();
            $table->string('consultation_date');
            $table->boolean('pass_consultation');
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
        Schema::dropIfExists('consultations');
    }
}
