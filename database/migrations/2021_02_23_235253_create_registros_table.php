<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumno_id')->nullable();
            $table->unsignedBigInteger('curso_id')->nullable();
            $table->integer('grupo');
            $table->foreign('alumno_id')
                  ->references('id')->on('alumnos')
                  ->onDelete('set null');
            $table->foreign('curso_id')
                  ->references('id')->on('cursos')
                  ->onDelete('set null');
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
        Schema::dropIfExists('registros');
    }
}
