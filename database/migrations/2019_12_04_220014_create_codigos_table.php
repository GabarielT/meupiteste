<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pss_codigos', function (Blueprint $table) {
            $table->bigIncrements('pss_id_codigo');
            $table->string('pss_codigo');
            $table->unsignedBigInteger('pss_id_usuario');
            $table->foreign('pss_id_usuario')->references('pss_id_usuario')->on('pss_usuarios');
            $table->unsignedBigInteger('pss_id_turma');
            $table->foreign('pss_id_turma')->references('pss_id_turma')->on('pss_turmas');
            $table->integer('pss_uso');
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
        Schema::dropIfExists('pss_codigos');
    }
}
