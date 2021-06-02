<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelfils', function (Blueprint $table) {
            $table->increments("id");
            $table->string("generoo")->nullable();
            $table->string("orientacion");
            $table->string("ciudad");
            $table->string("educacion");
            $table->string("telefono");
            $table->string("descripcion");
        });

        Schema::table('pelfils', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelfils');
    }
}
