@extends('layouts.cms')

@section('content')

<!-- Team Header -->
<div class="container">

	<div class="col-md-3 media">
   		<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail"  style="width: 250px; height: 250px; display: block; margin-left: auto; margin-right: auto; margin-top: 25px; " src="/img/avatar_team/{{$team->avatar}}">
      @if($isOwner)
        <script type="text/javascript">
        function showForm(){
          var contenedor = document.getElementById("avatarForm");
        if (contenedor.style.display == "none") {
          contenedor.style.display = "block";
        }else {
          contenedor.style.display = "none";
        }
          return true;

        }
      </script>
       <button onclick="showForm();" class="btn">Cambiar foto</button>
       <form  enctype="multipart/form-data" action="{{$team->id}}" method="POST">
          <div id="avatarForm" style="display: none;">
          <input id="form1" type="file" accept="image/x-png" name="avatar">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input id="form1" type="submit" value="Cargar">
          </div>
        </form>
      @endif


	<div class="row">
  <div class="col-md-3">
  
    <h1 style="color:white;"> {{$team->name}}</h1>
    </div>
    @if($hasInvite)
    <div class="invite-form">
      Fuiste invitado a este equipo
      {!!Form::open(['route' => ['team.invite.accept', $team->id], 'method' => 'POST']) !!}
            {!!Form::submit( 'Aceptar', ['class' => 'btn btn-success']) !!}
        {!!Form::close() !!}
        {!!Form::open(['route' => ['team.invite.decline', $team->id], 'method' => 'POST']) !!}
            {!!Form::submit( 'Declinar', ['class' => 'btn btn-danger']) !!}
        {!!Form::close() !!}
    </div>
    @endif

  </div>
  </div>

<!-- Tabs -->
<div class="col-md-9 media">
<div class="tabbable-panel" style="margin-top: 10px;">
    <div class="tabbable-line">
        <ul class="nav nav-tabs nav-justified">
            <li class="active"><a href="#integrantes" data-toggle="tab"><p>Integrantes</p></a></li>
          	<li><a href="#proxtorneos" data-toggle="tab"><p>Proximos torneos</p></a></li>
          	<li><a href="#historial" data-toggle="tab"><p>Historial de torneos</p></a></li>
          	@if($canInvite)
          	<li><a href="#invites" data-toggle="tab"><p>Invitar Jugadores</p></a></li>
          	@endif
        </ul>
    </div>
    <div class="tab-content">
    	<!-- Tab Team Members -->
    	<div class="tab-pane fade in active" id="integrantes">
    		<div class="panel-body">
    			@foreach($team->players as $player)
			        <div class="col-md-3" style="margin-bottom: 36px;">
	                    <div class="media">
	                        <a href="#" class="pull-left">        
	                            <img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/avatar_usr/{{$player->avatar}}">      
	                        </a>
	                        <div class="media-body">
	                            <h3 class="media-heading"><strong>
                                <a href="{{ route('user.profile', [ 'id' => $player->id ]) }}">
                                  {{ $player->name }}
                                </a>
                              </strong></h3>
	                            <p class="small">{{  $team->sport->name  }}</p>
	                            @if($isOwner)
								{!!Form::open(['route' => ['team.fire', $team->id], 'method' => 'POST']) !!}
									<input type="hidden" name="player_id" value="{{$player->id}}">
						            {!!Form::submit( 'Despedir', ['class' => 'btn btn-primary']) !!}
						        {!!Form::close() !!}
						        @endif
	                        </div>
	                    </div>   
	                </div>
				@endforeach
    		</div>
    	</div>
    	<!-- Tab Current Tournaments -->
    	<div class="tab-pane fade" id="proxtorneos">
    		<div class="panel-body">
			<table class="table">
              <tbody>
              	@foreach($team->tournaments as $tournament)
              	@if($tournament->status != 'Finished')
                <tr>
                  <td>
                  	21.06.2016 13:42
                  </td>
                  <td>
                  	<div class="hs">
                  		{{ $tournament->name }}
                  		<div class="right">
                  			<a href="{{ route('tournament.view', [ 'id' => $tournament->id ]) }}">
                  				Detalles del torneo
                  			</a>
                  		</div>
                  	</div>
                  </td>
                </tr>
                @endif
                @endforeach
              </tbody>
            </table>
    		</div>
    	</div>
    	<!-- Tab Old Tournaments -->
    	<div class="tab-pane fade" id="historial">
    		<div class="panel-body">
			<table class="table">
              <tbody>
              	@foreach($team->tournaments as $tournament)
              	@if($tournament->status == 'Finished')
                <tr>
                  <td>
                  	21.06.2016 13:42
                  </td>
                  <td>
                  	<div class="hs">
                  		{{ $tournament->name }}
                  		<div class="right">
                  			<a href="{{ route('tournament.view', [ 'id' => $tournament->id ]) }}">
                  				Detalles del torneo
                  			</a>
                  		</div>
                  	</div>
                  </td>
                </tr>
                @endif
                @endforeach
              </tbody>
            </table>
    		</div>
    	</div>
    	@if($canInvite)
    	<!-- Tab Invite -->
    	<div class="tab-pane fade" id="invites">
    		<div class="panel-body">
    			<div>
					Invitar:
					{!!Form::open(['route' => ['team.invite', $team->id], 'method' => 'POST', 'class' => 'form-horizontal']) !!}
						<div class="form-group">
							{!!Form::label( 'player_name', 'Jugador :', [ 'class' => 'col-sm-2 control-label' ]) !!}
							<div class="col-sm-10">
							{!!Form::text( 'player_name', '', [ 'class' => 'form-control' ]) !!}
							</div>
						</div>
			            <div class="col-sm-offset-2">
							{!!Form::submit( 'Invitar', ['class' => 'btn btn-primary']) !!}
						</div>
			        {!!Form::close() !!}
			    </div>
			    <div>
			    	Invitaciones pendientes:
			    	@foreach($team->invites as $invite)
			    		{{$invite->name}}
			    	@endforeach
				</div>
    		</div>
    	</div>
		@endif
    </div>
</div>
</div>
</div>

@endsection