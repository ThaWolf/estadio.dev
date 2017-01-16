<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use App\Http\Requests;

use App\SportPlayer;
use App\Sport;
use App\User;
use Image;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => []]);
    }

    public function profile(Request $request, $id = null){
    	if($id == null){
    		$id = $request->user()->id;
    	}
    	$user = User::findOrFail($id);
    	if($id == $request->user()->id){
			$sportIds = [];
	    	foreach($user->accounts as $accounts){
	    		$sportIds[] = $accounts->sport_id;
	    	}
	    	$sports = Sport::whereNotIn('id', $sportIds)->lists('name', 'id');
    	} else {
    		$sports = collect([]);
    	}
    	
        return view('user.view',[
        	'user' => $user,
        	'availableSports' => $sports
        ]);
    }

    /**
	* Adds an account to the current user
    **/
    public function addAccount(Request $request, $id){
    	if($id != $request->user()->id){
    		$request->session()->flash('alert-danger', 'No podes agregar cuentas a otros usuarios');
    	} else if($request->user()->accounts()->forSport(Sport::findOrFail($request->sport_id))->count() > 0){
    		$request->session()->flash('alert-warning', 'No podes agregar mas de una cuenta por deporte');
    	} else if(SportPlayer::where('sport_id', '=', $request->sport_id)->where('name', '=', $request->name)->count() > 0){
    		$request->session()->flash('alert-danger', 'Esta cuenta ya pertenece a otro usuario');
    	} else {
    		SportPlayer::create([
    			'user_id' => $id,
    			'sport_id' => $request->sport_id,
    			'name' => $request->name
    		]);
    		$request->session()->flash('alert-success', 'Cuenta agregada!');
    	}
        $id= null;
        if ($id == null) {
            $id = $request->user()->id;
        }
        $user = User::findOrFail($id);
        if($id == $request->user()->id){
            $sportIds = [];
            foreach($user->accounts as $accounts){
                $sportIds[] = $accounts->sport_id;
            }
            $sports = Sport::whereNotIn('id', $sportIds)->lists('name', 'id');
        } else {
            $sports = collect([]);
        }
        return view('user.view',[
            'user' => $user,
            'availableSports' => $sports
        ]);
    }

    public function update_avatar(Request $request){
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save( public_path('img/avatar_usr/' . $filename ));
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        $id= null;
        if ($id == null) {
            $id = $request->user()->id;
        }
        $user = User::findOrFail($id);
        if($id == $request->user()->id){
            $sportIds = [];
            foreach($user->accounts as $accounts){
                $sportIds[] = $accounts->sport_id;
            }
            $sports = Sport::whereNotIn('id', $sportIds)->lists('name', 'id');
        } else {
            $sports = collect([]);
        }
        return view('user.view',[
            'user' => $user,
            'availableSports' => $sports
        ]);
    }

    
}
