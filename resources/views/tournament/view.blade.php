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
            
            <div style="min-width:940px; min-height: 400px; background: url({{ asset('img/torneos/overwatch.png')}}) no-repeat center; background-size: 100% 100%;" class="jumbotron jumbotron-main-bg">
            </div>
              
                 
            <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default" style="border-color: #32c5d2 ">
                    <div class="panel-heading" style="background-color: #32c5d2 ">
                    <h3 class="panel-title" >Informacion General</h3>
                    </div>
                    <div class="panel-body" style="background-color: white">
                    <div class="col-md-6" style="text-align:left;">
                           <h6><strong>Juego:</strong>Hearthstone</h6>
                           <h6><strong>Servidor:</strong>Americas</h6>
                           
                    </div>
                    <div class="col-md-6" style="text-align: left;">
                           <h6><strong>Fecha:</strong>13/09/16</h6>
                           <h6><strong>Hora:</strong>22:00hs (timzone)</h6>
                    </div>

                    </div>
                </div>
            </div>        


            <div class="col-md-6">
                <div class="panel panel-default" style="border-color: #32c5d2 ">
                    <div class="panel-heading" style="background-color: #32c5d2 ">
                    <h3 class="panel-title" ">Formato</h3>
                    </div>
                    <div class="panel-body " style="background-color: white">
                        <div class="col-md-6" style="text-align: left;">
                           <h6>Individual (1vs1)</h6>
                           <h6>Conquest</h6>                           
                    </div>
                    <div class="col-md-6" style="text-align: left;">
                           <h6>Mejor de 3 (BO3)</h6>
                           <h6>Final a 5 (BO5)</h6> 
                           </div>
                    </div>
                </div>
            </div>   
            </div>


            <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" style="border-color: #32c5d2 ">
                    <div class="panel-heading" style="background-color: #32c5d2 ">
                    <h3 class="panel-title" ">Reglas</h3>
                    </div>
                    <div class="panel-body " style="background-color: white">
                        <p>
                            Bacon ipsum dolor amet capicola tail pork belly, meatloaf short ribs drumstick frankfurter ground round sirloin bacon shankle corned beef ribeye porchetta hamburger. Shankle cupim filet mignon, capicola picanha leberkas short ribs. Landjaeger drumstick shank, andouille boudin swine sirloin filet mignon beef ribs ham tri-tip. Strip steak capicola pastrami alcatra tail chicken pig tri-tip bresaola rump fatback flank. Leberkas ground round pancetta salami, jowl tri-tip jerky. Swine kielbasa brisket capicola hamburger corned beef shoulder bacon ball tip landjaeger biltong tongue.

                            Bresaola short ribs shank picanha pork ribeye pastrami spare ribs beef tri-tip pork belly kevin kielbasa bacon filet mignon. Biltong drumstick venison jerky ham ribeye boudin leberkas turducken corned beef. Kielbasa ham hock kevin porchetta. Drumstick bacon venison kevin prosciutto tri-tip, pork chop turkey meatloaf. Chicken brisket venison drumstick kielbasa porchetta hamburger doner tri-tip pork loin ribeye short loin leberkas. Short ribs landjaeger sausage shankle. Drumstick jowl pastrami, alcatra tri-tip pork belly meatball porchetta doner tongue filet mignon turducken ham.

                            Boudin leberkas meatloaf, capicola tongue pork chop venison. Capicola sirloin ground round, meatball chicken pancetta corned beef short ribs pork belly. Flank chuck spare ribs pastrami. Filet mignon jerky shoulder doner pancetta ball tip jowl pig strip steak tongue. Cupim shankle pig tenderloin ribeye chuck. Flank shankle spare ribs, bresaola corned beef bacon porchetta kielbasa. Frankfurter venison t-bone pastrami.

                            Shank pig jowl flank pork chop filet mignon shankle ground round, ham swine. Landjaeger ball tip cow meatball pancetta, cupim pork loin hamburger tongue rump pork pig pastrami. Jowl landjaeger kielbasa, tongue alcatra beef sirloin spare ribs capicola ham hock chuck. Pork chop kevin kielbasa jowl porchetta, capicola short loin shank.
                        </p>
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
                            player1: { name: '{{$match->local->name}}',target:'#brackets', ID: {{$match->local->id}}, url: '{{route('match.view', [ 'id' => $match->id ])}}' @if($match->local == $match->winner), winner: true @endif },
                            player2: { name: '{{$match->away->name}}', target:'#brackets',ID: {{$match->away->id}}, url: '{{route('match.view', [ 'id' => $match->id ])}}' @if($match->away == $match->winner), winner: true @endif }
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