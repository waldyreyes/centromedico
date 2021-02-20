<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsicologicalHabitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psicological_habits', function (Blueprint $table) {
            $table->id();
            $table->string('tabaquicos');
            $table->string('alcoholicos');
            $table->string('cafeinicos');
            $table->string('drogas');
            $table->string('hooka');
            
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
        Schema::dropIfExists('psicological_habits');
    }
}
