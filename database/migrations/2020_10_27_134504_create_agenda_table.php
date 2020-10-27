<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pacienteNome')->unsigned();
            $table->foreign('pacienteNome')->references('id')->on('paciente')->onDelete('cascade');
            $table->integer('procedimentoNome')->unsigned();
            $table->foreign('procedimentoNome')->references('id')->on('procedimento')->onDelete('cascade');
            $table->date('dtExame');
            $table->time('horario');
            $table->string('mes');
            $table->string('ano');
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
        Schema::dropIfExists('agenda');
    }
}
