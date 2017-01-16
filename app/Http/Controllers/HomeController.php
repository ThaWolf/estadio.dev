<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Tournament;
use Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //none
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = Carbon\Carbon::now();
        $date->toDateTimeString();
        $tournaments = Tournament::where('is_view_banner', '=', 1)->where('start_time', '>', $date)->orderBy('start_time')->get();
        $week_tournaments = Tournament::where('is_week_tournament', '=', 1)->where('start_time', '>', $date)->orderBy('start_time')->get();
        $last_tournaments = Tournament::where('start_time', '<', $date)->orderBy('start_time')->get();
        foreach ($tournaments as $tournament) {
            $tournament= $tournament->change_date_string($tournament);
        };
        foreach ($last_tournaments as $tournament) {
            $tournament= $tournament->change_date_string($tournament);
        };
        $week_tournaments[0]->change_date_string($week_tournaments[0]);
        return view ('cms.index',['tournaments' => $tournaments, 'week_tournaments' => $week_tournaments, 'last_tournaments' => $last_tournaments]);
    }

    public function testProfile(){
         return view ('profileview');   
    }
}
