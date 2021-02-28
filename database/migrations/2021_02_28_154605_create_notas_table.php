<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->double('nota1',10,2)->nullable();
            $table->double('nota2',10,2)->nullable();
            $table->double('nota3',10,2)->nullable();
            $table->double('nota4',10,2)->nullable();
            $table->unsignedBigInteger('curso_id')->nullable();
            $table->unsignedBigInteger('alumno_id')->nullable();
            $table->unsignedBigInteger('profesor_id')->nullable();
            $table->foreign('profesor_id')
            ->references('id')->on('profesors')
            ->onDelete('set null');
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
        Schema::dropIfExists('notas');
    }
}
