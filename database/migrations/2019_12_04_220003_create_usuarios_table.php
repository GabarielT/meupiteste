<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pss_usuarios', function (Blueprint $table) {
            $table->bigIncrements('pss_id_usuario');
            $table->string('pss_nome', 60);
            $table->string('pss_matricula', 20)->unique();
            $table->string('pss_cpf', 11)->unique();
            $table->unsignedBigInteger('pss_id_cargo');
            $table->foreign('pss_id_cargo')->references('pss_id_cargo')->on('pss_cargos');
            $table->string('pss_telefone', 11)->nullable();
            $table->string('pss_celular', 11)->nullable();
            $table->string('pss_email', 80)->unique();
            $table->string('pss_usuario', 30)->unique();
            $table->string('pss_senha');
            $table->boolean('pss_habilitado');
            $table->rememberToken();
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
        Schema::dropIfExists('pss_usuarios');
    }
}
