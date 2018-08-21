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
            $table->integer('tcompetencia_id');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('premium');
            $table->string('paypalemail')->nullable();
            $table->integer('pago')->nullable();
            $table->text('paypaldatos')->nullable();
            $table->string('avatar')->nullable();
            $table->text('bio')->nullable();
            $table->softDeletes();
            $table->rememberToken();
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
