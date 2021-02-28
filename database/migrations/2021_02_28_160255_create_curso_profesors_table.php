<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoProfesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_profesors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('curso_id')->nullable();
            $table->unsignedBigInteger('profesor_id')->nullable();
            $table->foreign('profesor_id')
            ->references('id')->on('profesors')
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
        Schema::dropIfExists('curso_profesors');
    }
}
