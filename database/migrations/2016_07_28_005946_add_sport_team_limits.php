<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSportTeamLimits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sport', function ($table) {
            $table->integer('min_team_players')->unsigned()->default('1');
            $table->integer('max_team_players')->unsigned()->default('10');
        });
        Schema::table('team', function ($table) {
            $table->integer('sport_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sport', function ($table) {
            $table->dropColumn('min_team_players');
            $table->dropColumn('max_team_players');
        });
        Schema::table('team', function ($table) {
            $table->dropColumn('sport_id');
        });
    }
}
