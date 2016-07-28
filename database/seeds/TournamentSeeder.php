<?php

use Illuminate\Database\Seeder;

use App\Tournament;
use App\User;
use App\SportPlayer;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sportPlayers = SportPlayer::with('user')->where('sport_id', '1')->get();
    	$tournament = Tournament::create([
            'name' => 'tournament',
            'start_time' => new DateTime(),
            'needed_players' => 4,
            'creator_id' => 1,
            'sport_id' => 1
        ]);
        foreach($sportPlayers as $player){
            $tournament->participants()->attach($player->user);
        }
        $tournament->save();
    }
}
