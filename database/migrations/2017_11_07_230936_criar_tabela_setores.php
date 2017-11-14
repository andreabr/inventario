<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaSetores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sigla', 10);
            $table->string('extenso', 100);
            $table->string('setor_pai', 3)->nullable();
            $table->string('ramal1', 3)->nullable();
            $table->string('ramal2', 3)->nullable();
            $table->string('ramal3', 3)->nullable();
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
        Schema::drop('setores');
    }
}
