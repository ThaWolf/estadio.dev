<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan; 

use App\Http\Requests;

use App\Tournament;

class TournamentController extends Controller
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

    public function index(){
        $tournaments = Tournament::all();
        
        return view('tournament.list',['tournaments' => $tournaments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $tournament = Tournament::with([
        		'rounds', 'current_round', 
        		'sport', 'creator', 'participants'
        	])->findOrFail($id);
        $isCreator = $request->user()->id == $tournament->creator->id;
        if($tournament->status == 'NotStarted'){
        	$canShowSubscribe = !$tournament->hasEnoughtPlayers();
        } else {
        	$canShowSubscribe = false;
        }
        $canShowUnsubscribe = ($tournament->status == 'NotStarted');
        if($tournament->haveTeams()){
            $canShowUnsubscribe = false;
        } else {
            $canShowUnsubscribe &= $tournament->participants->contains($request->user());
        }
        if($canShowUnsubscribe){
            $canShowSubscribe = false;
        }
        return view ('tournament.view', [ 
        	'tournament' => $tournament, 
            'isCreator' => $isCreator,
        	'canShowSubscribe' => $canShowSubscribe,
            'canShowUnsubscribe' => $canShowUnsubscribe
        ]);
    }

    /**
    * Subscribe a user or a team to a tournament
    **/
    public function subscribe(Request $request, $id){
        $tournament = Tournament::with(['participants'])->findOrFail($id);
        if($tournament->status != 'NotStarted'){
            $request->session()->flash('alert-danger', 'No se puede subscribir a un torneo empezado');
        } else if($tournament->hasEnoughtPlayers()){
            $request->session()->flash('alert-danger', 'El torneo ya tiene la cantidad maxima de jugadores');
        } else {
            if($tournament->haveTeams()){
                $request->session()->flash('alert-danger', 'Sin implementar');
            } else {
                if($tournament->participants->contains($request->user())){
                    $request->session()->flash('alert-warning', 'Ya estabas subscripto');
                } else {
                    $tournament->participants()->attach($request->user());
                    $request->session()->flash('alert-success', 'Te subscribiste al torneo!!');
                }
            }
        }
        return redirect()->route('tournament.view', [ 'id' => $id ]);
    }

    /**
    * Subscribe a user or a team to a tournament
    **/
    public function unsubscribe(Request $request, $id){
        $tournament = Tournament::with(['participants'])->findOrFail($id);
        if($tournament->status != 'NotStarted'){
            $request->session()->flash('alert-danger', 'No se puede desubscribir a un torneo empezado');
        } else {
            if($tournament->haveTeams()){
                $request->session()->flash('alert-danger', 'Sin implementar');
            } else {
                if($tournament->participants->contains($request->user())){
                    $tournament->participants()->detach($request->user());
                    $request->session()->flash('alert-success', 'Te desubscribiste del torneo');
                } else {
                    $request->session()->flash('alert-warning', 'No estabas subscripto al torneo');
                }
            }
        }
        return redirect()->route('tournament.view', [ 'id' => $id ]);
    }

    /**
    * Forces the start of the tournament
    */
    public function start(Request $request, $id){
        $tournament = Tournament::findOrFail($id);
        $isCreator = $request->user()->id == $tournament->creator->id;
        if(!$isCreator){
           $request->session()->flash('alert-danger', 'Accion solo para creadores'); 
        } else if($tournament->status != 'NotStarted'){
            $request->session()->flash('alert-error', 'El torneo ya empezo.'); 
        } else {
            Artisan::call('tournament:start', [
                'tournamentId' => $id, '--force' => true
            ]);
        }
        return redirect()->route('tournament.view', [ 'id' => $id ]);
    }

    /**
    * Forces the resolve of the tournament
    */
    public function resolve(Request $request, $id){
        $tournament = Tournament::findOrFail($id);
        $isCreator = $request->user()->id == $tournament->creator->id;
        if(!$isCreator){
           $request->session()->flash('alert-danger', 'Accion solo para creadores'); 
        } else if($tournament->status != 'InProgress'){
            $request->session()->flash('alert-error', 'El torneo no esta en curso.'); 
        } else {
            Artisan::call('tournament:resolve', [
                'tournamentId' => $id, '--force' => true
            ]);
        }
        return redirect()->route('tournament.view', [ 'id' => $id ]);
    }
}
