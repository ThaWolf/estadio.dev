<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTorneosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torneos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->enum('formato', ['Solitario', 'Multijugador'])->default('Solitario');
            $table->datetime('creado')->default('0000-00-00 00:00');
            $table->datetime('inicio')->default('0000-00-00 00:00');
            $table->enum('limite', ['8', '16','32', '64', '128'])->default('8');
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
        Schema::drop('torneos');
    }
}
