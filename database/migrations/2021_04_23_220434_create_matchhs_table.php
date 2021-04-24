<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matchhs', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("amigo_id",);
            $table->boolean("aceptar");
        });

        Schema::table('matchhs', function (Blueprint $table) {
            $table->unsignedInteger("user_id");
            $table->foreign('user_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matchhs');
    }
}
