<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    public function up()
    {
        Schema::create('pss_items', function (Blueprint $table) {
            $table->unsignedBigInteger('pss_id_quest');
            $table->unsignedBigInteger('pss_id_pergunta');
            $table->unsignedBigInteger('pss_id_resposta');
            $table->foreign('pss_id_quest')->references('pss_id_quest')->on('pss_questionarios');
            $table->foreign('pss_id_pergunta')->references('pss_id_pergunta')->on('pss_perguntas');
            $table->foreign('pss_id_resposta')->references('pss_id_resposta')->on('pss_respostas');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('pss_items');
    }
}
