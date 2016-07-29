@extends('layouts.cms')

@section('content')

	<div>
		Equipo: {{$team->name}}
	</div>
	<div>
		Deporte: {{$team->sport->name}}
	</div>
	<div>
		Dueño: {{$team->owner->name}}
	</div>
	<div>
		Capitan: {{$team->captain->name}}
	</div>
	<div>
		Jugadores:
		@foreach($team->players as $player)
			{{$player->name}}
			@if($isOwner)
			{!!Form::open(['route' => ['team.fire', $team->id], 'method' => 'POST']) !!}
				<input type="hidden" name="player_id" value="{{$player->id}}">
	            {!!Form::submit( 'Despedir', ['class' => 'btn btn-primary']) !!}
	        {!!Form::close() !!}
	        @endif
		@endforeach
	</div>
	@if($canInvite)
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
	@endif
	@if($hasInvite)
	<div>
		Fuiste invitado a este equipo
		{!!Form::open(['route' => ['team.invite.accept', $team->id], 'method' => 'POST']) !!}
            {!!Form::submit( 'Aceptar', ['class' => 'btn btn-success']) !!}
        {!!Form::close() !!}
        {!!Form::open(['route' => ['team.invite.decline', $team->id], 'method' => 'POST']) !!}
            {!!Form::submit( 'Declinar', ['class' => 'btn btn-danger']) !!}
        {!!Form::close() !!}
	</div>
	@endif
	
@endsection