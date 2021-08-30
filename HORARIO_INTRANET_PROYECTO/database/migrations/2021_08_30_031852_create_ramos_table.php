<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ramos', function (Blueprint $table) {
            $table->id('id_ramos');
            $table->integer('Asignatura');
            $table->integer('Seccion');
            $table->integer('Cupos');
            $table->integer('Inscritos');
            $table->string('Nombreasignatura');
            $table->string('Horario1')->nullable();
            $table->string('Horario2')->nullable();
            $table->string('Horario3')->nullable();
            $table->string('Horario4')->nullable();
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
        Schema::dropIfExists('ramos');
    }
}
