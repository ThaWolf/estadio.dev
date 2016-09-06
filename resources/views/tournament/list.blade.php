@extends('layouts.cms')

@section('content')
            
                       
        <div class="divide80"></div>
        <div class="container">

            <div class="center-heading">
                <h2>Torneos</h2>
                <span class="center-line"></span>
            </div>   

            <ul class="filter list-inline">
                <li><a class="active" href="#" data-filter="*">Todos</a></li>
                <li><a href="#" data-filter=".hs">Hearthstone</a></li>
                <li><a href="#" data-filter=".ow">Overwatch</a></li>
                <li><a href="#" data-filter=".lol">League of Legends</a></li>
                <li><a href="#" data-filter=".csgo">Counter Strike GO</a></li>
            </ul>
            <div class="container">
            @foreach($tournaments as $tournament)
            <div class="col-xs-6 col-md-3">
                <div class="portfolio-box iso-call col-2-space">
                    
                        <div class="item-img-wrap ">
                            <img src="/img/torneos/placehodor.png" class="img-responsive" alt="{{ $tournament->name }}">
                            <div class="item-img-overlay">
                                <a href="{{ route('tournament.view', [ 'id' => $tournament->id ]) }}" class="show-image">
                                    <span></span>
                                </a>
                            </div>
                        </div> 
                        <div class="work-desc">
                            <h3><a href="{{ route('tournament.view', [ 'id' => $tournament->id ]) }}">{{ $tournament->name }}</a></h3>
                            <span>Fecha (placeholder)</span>
                        </div><!--work desc-->
                    
                </div>
                </div>
                @endforeach
                </div>
            </div>
        

@endsection


   
