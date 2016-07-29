<?php

use Illuminate\Database\Seeder;
use App\Team;
use App\SportPlayer;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sportPlayers = SportPlayer::with('user')->where('sport_id', '1')->get();
        $team = Team::create([
        	'sport_id' => 1,
        	'owner_id' => $sportPlayers->first()->user->id,
        	'captain_id' => $sportPlayers->first()->user->id,
        	'name' => 'Equipo 1'
        ]);
        $team->players()->attach($sportPlayers->first()->user);
        $team->players()->attach($sportPlayers->last()->user);
        $team = Team::create([
            'sport_id' => 1,
            'owner_id' => $sportPlayers[1]->user->id,
            'captain_id' => $sportPlayers[1]->user->id,
            'name' => 'Equipo 2'
        ]);
        $team->players()->attach($sportPlayers[1]->user);
    }
}
