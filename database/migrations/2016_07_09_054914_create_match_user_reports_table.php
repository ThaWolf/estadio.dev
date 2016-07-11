<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchUserReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_user_reports', function (Blueprint $table) {
            $table->integer('match_id');
            $table->enum('participant', ['Local', 'Away']);
            $table->timestamps();
            $table->integer('score_local')->unsigned()->nullable();
            $table->integer('score_away')->unsigned()->nullable();
            $table->morphs('winner');
            $table->string('description')->nullable();
            $table->string('image_url')->nullable();
            $table->primary(['match_id', 'participant']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('match_user_reports');
    }
}
