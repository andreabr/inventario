<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelacionarMarcaProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('equipamentos', function(Blueprint $table) {
            $table->integer('setor_id')->unsigned();
            $table->foreign('setor_id')->references('id')->on('setores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('equipamentos', function(Blueprint $table) {
            $table->dropForeign('equipamentos_setor_id_foreign');
            $table->dropColumn('setor_id');
        });
    }
}
