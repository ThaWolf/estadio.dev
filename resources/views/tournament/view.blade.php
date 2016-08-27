@extends('layouts.cms')

@section('content')

<h4>
    Torneo: {{ $tournament->name }}
    <span style="margin-left: 5px;">Deporte: {{ $tournament->sport->name }}</span>
    <span style="margin-left: 10px; display: inline-block;">
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
    </span>
</h4>
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
        <div class="panel-body">
            <div class="row">
                <img src="{{ asset('img/torneos/overwatch.png') }}"  class="img-responsive">
            </div>
        </div>
        <div class="panel-body">
            <h1>Reglas</h1>
            <p>
                Bacon ipsum dolor amet venison shankle spare ribs, t-bone pork loin picanha hamburger cupim swine ground round alcatra filet mignon pancetta. Capicola porchetta meatloaf pastrami shank salami cow t-bone hamburger. Frankfurter alcatra salami tail pork loin ball tip. Porchetta fatback drumstick, landjaeger pastrami jowl ground round flank kielbasa hamburger filet mignon. Kielbasa prosciutto ribeye frankfurter rump biltong short ribs pork belly chicken alcatra sausage shankle ground round. -->

                Cupim brisket chicken, pork prosciutto beef ribs turkey ham hock leberkas strip steak filet mignon kevin meatloaf. Rump bresaola tongue turducken. Capicola ham hock tongue strip steak shoulder cupim. Flank kielbasa picanha, spare ribs prosciutto pig tri-tip ground round shoulder biltong short ribs jowl cow strip steak. Picanha beef ribs frankfurter, bresaola leberkas drumstick ground round ribeye alcatra brisket.
            </p>
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
            <h1>
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
                            <h3 class="media-heading"><strong><a href="#">{{ $participant->name }}</a></strong></h3>
                            <p class="small">Nalguidan#1134</p>
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
                            color_title: 'black',
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

@endsection