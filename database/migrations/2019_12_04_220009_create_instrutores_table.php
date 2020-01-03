<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstrutoresTable extends Migration
{
    public function up()
    {
        Schema::create('pss_instrutores', function (Blueprint $table) {
            $table->bigIncrements('pss_id_instrutor');
            $table->string('pss_instrutor', 100);
            $table->boolean('pss_habilitado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pss_instrutores');
    }
}
