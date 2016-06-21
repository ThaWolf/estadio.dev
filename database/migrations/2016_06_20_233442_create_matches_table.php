<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('round_id');
            $table->timestamps();
            $table->text('comment');
            $table->enum('state', ['open', 'closed'])->default('closed');
            $table->integer('round');
            $table->integer('home_id');
            $table->integer('away_id');
            $table->integer('winner_id');
         });
    } 
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('matches');
    }
}
