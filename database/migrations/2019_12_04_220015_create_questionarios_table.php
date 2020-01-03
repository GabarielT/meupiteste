<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pss_questionarios', function (Blueprint $table) {
            $table->bigIncrements('pss_id_quest');
            $table->unsignedBigInteger('pss_id_codigo');
            $table->foreign('pss_id_codigo')->references('pss_id_codigo')->on('pss_codigos');
            $table->string('pss_feedback')->nullable();
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
        Schema::dropIfExists('pss_questionarios');
    }
}
