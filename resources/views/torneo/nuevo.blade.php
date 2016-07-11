@extends('layouts.cms')

@section('content')
	{!!Form::open(['route' => 'torneo.store', 'method' => 'POST']) !!}

		{!! Form::label('nombre','Nombre:')!!}
		{!! Form::text('nombre',null,['class' => 'form-control']) !!}

		{!! Form::label('descripcion','Descripcion:')!!}
		{!! Form::text('descripcion',null,['class' => 'form-control', 'rows' => '3']) !!}

		{!! Form::label('formato','Formato:')!!}
		 <div class="radio">
    <label>
      <input type="radio" name="formato" id="optionsRadios1" value="solitario" checked>
      Individual
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="formato" id="optionsRadios2" value="multijugador">
      Equipos
    </label>
  </div>
		{!!Form::submit( 'crear', ['class' => 'btn btn-primary']) !!}
    {!!Form::close() !!}

@endsection