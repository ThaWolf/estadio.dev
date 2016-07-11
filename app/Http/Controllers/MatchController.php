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
        if($tournament->haveTeams()){
        	$canMakeReport = false;
        	// TODO: implement teams
        } else {
        	$canMakeReport = collect([ $match->local->id, $match->away->id ])
        		->contains($request->user()->id);
            $canMakeReport &= ($match->status != 'Finished');
        }
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
            if($match->local->id == $request->user()->id){
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
        if($tournament->haveTeams()){
            $canMakeReport = false;
            // TODO: implement teams
        } else {
            $canMakeReport = collect([ $match->local->id, $match->away->id ])
                ->contains($request->user()->id);
        }
        if(!$canMakeReport){
            $request->session()->flash('alert-danger', 'No podes reportar en este partido');
        } else if($match->status == 'Finished'){
            $request->session()->flash('alert-danger', 'No podes cambiar el reporte de un partido terminado');
        } else {
            $participant = 'Local';
            if($match->away->id == $request->user()->id){
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
            $report->score_local = $request->score_local;
            $report->score_away = $request->score_away;
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
            $match->score_local = $request->score_local;
            $match->score_away = $request->score_away;
            $match->status = 'Finished';
            if($match->score_local == $match->score_away){
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
    }
}
