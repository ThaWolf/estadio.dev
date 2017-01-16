<?php

namespace App\Console\Commands;

use DateTime;
use DateInterval;

use Illuminate\Console\Command;

use App\Tournament;
use App\User;
use App\Round;
use App\Match;

class StartTournamentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tournament:start {tournamentId} {--force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if($this->option('force')){
            // Always is time to start
            $currentDate = new DateTime('9999-12-30');
        } else {
            $currentDate = new DateTime;
        }
        $tournament = Tournament::findOrFail($this->argument('tournamentId'));

        if($tournament->canStart($currentDate)  ){
            $timeBetweenRounds = $tournament->getRoundInterval();

            // Change tournament status
            $tournament->status = 'InProgress';
            $tournament->save();
            // Create first round
            $round = new Round;
            $round->status = 'InProgress';
            $round->tournament()->associate($tournament);
            $round->end_time = $tournament->startDateTime()->add($timeBetweenRounds);
            $round->save();
            // Set current round
            $tournament->current_round()->associate($round);
            $tournament->save();
            $bot= User::findOrFail(2);
            // Create matches
            $players = $tournament->participants()->get();
            $matchs = (($tournament->needed_players)/2);
            while($matchs != 0){
                
                if ($players->count() == 0) {
                    $matchPlayers[0] = $bot;
                    $matchPlayers[1] = $bot;
                }elseif ($matchs == $players->count()) {
                    $matchPlayers[0] = $players->random();
                    $matchPlayers[1] = $bot;
                }
                else{
                    $matchPlayers = $players->random(2);
                }

                $matchs--;
                $players = $players->diff($matchPlayers);
                // Create match

                $match = new Match;
                $match->local()->associate($matchPlayers->first());
                $match->away()->associate($matchPlayers->last());
                $match->round()->associate($round);
                $match->save();
            }
        }
    }
}

