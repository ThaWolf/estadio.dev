@extends('layouts.cms')

@section('content')

    <h4>
        Torneo: {{ $tournament->name }}
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
    <div>
        Deporte: {{ $tournament->sport->name }}
    </div>
    
    @if($canShowSubscribe)
        {!!Form::open(['route' => ['tournament.subscribe', $tournament->id], 'method' => 'POST']) !!}
            {!!Form::submit( 'Subscribite', ['class' => 'btn btn-primary']) !!}
        {!!Form::close() !!}
    @endif
    @if($canShowUnsubscribe)
        {!!Form::open(['route' => ['tournament.unsubscribe', $tournament->id], 'method' => 'POST']) !!}
            {!!Form::submit( 'Retirate', ['class' => 'btn btn-primary']) !!}
        {!!Form::close() !!}
    @endif

    <h3>Subscripciones: </h3>
    @foreach ($tournament->participants()->get() as $participant)
        <span style="margin-right: 5px;">{{ $participant->name }}</span>
    @endforeach

    @if($tournament->status != 'NotStarted')
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
    @endif

@endsection