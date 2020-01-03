<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pss_cidades', function (Blueprint $table) {
            $table->bigIncrements('pss_id_cidade');
            $table->string('pss_cidade');

            $table->unsignedBigInteger('pss_id_estado');
            $table->foreign('pss_id_estado')->references('pss_id_estado')->on('pss_estados');

            $table->string('pss_ibge');
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
        Schema::dropIfExists('pss_cidades');
    }
}
