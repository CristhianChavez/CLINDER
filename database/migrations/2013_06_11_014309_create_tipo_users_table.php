<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_users', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
        });

        DB::table('tipo_users')->insert([
            ['id' => 1 , 'tipo' => 'Usuario'],
            ['id' => 2 , 'tipo' => 'Administrador'],
        ]);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_users');
    }
}
