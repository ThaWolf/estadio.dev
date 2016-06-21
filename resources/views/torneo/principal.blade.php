@extends('layouts.app')

@section('content')
<section class="row">
<div class="col-md-6 col-md-offset-3">
<header><h2>Nombre de Torneo</h2></header>
<header><h3>Formato:</h3></header>
<header><h3>Maximo Inscripciones:</h3></header>
	<div class="col-md-3">
  <div class="list-group">
  {!! Form::model($torneo, [
    'method' => 'PATCH',
    'route' => ['torneo.update', $torneo->id]
]) !!}

{!! Form::submit('Inscribirte!', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
  <header><h3>Inscriptos</h3></header>
  @foreach($inscriptos as $inscripto)
    <a href=# >{{$inscripto->name}}</a>
  @endforeach
</div>
</div>
@if($torneo->status === 'NotStarted')
<a href="{{route('brackets.show',[$torneo ->id])}}" class="btn btn-primary" role="button">Iniciar Torneo!</a>  
@endif
</div>
</section>
@endsection


@section('posts')

    

@endsection