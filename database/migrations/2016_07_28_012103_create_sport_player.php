<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSportPlayer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sport_player', function (Blueprint $table) {
            $table->integer('sport_id');
            $table->integer('user_id');
            $table->timestamps();
            $table->string('name');
            $table->string('private_name');
            $table->primary(['sport_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sport_player');
    }
}
