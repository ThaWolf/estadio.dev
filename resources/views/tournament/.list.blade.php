@extends('layouts.cms')

@section('content')


	<div class="container">
		<h2>Bienvenido a E-Stadio</h2>
		<p>
			Este es un nuevo proyecto de pasion traido por aficionados a los deportes electronicos como vos!
			<br />
			Hartos de tener que saber 1000 idiomas para participar en un torneo nos decidimos a hacer una liga de torneos en español
			<br />
			Y llendo a lo concreto podes ver todos los torneos que nos eligen dia a dia
		</p>
	</div>

	<div class="container">
		<h3>Torneos</h3>
		@foreach($tournaments as $tournament)
	        <div class="col-xs-6 col-md-3">
	            <a href="{{ route('tournament.view', [ 'id' => $tournament->id ]) }}"
	             class="thumbnail" style="margin-bottom: 5px;">
	                <img src="/img/torneos/placehodor.png" alt="{{ $tournament->name }}">
	            </a>
	        </div>
	    @endforeach
	</div>

@endsection