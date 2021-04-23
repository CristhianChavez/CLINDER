<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->increments("id");
            $table->string("prefecita",100);
            $table->string("orientacion",100);
            $table->float("altura");
            $table->string("religion",100);
            $table->string("etnia",100);
            $table->string("educacion",100);
        });

        Schema::table('formularios', function (Blueprint $table) {
            $table->unsignedInteger("id_usuario");
            $table->foreign('id_usuario')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formularios');
    }
}
