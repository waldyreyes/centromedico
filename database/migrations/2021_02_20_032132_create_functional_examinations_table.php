<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFunctionalExaminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('functional_examinations', function (Blueprint $table) {
            $table->id();
            $table->string('estadodeanimo');
            $table->string('dolortoraxico');
            $table->string('tos');
            $table->string('disnea');
            $table->string('ortopnea');
            $table->string('dpn');
            $table->string('edemademsis');
            $table->string('capacidadfuncional');

            $table->unsignedBigInteger('medic_id');
            $table->unsignedBigInteger('pacient_id');
            $table->foreign('medic_id')->references('id')->on('medics');
            $table->foreign('pacient_id')->references('id')->on('pacients');
            
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
        Schema::dropIfExists('functional_examinations');
    }
}
