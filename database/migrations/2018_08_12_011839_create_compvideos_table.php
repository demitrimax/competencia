<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompvideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compvideos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('competidor');
            $table->text('videourl');
            $table->integer('tcompetencia');
            $table->time('tiempo')->nullable();
            $table->integer('repeticiones')->nullable();
            $table->integer('peso')->nullable();
            $table->text('comentario')->nullable();
            $table->string('clasifica')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('compvideos');
    }
}
