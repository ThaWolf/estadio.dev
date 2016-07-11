<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('round_id');
            $table->morphs('local');
            $table->morphs('away');
            $table->integer('score_local')->unsigned()->nullable();
            $table->integer('score_away')->unsigned()->nullable();
            $table->morphs('winner');
            $table->enum('status', ['NotStarted', 'InProgress', 'Finished', 'Dispute'])
                ->default('NotStarted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('match');
    }
}
