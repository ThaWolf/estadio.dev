@extends('layouts.cms')

@section('content')


        <div class="divide80"></div>
        <div class="container">

            <div class="center-heading">
                <h2>Torneos</h2>
                <span class="center-line"></span>
            </div>   
            <div class="list-inline" style="text-align: center;margin-bottom: 30px;">

                <button class="filter activee" data-filter="all">Todo</button>
                @foreach($sports as $sport)
                <button class="filter" data-filter=".{{$sport->name}}">{{$sport->name}}</button>
                 @endforeach

            </div>
            <div  id="Container" class="container" style="padding-top: 50px ">
            @foreach($tournaments as $tournament)
            <div  class="col-xs-6 col-md-3 mix {{$tournament->sport->name}}" >
                <div class="portfolio-box iso-call col-2-space" >
                    
                        <div class="item-img-wrap ">
                            <img src="img/tournaments/profileTournament/{{$tournament-> img_profile}}" class="img-responsive" alt="{{ $tournament->name }}">
                            <div class="item-img-overlay">
                                <a href="{{ route('tournament.view', [ 'id' => $tournament->id ]) }}" >
                                    <span><br/><br/><br/>Participantes - {{$tournament->participants()->count()}}/{{$tournament->needed_players}}</span>
                                </a>
                            </div>
                        </div> 
                        <div class="work-desc">
                            <h3><a href="{{ route('tournament.view', [ 'id' => $tournament->id ]) }}">{{ $tournament->name }}</a></h3>
                            <h5 style="color:#C0C0C0 ">Inicia el {{$tournament->start_time}}</h5>
                            <div>
                             @if($tournament->status == 'NotStarted') 
                                 @if(!$tournament->isSubscribed($user))
                                        {!!Form::open(['route' => ['tournament.subscribe', $tournament->id], 'method' => 'POST', 'class' => '']) !!}
                                            {!!Form::submit( 'Subscribite', ['class' => 'btn btn-primary']) !!}
                                        {!!Form::close() !!}
                                 @else
                                    {!!Form::open(['route' => ['tournament.unsubscribe', $tournament->id], 'method' => 'POST', 'class' => '']) !!}
                                      {!!Form::submit( 'Retirate', ['class' => 'btn btn-primary']) !!}
                                   {!!Form::close() !!}
                                    @endif
                                 @endif
                            @if($tournament->status != 'NotStarted') 
                                <a href="{{ route('tournament.view', [ 'id' => $tournament->id ]) }}"><button class="btn btn-primary">En Progreso</button></a>
                             @endif

                        </div>
                        </div><!--work desc-->

                </div>
                </div>
                @endforeach

                </div>
            </div>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
    <script type="text/javascript">
          $(function(){
                 $('#Container').mixItUp();
                 });
         </script>
@endsection

 





   
