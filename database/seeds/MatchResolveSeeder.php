<?php

use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;

use App\Match;
use App\MatchUserReport;

class MatchResolveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $availableScores = collect(range(0, 9));
        $agreeResults = collect([ true, false ]);
        // Uncomment for no disagrees
        // $agreeResults = collect([ true ]);

        $unresolvedMatches = Match::where('status', '!=', 'Finished')->get();
        if($unresolvedMatches->count() == 0){
            return;
        }
        foreach ($unresolvedMatches as $match) {
            $localReport = new MatchUserReport;
            $localReport->match()->associate($match);
            $localReport->participant = 'Local';
            $localReport->score_local = $availableScores->random();
            $localReport->score_away = $availableScores->random();
            // Select winner by score
            if($localReport->score_away < $localReport->score_local){
                $localReport->winner()->associate($match->local);
            } else {
                $localReport->winner()->associate($match->away);
            }

            $awayReport = new MatchUserReport;
            $awayReport->match()->associate($match);
            $awayReport->participant = 'Away';
            
            if($agreeResults->random()){
                // If they agree then same scores
                $awayReport->score_local = $localReport->score_local;
                $awayReport->score_away = $localReport->score_away;
            } else {
                // If they disagree then different scores
                $awayReport->score_local = $availableScores->random();
                $awayReport->score_away = $availableScores->random();
            }
            // Select winner by score
            if($awayReport->score_away < $awayReport->score_local){
                $awayReport->winner()->associate($match->local);
            } else {
                $awayReport->winner()->associate($match->away);
            }

            $awayReport->save();
            $localReport->save();
        }
    }
}
