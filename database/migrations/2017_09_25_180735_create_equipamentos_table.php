<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo', 20);
            $table->string('marca');
            $table->string('modelo');
            $table->string('serial');
            $table->string('local', 15);
            $table->string('usuario')->nullable();
            $table->string('nome_de_rede')->nullable();
            $table->string('lacre_numero')->nullable();
            $table->string('licenciado', 3);
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
        Schema::drop('equipamentos');
    }
}
