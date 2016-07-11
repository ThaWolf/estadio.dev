<?php

use Illuminate\Database\Seeder;

use App\Tournament;

use App\User;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$tournament = Tournament::create([
            'name' => 'tournament',
            'start_time' => new DateTime(),
            'needed_players' => 8,
            'creator_id' => 1,
            'sport_id' => 1
        ]);
        $users = User::all();
        foreach(range(1, 8) as $index) {
            $tournament->participants()->attach($users[$index]);
        }
        $tournament->save();
    }
}
