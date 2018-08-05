<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Suscriptores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('suscriptores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellidos');
            $table->date('fecnac');
            $table->integer('edad');
            $table->enum('genero',['H','M']);
            $table->string('telefono');
            $table->string('tcompetencia');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('premium');
            $table->string('paypalemail')->nullable();
            $table->integer('pago')->nullable();
            $table_>rememberToken();
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
        //
    }
}
