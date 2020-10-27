<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcedimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedimento', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cod_sus', 20)->unique();
            $table->string('nome', 100)->unique();
            $table->integer('grupoNome')->unsigned();
            $table->foreign('grupoNome')->references('id')->on('grupo')->onDelete('cascade');
            $table->decimal('valor', 5,2);
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
        Schema::dropIfExists('procedimento');
    }
}
