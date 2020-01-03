<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pss_cursos', function (Blueprint $table) {
            $table->bigIncrements('pss_id_curso');
            $table->string('pss_cod_curso', 20)->unique();
            $table->string('pss_curso');
            $table->string('pss_duracao', 10);
            $table->boolean('pss_habilitado');

            $table->unsignedBigInteger('pss_id_tipo');
            $table->foreign('pss_id_tipo')->references('pss_id_tipo')->on('pss_tipos');

            $table->unsignedBigInteger('pss_id_segmento');
            $table->foreign('pss_id_segmento')->references('pss_id_segmento')->on('pss_segmentos');

            $table->unsignedBigInteger('pss_id_cidade');
            $table->foreign('pss_id_cidade')->references('pss_id_cidade')->on('pss_cidades');

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
        Schema::dropIfExists('pss_cursos');
    }
}
