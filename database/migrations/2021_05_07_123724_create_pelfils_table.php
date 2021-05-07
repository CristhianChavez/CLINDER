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
