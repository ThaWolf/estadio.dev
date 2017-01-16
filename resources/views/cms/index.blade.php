@extends('layouts.cms')

@section('content')

 
                       
        <!--rev slider start-->
        <div class="fullwidthbanner">
            <div class="tp-banner">
                <ul>
                    <!-- SLIDE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="{{$tournaments[0]->name}}" ">
                        <!-- MAIN IMAGE -->

                        <img src="/img/tournaments/bannerImg/{{$tournaments[0]->img_banner}}"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYER NR. 1 -->
                        <div class="caption left-tile-text sfb tp-resizeme"
                             data-x="40"
                             data-y="110" 
                             data-speed="600"
                             data-start="1200"
                             data-end="9400"
                             data-endspeed="600">{{$tournaments[0]->name}}
                            
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="caption medium_bg_darkblue sfl medium tp-resizeme"
                             data-x="40"
                             data-y="170" 
                             data-speed="600"
                             data-start="1600"
                             data-end="9400"
                             data-endspeed="600"><i class="fa fa-check"></i>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="170" 
                             data-speed="600"
                             data-start="1600"
                             data-end="9400"
                             data-endspeed="600">Inicia el {{$tournaments[0]->start_time}}
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="caption medium_bg_darkblue sfl medium tp-resizeme"
                             data-x="40"
                             data-y="220" 
                             data-speed="600"
                             data-start="1800"
                             data-end="9400"
                             data-endspeed="600"><i class="fa fa-check"></i>
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="220" 
                             data-speed="600"
                             data-start="1800"
                             data-end="9400"
                             data-endspeed="600">Maximo {{$tournaments[0]->needed_players}} Participantes
                        </div>
                        

                         <!-- LAYER NR. 6 -->

    
                         <!-- LAYER NR. 7 --> 
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="270" 
                             data-speed="600"
                             data-start="2000"
                             data-end="9400"
                             data-endspeed="600"> <a href="{{ route('tournament.view', [ 'id' => $tournaments[0]->id ]) }}" style="color: #eee;">Inscribirse aqui</a>
                        </div>
                        
                        <!-- LAYER NR. 8 
                        <div class="caption medium_bg_darkblue sfl medium tp-resizeme"
                             data-x="40"
                             data-y="320" 
                             data-speed="600"
                             data-start="2200"
                             data-end="9400"
                             data-endspeed="600"><i class="fa fa-check"></i>
                        </div>-->

                        <!-- LAYER NR. 9 
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="320" 
                             data-speed="600"
                             data-start="2200"
                             data-end="9400"
                             data-endspeed="600">Loser brackets
                        </div>-->

                        <!-- LAYER NR. 10 
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="40"
                             data-y="370" 
                             data-speed="600"
                             data-start="2400"
                             data-end="9400"
                             data-endspeed="600">Organizado por tu vieja
                        </div>-->

                    </li>

                    <!-- SLIDE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="{{$tournaments[1]->name}}">
                        <!-- MAIN IMAGE -->
                        <img src="/img/tournaments/bannerImg/{{$tournaments[1]->img_banner}}"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYER NR. 1 -->
                        <div class="caption left-tile-text sfr tp-resizeme"
                             data-x="40"
                             data-y="110" 
                             data-speed="600"
                             data-start="1200"
                             data-end="9400"
                             data-endspeed="600">{{$tournaments[1]->name}}
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="caption medium_bg_darkblue sfl medium tp-resizeme"
                             data-x="40"
                             data-y="170" 
                             data-speed="600"
                             data-start="1600"
                             data-end="9400"
                             data-endspeed="600"><i class="fa fa-check"></i>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="170" 
                             data-speed="600"
                             data-start="1600"
                             data-end="9400"
                             data-endspeed="600">Inicia el {{$tournaments[1]->start_time}}
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="caption medium_bg_darkblue sfl medium tp-resizeme"
                             data-x="40"
                             data-y="220" 
                             data-speed="600"
                             data-start="1800"
                             data-end="9400"
                             data-endspeed="600"><i class="fa fa-check"></i>
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="220" 
                             data-speed="600"
                             data-start="1800"
                             data-end="9400"
                             data-endspeed="600">Maximo {{$tournaments[1]->needed_players}} Participantes
                        </div>


                         LAYER NR. 7 
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="270" 
                             data-speed="600"
                             data-start="2000"
                             data-end="9400"
                             data-endspeed="600"><a href="{{ route('tournament.view', [ 'id' => $tournaments[1]->id ]) }}" style="color: #eee;">Inscribirse aqui</a>
                        </div>

                        <!-- LAYER NR. 8 
                        <div class="caption medium_bg_darkblue sfl medium tp-resizeme"
                             data-x="40"
                             data-y="320" 
                             data-speed="600"
                             data-start="2200"
                             data-end="9400"
                             data-endspeed="600"><i class="fa fa-check"></i>
                        </div>-->

                        <!-- LAYER NR. 9 
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="320" 
                             data-speed="600"
                             data-start="2200"
                             data-end="9400"
                             data-endspeed="600">Loser brackets
                        </div>-->

                        <!-- LAYER NR. 10 
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="40"
                             data-y="370" 
                             data-speed="600"
                             data-start="2400"
                             data-end="9400"
                             data-endspeed="600">Organizado por tu vieja
                        </div>-->

                    </li>                    <!-- SLIDE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="{{$tournaments[2]->name}}">
                        <!-- MAIN IMAGE -->
                        <img src="/img/tournaments/bannerImg/{{$tournaments[2]->img_banner}}"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYER NR. 1 -->
                        <div class="caption left-tile-text sfr tp-resizeme"
                             data-x="40"
                             data-y="110" 
                             data-speed="600"
                             data-start="1200"
                             data-end="9400"
                             data-endspeed="600">{{$tournaments[2]->name}}
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="caption medium_bg_darkblue sfl medium tp-resizeme"
                             data-x="40"
                             data-y="170" 
                             data-speed="600"
                             data-start="1600"
                             data-end="9400"
                             data-endspeed="600"><i class="fa fa-check"></i>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="170" 
                             data-speed="600"
                             data-start="1600"
                             data-end="9400"
                             data-endspeed="600">Inicia el {{$tournaments[2]->start_time}}
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="caption medium_bg_darkblue sfl medium tp-resizeme"
                             data-x="40"
                             data-y="220" 
                             data-speed="600"
                             data-start="1800"
                             data-end="9400"
                             data-endspeed="600"><i class="fa fa-check"></i>
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="220" 
                             data-speed="600"
                             data-start="1800"
                             data-end="9400"
                             data-endspeed="600">Maximo {{$tournaments[2]->needed_players}} Participantes
                        </div>


                         LAYER NR. 7 
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="270" 
                             data-speed="600"
                             data-start="2000"
                             data-end="9400"
                             data-endspeed="600"><a href="{{ route('tournament.view', [ 'id' => $tournaments[2]->id ]) }}" style="color: #eee;">Inscribirse aqui</a>
                        </div>
                        </div>

                        <!-- LAYER NR. 8 
                        <div class="caption medium_bg_darkblue sfl medium tp-resizeme"
                             data-x="40"
                             data-y="320" 
                             data-speed="600"
                             data-start="2200"
                             data-end="9400"
                             data-endspeed="600"><i class="fa fa-check"></i>
                        </div>-->

                        <!-- LAYER NR. 9 
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="90"
                             data-y="320" 
                             data-speed="600"
                             data-start="2200"
                             data-end="9400"
                             data-endspeed="600">Loser brackets
                        </div>-->

                        <!-- LAYER NR. 10 
                        <div class="caption modern_big_redbg sfb medium tp-resizeme"
                             data-x="40"
                             data-y="370" 
                             data-speed="600"
                             data-start="2400"
                             data-end="9400"
                             data-endspeed="600">Organizado por tu vieja
                        </div>-->
                    </li>
                </ul>
            </div>
        </div><!--full width banner-->
        <!--revolution end-->

        <div class="divide60"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="center-heading">
                        <h2><strong>E</strong>stadio </h2>
                        <span class="center-line"></span>
                        <p class="sub-text margin40">
                            Un sistema de torneos hecho a la medida de los organizadores, pensando en los jugadores. </p>
                    </div>
                </div>

            </div><!--center heading end-->
            <div class="divide50"></div>
            <div class="row">
                <div class="col-md-3 col-sm-6 margin30">
                    <div class="colored-boxed green">
                        <i class="pe-7s-magic-wand"></i>
                        <h3>Simple e Intuitivo</h3>
                        <span class="center-line"></span>
                        <p>
                            Para que no te pierdas navegando. 
                        </p>
                    </div>
                </div><!--colored boxed col end-->
                <div class="col-md-3 col-sm-6 margin30">
                    <div class="colored-boxed dark">
                        <i class="pe-7s-phone"></i>
                        <h3>Sistema responsive</h3>
                        <span class="center-line"></span>
                        <p>
                            Ingresa desde tu celular o tablet sin vueltas. 
                        </p>
                    </div>
                </div><!--colored boxed col end-->
                <div class="col-md-3 col-sm-6 margin30">
                    <div class="colored-boxed blue">
                        <i class="pe-7s-like"></i>
                        <h3>Hecho con amor</h3>
                        <span class="center-line"></span>
                        <p>
                            Por y para gamers. 
                        </p>
                    </div>
                </div><!--colored boxed col end-->
                <div class="col-md-3 col-sm-6 margin30">
                    <div class="colored-boxed red">
                        <i class="pe-7s-folder"></i>
                        <h3>Sistema de baneo</h3>
                        <span class="center-line"></span>
                        <p>
                            Herramienta pensada para tu comodidad. 
                        </p>
                    </div>
                </div><!--colored boxed col end-->
            </div>
        </div><!--services container-->

        
        
        <div class="divide50"></div>
        <div class="wide-img-showcase">

            <div class="row margin-0 wide-img-showcase-row">
             <a href="{{ route('tournament.view', [ 'id' => $week_tournaments[0]->id ]) }}">
                <div class="col-sm-6 no-padding" style="background: url(../img/tournaments/profileTournament/{{$week_tournaments[0]->img_profile}}) scroll center no-repeat;background-size: cover;position: absolute;height: 100%;">
                    <div class="no-padding-inner ">
                        <div>&nbsp;</div>
                    </div>
                </div>
                </a>
                <div class="col-sm-6 col-sm-offset-6 no-padding gray">
                    <div class="no-padding-inner gray">
                        <h3 class="wow animated fadeInDownfadeInRight">{{$week_tournaments[0]->name}}</h3>
                        <h4 class="wow animated fadeInDownfadeInRight">Torneo de la semana</h4>
                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-tablet"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Fecha de Inicio</h4>
                                <p>
                                    {{$week_tournaments[0]->start_time}}
                                </p>
                            </div>

                        </div><!--service box-->
                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-info">
                                <p>
                                @if($week_tournaments[0]->status == 'NotStarted') 
                                        {!!Form::open(['route' => ['tournament.subscribe', $week_tournaments[0]->id], 'method' => 'POST', 'class' => '']) !!}
                                            {!!Form::submit( 'Suscribirse', ['class' => 'btn btn-primary']) !!}
                                        {!!Form::close() !!}
                                @endif 
                                </p>
                            </div>
                        </div>
                        <!--
                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-code"></i>
                            </div>
                            <div class="services-box-info">
                                <h4>Organiza</h4>
                                <p>
                                    Liga argentina de jugadores profesionales de tu hermana y tu vieja.
                                </p>
                            </div>
                            <div class="divide30"></div>
                            <p><a href="#" class="btn btn-theme-dark btn-lg">Inscribirse!</a></p>
                        </div>
                        -->

                    </div>
                </div>
            </div>
        </div><!--wide image showcase end-->
        
        
       
        <div class="divide70"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="center-heading">
                        <h2><strong>Ultimos</strong>Torneos</h2>
                        <span class="center-line"></span>
                    </div>
                </div>                   
            </div>
            <div class="row">
                <div class="col-sm-4 margin30">
                    <div>
                        <a href="{{ route('tournament.view', [ 'id' => $last_tournaments[0]->id ]) }}">
                            <div class="item-img-wrap">
                                <img src="img/tournaments/profileTournament/{{$last_tournaments[0]->img_profile}}" class="img-responsive" alt="workimg">
                                <div class="item-img-overlay">
                                    <span></span>
                                </div>
                            </div>                       
                        </a><!--news link--> 
                        <div class="news-desc">
                            <span>{{$last_tournaments[0]->sport->name}}</span>
                            <h4><a href="{{ route('tournament.view', [ 'id' => $last_tournaments[0]->id ]) }}">{{$last_tournaments[0]->name}}</a></h4>
                            
                        </div><!--news desc-->
                    </div> 
                </div><!--news col-->
                <div class="col-sm-4 margin30">
                    <div>
                        <a href="{{ route('tournament.view', [ 'id' => $last_tournaments[1]->id ]) }}">
                            <div class="item-img-wrap">
                                <img src="img/tournaments/profileTournament/{{$last_tournaments[1]->img_profile}}" class="img-responsive" alt="workimg">
                                <div class="item-img-overlay">
                                    <span></span>
                                </div>
                            </div>                       
                        </a><!--news link--> 
                        <div class="news-desc">
                            <span>{{$last_tournaments[1]->sport->name}}</span>
                            <h4><a href="{{ route('tournament.view', [ 'id' => $last_tournaments[1]->id ]) }}">{{$last_tournaments[1]->name}}</a></h4>
                            
                        </div><!--news desc-->
                    </div> 
                </div><!--news col-->
                <div class="col-sm-4 margin30">
                    <div>
                        <a href="{{ route('tournament.view', [ 'id' => $last_tournaments[2]->id ]) }}">
                            <div class="item-img-wrap">
                                <img src="img/tournaments/profileTournament/{{$last_tournaments[2]->img_profile}}" class="img-responsive" alt="workimg">
                                <div class="item-img-overlay">
                                    <span></span>
                                </div>
                            </div>                       
                        </a><!--news link--> 
                        <div class="news-desc">
                            <span>{{$last_tournaments[2]->sport->name}}</span>
                            <h4><a href="{{ route('tournament.view', [ 'id' => $last_tournaments[2]->id ]) }}">{{$last_tournaments[2]->name}}</a></h4>
                            
                        </div><!--news desc-->
                    </div> 
                </div><!--news col-->
            </div>
        </div><!--latest news-->
@endsection