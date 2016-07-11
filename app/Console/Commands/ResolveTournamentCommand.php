<?php

namespace App\Console\Commands;

use DateTime;
use DateInterval;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;

use App\Tournament;
use App\User;
use App\Round;
use App\Match;

class ResolveTournamentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tournament:resolve {tournamentId} {--force}';

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
            // Always is time to resolve
            $currentDate = new DateTime('9999-12-30');
        } else {
            $currentDate = new DateTime;   
        }
        $tournament = Tournament::findOrFail($this->argument('tournamentId'));
        if($tournament->status == 'InProgress' && $tournament->current_round->canResolve($currentDate)){
            $timeBetweenRounds = $tournament->getRoundInterval();
            // Check all current round ended
            $currentRound = $tournament->current_round;
            $winners = collect([]);
            foreach($currentRound->matches as $match){
                if($match->status != 'Finished'){
                    $match->resolve();
                }
                if($match->status == 'Finished'){
                    $winners->push($match->winner);
                } else {
                    $this->comment('Dispute in match: '. $match->id . ' for tournament: '. $tournament->id);
                }
            }
            // If all matches finished then start next round
            if($winners->count() == $currentRound->matches->count()){
                $currentRound->status = 'Finished';
                $currentRound->save();
                // Its last match
                if($winners->count() == 1){
                    $tournament->status = 'Finished';
                    $tournament->save();
                } else {
                    // Generate new round
                    $round = new Round;
                    $round->status = 'InProgress';
                    $round->tournament()->associate($tournament);
                    $round->end_time = $currentRound->endDateTime()->add($timeBetweenRounds);
                    $round->save();
                    // Set current round
                    $tournament->current_round()->associate($round);
                    $tournament->save();
                    // Create matches
                    while($winners->count() > 0){
                        $matchPlayers = $winners->slice(0,2);
                        $winners = $winners->diff($matchPlayers);
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
    }
}
