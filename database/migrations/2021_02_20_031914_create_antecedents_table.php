<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntecedentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedents', function (Blueprint $table) {
            $table->id();
            $table->string('hta');
            $table->string('mellitus');
            $table->string('evc');
            $table->string('cardiopatiaisquemica');
            $table->string('insuficienciacardiaca');
            $table->string('arritmias');
            $table->string('eapca');

            $table->unsignedBigInteger('medic_id');
            $table->unsignedBigInteger('pacient_id');
            $table->foreign('medic_id')->references('id')->on('medics');
            $table->foreign('pacient_id')->references('id')->on('pacients');
            
            $table->string('insuficienciarenal');
            $table->string('sincope');
            $table->string('asmabronquial');
            $table->string('eihe');
            $table->string('hepatopatias');
            $table->string('ulceraglastrica');
            $table->string('convulciones');
            $table->string('cancer');
            $table->string('tvp');
            $table->string('trastornostiroideos');
            $table->string('traumasrecientes');
            $table->string('trastornospsiquiatricos');
            $table->string('sangradoenlafamilia');
            $table->string('transfucionesprevias');
            $table->string('consumohematinicos');
            $table->string('alergiaamedicamentos');
            $table->string('otros')->nullable();
            

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
        Schema::dropIfExists('antecedents');
    }
}
