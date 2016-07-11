<?php

namespace App\Console\Commands;

use DateTime;

use Illuminate\Console\Command;

use App\Tournament;
use App\Round;

class ScheduleTournamentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tournament:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checks the status of all tournaments';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $currentTime = new DateTime;
        $currentTime = $currentTime->format('Y-m-d H:i:s');
        // Check tournaments that should have started
        $tournamentsToStart = Tournament::where('status', 'NotStarted')
            ->where('start_time', '<=', $currentTime)->get();
        foreach ($tournamentsToStart as $tournament) {
            $this->call('tournament:start', [
                'tournamentId' => $tournament->id
            ]);
        }
        // Check rounds that should have ended
        $roundsToEnd = Round::where('status', 'InProgress')
            ->where('end_time', '<=', $currentTime)->get();
        foreach ($roundsToEnd as $round) {
            $this->call('tournament:resolve', [
                'tournamentId' => $round->tournamentId
            ]);
        }
    }
}
