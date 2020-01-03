<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

class CreateRespostasTable extends Migration
{
    public function up()
    {
        Schema::create('pss_respostas', function (Blueprint $table) {
            $table->bigIncrements('pss_id_resposta');
			$table->integer('pss_nivel_satisfacao')->unique();
            $table->string('pss_satisfacao', 20)->unique();
            $table->boolean('pss_habilitado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pss_respostas');
    }
}
