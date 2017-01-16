<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Team;
use App\User;
use App\SportPlayer;
use App\UserNotification;
use Image;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => []]);
    }

    public function show(Request $request, $id)
    {
    	$team = Team::with(['owner', 'captain', 'players', 'sport', 'invites'])->findOrFail($id);
        $isOwner = $request->user()->id == $team->owner->id;
        if($team->players->count() >= $team->sport->max_team_players){
        	$canInvite = false;
        } else {
        	$canInvite = $isOwner;
        }
        $hasInvite = ($team->invites->contains($request->user()));
        return view ('team.view', [ 
        	'team' => $team,
        	'canInvite' => $canInvite,
            'isOwner' => $isOwner,
            'hasInvite' => $hasInvite
        ]);
    }

    /**
    * Fires a member of the team
    **/
    public function fire(Request $request, $id){
        $team = Team::with(['owner', 'captain', 'players'])->findOrFail($id);
        $isOwner = $request->user()->id == $team->owner->id;
        if(!$isOwner){
            $request->session()->flash('alert-danger', 'No podes despedir jugadores del equipo');
        } else {
            $toFire = User::findOrFail($request->player_id);
            if($team->players->contains($toFire)){
                $team->players()->detach($toFire);
                $request->session()->flash('alert-success', 'El jugador ya no es parte de este equipo');
            } else {
                $request->session()->flash('alert-warning', 'El jugador no pertenece a este equipo');
            }
        }
        return redirect()->route('team.view', [ 'id' => $id ]);
    }

    /**
    * Invites an user to a team
    **/
    public function invite(Request $request, $id){
        $team = Team::with(['owner', 'sport', 'players', 'invites'])->findOrFail($id);
        $isOwner = $request->user()->id == $team->owner->id;
        if(!$isOwner){
            $request->session()->flash('alert-danger', 'No podes invitar jugadores al equipo');
        } else {
            $toInvite = SportPlayer::forSport($team->sport)->with('user')
                ->join('users', 'sport_player.user_id', '=', 'users.id')
                ->where('sport_player.name', $request->player_name)
                ->orWhere('users.name', $request->player_name)
                ->get();
            if($toInvite->count() < 1){
                $request->session()->flash('alert-danger', 'No hay jugadores con este nombre');
            } else {
                $toInvite = $toInvite->first();
                if($team->players->contains($toInvite->user)){
                    $request->session()->flash('alert-warning', 'Este jugador ya es parte del equipo');
                } else if($team->invites->contains($toInvite->user)){
                    $request->session()->flash('alert-warning', 'Ya invitaste a este jugador');
                } else {
                    $request->session()->flash('alert-success', 'Se mando la invitacion al jugador');
                    $team->invites()->attach($toInvite->user);
                    UserNotification::create([
                        'user_id' => $toInvite->user->id,
                        'description' => 'Te invitaron al equipo '. $team->name,
                        'link' => route('team.view', [ 'id' => $id ])
                    ]);
                }
            }
        }
        return redirect()->route('team.view', [ 'id' => $id ]);
    }

    /**
    * User accepts team invitation
    **/
    public function accept(Request $request, $id){
        $team = Team::with(['invites', 'players'])->findOrFail($id);
        $user = $request->user();
        if($team->invites->contains($user)){
            $team->invites()->detach($user);
            if($team->players->contains($user)){
                $request->session()->flash('alert-warning', 'Ya formabas parte de este equipo');
            } else {
                $team->players()->attach($user);
                $request->session()->flash('alert-success', 'Ya sos parte del equipo!!');
            }
        } else {
            $request->session()->flash('alert-warning', 'No fuiste invitado a este equipo');
        }
        return redirect()->route('team.view', [ 'id' => $id ]);
    }

    /**
    * User declines team invitation
    **/
    public function decline(Request $request, $id){
        $team = Team::with(['invites'])->findOrFail($id);
        $user = $request->user();
        if($team->invites->contains($user)){
            $team->invites()->detach($user);
            $request->session()->flash('alert-success', 'Rechasaste la invitacion del equipo');
        } else {
            $request->session()->flash('alert-warning', 'No fuiste invitado a este equipo');
        }
        return redirect()->route('team.view', [ 'id' => $id ]);
    }

    public function update_avatar(Request $request, $id){
        $team = Team::with(['owner', 'captain', 'players', 'sport', 'invites'])->findOrFail($id);
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save( public_path('img/avatar_team/' . $filename ));
            $team->avatar = $filename;
            $team->save();
        }

        $isOwner = $request->user()->id == $team->owner->id;
        if($team->players->count() >= $team->sport->max_team_players){
            $canInvite = false;
        } else {
            $canInvite = $isOwner;
        }
        $hasInvite = ($team->invites->contains($request->user()));
        return view ('team.view', [ 
            'team' => $team,
            'canInvite' => $canInvite,
            'isOwner' => $isOwner,
            'hasInvite' => $hasInvite
        ]);
    }

}
