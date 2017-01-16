<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnTournament extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tournament', function (Blueprint $table) {
            $table->string('img_banner');
            $table->string('img_profile');
            $table->boolean('is_view_banner');
            $table->boolean('is_week_tournament');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tournament', function (Blueprint $table) {
            $table->dropColumn('img_banner');
            $table->dropColumn('img_profile');
            $table->dropColumn('is_view_banner');
            $table->dropColumn('is_week_tournament');
        });
    }
}
