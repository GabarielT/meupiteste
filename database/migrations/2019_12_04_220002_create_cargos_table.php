<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pss_cargos', function (Blueprint $table) {
            $table->bigIncrements('pss_id_cargo');
            $table->string('pss_cargo', 20)->unique();
            $table->unsignedBigInteger('pss_id_permissao');
            $table->foreign('pss_id_permissao')->references('pss_id_permissao')->on('pss_permissoes'); // chave
            $table->boolean('pss_habilitado');
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
        Schema::dropIfExists('pss_cargos');
    }
}
