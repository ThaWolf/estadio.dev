<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('creator_id');
            $table->integer('sport_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('status', ['NotStarted', 'InProgress', 'Finished'])->default('NotStarted');
            $table->enum('format', ['SingleElimination'])->default('SingleElimination');
            $table->enum('type', ['Single', 'Team'])->default('Single');
            $table->datetime('start_time');
            $table->integer('needed_players')->unsigned()->default('2');
            $table->integer('current_round_id')->nullable();
            $table->bigInteger('round_time_limit')->default('86400'); // 1D
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tournament');
    }
}
