<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstacionamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estacionamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nome');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('estado');
            $table->string('cidade');
            $table->string('data_ent')->nullable();
            $table->string('hora_ent')->nullable();
            $table->string('data_saida')->nullable();
            $table->string('hora_saida')->nullable();
            $table->integer('vaga')->default(0);
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
        Schema::dropIfExists('estacionamentos');
    }
}