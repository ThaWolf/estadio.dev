@extends('layouts.cms')

@section('content')

	<div>
		Partido: {{$match->local->name}} vs {{$match->away->name}}
	</div>
	<div>
		Estado:
		@if($match->status == 'Finished')
		Terminado
		@else
		En curso
		@endif
	</div>
	<div>
		Resultado:
		@if($match->status == 'Finished')
		{{$match->score_local}} : {{$match->score_away}}
		@else
		- : -
		@endif
	</div>

	@if($canShowReports)
	<div class="row well" style="margin-top: 20px;">
		<legend>Reportes:</legend>
		@foreach($match->reports as $report)
		<div class="col-sm-6">
			<div>
				Equipo:
				@if($report->participant == 'Local')
				{{$match->local->name}}
				@else
				{{$match->away->name}}
				@endif
			</div>
			<div>
				Puntos {{$match->local->name}}: {{$report->score_local}}
			</div>
			<div>
				Puntos {{$match->away->name}}: {{$report->score_away}}
			</div>
			<div>
				Ganador: {{$report->winner->name}}
			</div>
			<div>
				Captura: {{$report->image_url}}
			</div>
			<div>
				Descripcion: {{$report->description}}
			</div>
		</div>
		@endforeach
	</div>
		@if($match->status == 'Dispute')
	<div class="row well" style="margin-top: 20px;">
		<legend>Resolver Disputa:</legend>
		{!!Form::open(['route' => ['match.resolve', $match->id], 'method' => 'POST', 'class' => 'form-horizontal']) !!}
			<div class="form-group">
				{!!Form::label( 'score_local', 'Puntos '. $match->local->name .':', [ 'class' => 'col-sm-2 control-label' ]) !!}
				<div class="col-sm-10">
				{!!Form::number( 'score_local', $match->score_local, [ 'class' => 'form-control', 'min' => '0' ]) !!}
				</div>
			</div>
			<div class="form-group">
				{!!Form::label( 'score_away', 'Puntos '. $match->away->name .':', [ 'class' => 'col-sm-2 control-label' ]) !!}
				<div class="col-sm-10">
				{!!Form::number( 'score_away', $match->score_away, [ 'class' => 'form-control', 'min' => '0' ]) !!}
				</div>
			</div>
            <div class="col-sm-offset-2">
				{!!Form::submit( 'Enviar', ['class' => 'btn btn-primary']) !!}
			</div>
        {!!Form::close() !!}
	</div>
		@endif
	@endif
	@if($canMakeReport)
	<div class="row well" style="margin-top: 20px;">
		<legend>Reporte:</legend>
		{!!Form::open(['route' => ['match.report', $match->id], 'method' => 'POST', 'class' => 'form-horizontal']) !!}
			<div class="form-group">
				{!!Form::label( 'score_local', 'Puntos '. $match->local->name .':', [ 'class' => 'col-sm-2 control-label' ]) !!}
				<div class="col-sm-10">
				{!!Form::number( 'score_local', $report->score_local, [ 'class' => 'form-control', 'min' => '0' ]) !!}
				</div>
			</div>
			<div class="form-group">
				{!!Form::label( 'score_away', 'Puntos '. $match->away->name .':', [ 'class' => 'col-sm-2 control-label' ]) !!}
				<div class="col-sm-10">
				{!!Form::number( 'score_away', $report->score_away, [ 'class' => 'form-control', 'min' => '0' ]) !!}
				</div>
			</div>
			<div class="form-group">
				{!!Form::label( 'image_url', 'Captura:', [ 'class' => 'col-sm-2 control-label' ]) !!}
				<div class="col-sm-10">
				{!!Form::text( 'image_url', $report->image_url, [ 'class' => 'form-control' ]) !!}
				</div>
			</div>
			<div class="form-group">
				{!!Form::label( 'description', 'Descripcion:', [ 'class' => 'col-sm-2 control-label' ]) !!}
				<div class="col-sm-10">
				{!!Form::textarea( 'description', $report->description, [ 'class' => 'form-control' ]) !!}
            	</div>
            </div>
            <div class="col-sm-offset-2">
				{!!Form::submit( 'Enviar', ['class' => 'btn btn-primary']) !!}
			</div>
        {!!Form::close() !!}
	<div>
	@endif
	
@endsection