<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect()->route('tournament.list');
});

Route::get('/test/home', 'HomeController@testHome');
Route::get('/test/profile', 'HomeController@testProfile');
Route::get('/test/team', 'HomeController@testTeam');
Route::get('/test/test', 'HomeController@testTest');


Route::auth();

Route::get('/home', 'HomeController@index');


// Tournament controller routes
Route::get('/tournament', ['as' => 'tournament.list', 'uses' => 'TournamentController@index']);
Route::get('/tournament/{id}', ['as' => 'tournament.view', 'uses' => 'TournamentController@show']);
Route::post('/tournament/{id}/subscribe', ['as' => 'tournament.subscribe', 'uses' => 'TournamentController@subscribe']);
Route::post('/tournament/{id}/unsubscribe', ['as' => 'tournament.unsubscribe', 'uses' => 'TournamentController@unsubscribe']);
Route::post('/tournament/{id}/start', ['as' => 'tournament.start', 'uses' => 'TournamentController@start']);
Route::post('/tournament/{id}/resolve', ['as' => 'tournament.resolve', 'uses' => 'TournamentController@resolve']);
// Match controller routes
Route::get('/match/{id}', ['as' => 'match.view', 'uses' => 'MatchController@show']);
Route::post('/match/{id}/report', ['as' => 'match.report', 'uses' => 'MatchController@report']);
Route::post('/match/{id}/resolve', ['as' => 'match.resolve', 'uses' => 'MatchController@resolve']);
// Team controller routes
Route::get('/team/{id}', ['as' => 'team.view', 'uses' => 'TeamController@show']);
Route::post('/team/{id}/fire', ['as' => 'team.fire', 'uses' => 'TeamController@fire']);
Route::post('/team/{id}/invite', ['as' => 'team.invite', 'uses' => 'TeamController@invite']);
Route::post('/team/{id}/invite/accept', ['as' => 'team.invite.accept', 'uses' => 'TeamController@accept']);
Route::post('/team/{id}/invite/decline', ['as' => 'team.invite.decline', 'uses' => 'TeamController@decline']);


