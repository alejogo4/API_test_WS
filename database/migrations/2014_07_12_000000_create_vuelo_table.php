<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVueloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo');
            $table->dateTime("fechaSalida");
            $table->string("sala");
            $table->string("origen");
            $table->string("destino");
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
        Schema::dropIfExists('vuelo');
    }
}
