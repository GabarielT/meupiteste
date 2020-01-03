<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

class CreatePerguntasTable extends Migration
{
    public function up()
    {
        Schema::create('pss_perguntas', function (Blueprint $table) {
            $table->bigIncrements('pss_id_pergunta');
			$table->unsignedBigInteger('pss_id_categoria');
			$table->string('pss_pergunta', 200)->unique();
			$table->boolean('pss_habilitado');
			$table->foreign('pss_id_categoria')->references('pss_id_categoria')->on('pss_categorias');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pss_perguntas');
    }
}
