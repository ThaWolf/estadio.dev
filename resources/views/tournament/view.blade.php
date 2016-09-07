@extends('layouts.cms')

@section('content')

<div class="row" style="margin-bottom: 10px;">
    <div class="col-xs-4" style="text-align: right;">
        <div>
            <h3>{{ $tournament->sport->name }}</h3>      
        </div>
        <div style="margin-top: 10px; margin-bottom: 10px;">
            <h2>{{ $tournament->name }}</h2>        
        </div>
        <div>
            @if($isCreator && ($tournament->status != 'Finished'))
                @if($tournament->status == 'NotStarted')
                    {!!Form::open(['route' => ['tournament.start', $tournament->id], 'method' => 'POST']) !!}
                        {!!Form::submit( 'Empezar torneo ahora', ['class' => 'btn btn-primary']) !!}
                    {!!Form::close() !!}
                @else
                    {!!Form::open(['route' => ['tournament.resolve', $tournament->id], 'method' => 'POST']) !!}
                        {!!Form::submit( 'Resolver ronda ahora', ['class' => 'btn btn-primary']) !!}
                    {!!Form::close() !!}
                @endif
            @endif
        </div>
    </div>
    </div>
    <div class="container">
    <div class="row">    
            <img src="{{ asset('img/torneos/overwatch.png') }}"  class="img-responsive" style="max-height: 400px;margin: 0 auto; width: 97% ">
        </div>
        </div>
    
    

<div class="container">
<div class="tabbable-panel">
    <div class="tabbable-line">
        <ul class="nav nav-tabs nav-justified">
            <li class="active"><a href="#detalles" data-toggle="tab">Detalles</a></li>
            <li><a href="#participantes" data-toggle="tab">Participantes</a></li>
            @if($tournament->status != 'NotStarted')
            <li><a href="#brackets" data-toggle="tab">Brackets</a></li>
            <li><a href="#streams" data-toggle="tab">Streaming</a></li>
            @endif
        </ul>
    </div>
    <div class="tab-content">
    <!-- General Data -->
    <div class="tab-pane fade in active" id="detalles">
        
                 
            <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default" style="border-color: #32c5d2 ">
                    <div class="panel-heading" style="background-color: #32c5d2 ">
                    <h3 class="panel-title" >Titulo</h3>
                    </div>
                    <div class="panel-body" style="background-color: white">
                        <h1>Reglas</h1>
                        <p>{{ $tournament->description }}</p>
                    </div>
                </div>
            </div>        


            <div class="col-md-4">
                <div class="panel panel-default" style="border-color: #32c5d2 ">
                    <div class="panel-heading" style="background-color: #32c5d2 ">
                    <h3 class="panel-title" ">Titulo</h3>
                    </div>
                    <div class="panel-body " style="background-color: white">
                        <h1>Reglas</h1>
                        <p>{{ $tournament->description }}</p>
                    </div>
                </div>
            </div>   
            </div>


            <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" style="border-color: #32c5d2 ">
                    <div class="panel-heading" style="background-color: #32c5d2 ">
                    <h3 class="panel-title" ">Titulo</h3>
                    </div>
                    <div class="panel-body " style="background-color: white">
                        <h1>Reglas</h1>
                        <p>{{ $tournament->description }}</p>
                    </div>
                </div>
            </div>   
        </div>


    </div>
    <!-- People -->
    <div class="tab-pane fade" id="participantes">
        <div class="panel-body">
            <h1 align="center">
                Participantes - {{$tournament->participants()->count()}}/{{$tournament->needed_players}}
                @if($canShowSubscribe)
                    {!!Form::open(['route' => ['tournament.subscribe', $tournament->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                        {!!Form::submit( 'Subscribite', ['class' => 'btn btn-primary']) !!}
                    {!!Form::close() !!}
                @endif
                @if($canShowUnsubscribe)
                    {!!Form::open(['route' => ['tournament.unsubscribe', $tournament->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                        {!!Form::submit( 'Retirate', ['class' => 'btn btn-primary']) !!}
                    {!!Form::close() !!}
                @endif 
            </h1>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="64" style="min-width: 2em; width: {{$tournament->participants()->count() * 100/$tournament->needed_players}}%;">
                    <p align="center">{{$tournament->participants()->count() * 100/$tournament->needed_players}}%</p>
                </div>
            </div>
            <div class="container">
            @foreach ($tournament->participants()->get() as $participant)
                <div class="col-md-3" style="margin-bottom: 36px;">
                    <div class="media">
                        <a href="#" class="pull-left">        
                            <img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
                        </a>
                        <div class="media-body">
                            @if(!$tournament->haveTeams())
                            <h3 class="media-heading"><strong>
                                <a href="{{ route('user.profile', [ 'id' => $participant->id ]) }}">
                                    {{ $participant->name }}
                                </a>
                            </strong></h3>
                            <p class="small">{{ $participant->accounts()->forSport($tournament->sport)->first()->name }}</p>
                            @endif
                            @if($tournament->haveTeams())
                            <h3 class="media-heading"><strong>
                                <a href="{{ route('team.view', [ 'id' => $participant->id ]) }}">
                                    {{ $participant->name }}
                                </a>
                            </strong></h3>
                            @endif
                        </div>
                    </div>   
                </div>
            @endforeach  
            </div>
        </div>
    </div>
    @if($tournament->status != 'NotStarted')
    <!-- Brackets -->
    <div class="tab-pane fade" id="brackets">
        <div class="panel-body">
            <div class="brackets">
                <script>
                    var rounds = [];
                    @foreach($tournament->rounds as $round)
                    rounds.push([
                        @foreach($round->matches as $match)
                        {    
                            player1: { name: '{{$match->local->name}}', ID: {{$match->local->id}}, url: '{{route('match.view', [ 'id' => $match->id ])}}' @if($match->local == $match->winner), winner: true @endif },
                            player2: { name: '{{$match->away->name}}', ID: {{$match->away->id}}, url: '{{route('match.view', [ 'id' => $match->id ])}}' @if($match->away == $match->winner), winner: true @endif }
                        },
                        @endforeach
                    ]);
                    @endforeach
                    // Fill up the rounds
                    var lastRoundWinners = rounds[rounds.length - 1].length;
                    var emptyMatch = { player1: { name: '' }, player2: { name: '' } };
                    while(lastRoundWinners > 1){
                        var round = [];
                        lastRoundWinners = lastRoundWinners / 2;
                        for(var index = 0; index < lastRoundWinners; index++){
                            round.push(emptyMatch);
                        }
                        rounds.push(round);
                    }
                    if(lastRoundWinners == 1){
                        var champ = { name: '', ID: -1 };
                        if(rounds[rounds.length - 1].length == 1){
                            var lastRound = rounds[rounds.length - 1][0];
                            if(lastRound.player1.winner){
                                champ.name = lastRound.player1.name;
                                champ.ID = lastRound.player1.ID;
                            } else if(lastRound.player2.winner){
                                champ.name = lastRound.player2.name;
                                champ.ID = lastRound.player2.ID;
                            }
                        }
                        rounds.push([{ player1: champ }]);
                    }
                    var titles = [];
                    for(var index = 0; index < rounds.length; index ++){
                        if(index + 1 == rounds.length){
                            titles.push('Campeon');
                        } else {
                            titles.push('Ronda '+ (index + 1));
                        }
                    }
                    (function($){

                        $(".brackets").brackets({
                            titles: titles,
                            rounds: rounds,
                            color_title: '#A8A8A1',
                            border_color: '#00F',
                            color_player: 'black',
                            bg_player: 'white',
                            color_player_hover: 'white',
                            bg_player_hover: 'blue',
                            border_radius_player: '10px',
                            border_radius_lines: '10px',
                        });

                    })(jQuery);
                </script>
            </div>
        </div>
    </div>
    <!-- Streaming -->
    <div class="tab-pane fade" id="streams">
        <div class="panel-body">
            <img src="https://0.s3.envato.com/files/92502140/embed.JPG" width="100%">
        </div>
    </div>
    @endif
    </div>
</div>
</div>
@endsection