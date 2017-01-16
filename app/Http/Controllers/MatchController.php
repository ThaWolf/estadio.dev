<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use App\Http\Requests;
use App\Match;
use App\MatchUserReport;

class MatchController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth', ['except' => []]);
    }

    public function show(Request $request, $id)
    {
        $match = Match::with(['reports', 'local', 'away', 'winner', 'round'])->findOrFail($id);
        $tournament = $match->round->tournament;
        $canShowReports = $request->user()->id == $tournament->creator->id;
    	$canMakeReport = $match->canMakeReport($request->user());
        $canMakeReport &= ($match->status != 'Finished');
        $currentReport = new MatchUserReport;
        if($canMakeReport){
            $localReport = $currentReport;
            $awayReport = $currentReport;
            foreach($match->reports as $report){
                if($report->participant == 'Local'){
                    $localReport = $report;
                } else {
                    $awayReport = $report;
                }
            }
            if($match->isLocal($request->user())){
                $currentReport = $localReport;
            } else {
                $currentReport = $awayReport;
            }
        }
        return view ('match.view', [ 
        	'match' => $match,
        	'canShowReports' => $canShowReports,
        	'canMakeReport' => $canMakeReport,
            'report' => $currentReport
        ]);
    }

    public function report(Request $request, $id){
        $match = Match::findOrFail($id);
        $tournament = $match->round->tournament;
        $canMakeReport = $match->canMakeReport($request->user());
        if(!$canMakeReport){
            $request->session()->flash('alert-danger', 'No podes reportar en este partido');
        } else if($match->status == 'Finished'){
            $request->session()->flash('alert-danger', 'No podes cambiar el reporte de un partido terminado');
        } else {
            if($match->isLocal($request->user())){
                $participant = 'Local';
            } else {
                $participant = 'Away';
            }
            $isNew = true;
            $report = new MatchUserReport;
            $report->participant = $participant;
            foreach($match->reports as $aReport){
                if($aReport->participant == $participant){
                    $report = $aReport;
                    $isNew = false;
                }
            }
            $report->match()->associate($match);
            // Fill report from request

            $best_of = $match->round->tournament->best_of;
            $report->score_local = 0;
            $report->score_away = 0;
            for ($i=0; $i < $best_of; $i++) {
                $current_match= 'match'.($i + 1);
               if ($request->get($current_match) == 'local') {
                    $report->score_local = $report->score_local +1;
                }
                elseif ($request->get($current_match) == 'away') {
                    $report->score_away = $report->score_away +1;
                }
            }

            $report->image_url = $request->image_url;
            $report->description = $request->description;
            // Set winner from report
            if($report->score_local == $report->score_away){
                $report->winner()->dissociate();
            } else if($report->score_local > $report->score_away){
                $report->winner()->associate($match->local);
            } else {
                $report->winner()->associate($match->away);
            }
            $report->save();
            $request->session()->flash('alert-success', 'Reporte enviado correctamente');
        }
        return redirect()->route('match.view', [ 'id' => $id ]);
    }

        public function resolve(Request $request, $id){
        $match = Match::findOrFail($id);
        $tournament = $match->round->tournament;
        $isCreator = $request->user()->id == $tournament->creator->id;
        if(!$isCreator){
           $request->session()->flash('alert-danger', 'No podes cambiar el resultado de un partido si no lo creaste'); 
        } else {
            // Fill match from request
            $best_of = $match->round->tournament->best_of;
            $match->score_local = 0;
            $match->score_away = 0;
            for ($i=0; $i < $best_of; $i++) {
                $current_match= 'match'.($i + 1);
               if ($request->get($current_match) == 'local') {
                    $match->score_local = $match->score_local +1;
                }
                elseif ($request->get($current_match) == 'away') {
                    $match->score_away = $match->score_away +1;
                }
            }

            $match->status = 'Finished';
            if($match->score_local == 
                $match->score_away){
                $match->status = 'Dispute';
                $match->winner()->dissociate();
            } else if($match->score_local > $match->score_away){
                $match->winner()->associate($match->local);
            } else {
                $match->winner()->associate($match->away);
            }
            $match->save();
            $request->session()->flash('alert-success', 'Cambiado resultado del partido');
        }
        return redirect()->route('match.view', [ 'id' => $id ]);
    }}
