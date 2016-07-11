@extends('layouts.cms')

@section('content')
@foreach($torneos as $torneo)
<section class="row">
<div class="col-md-6 col-md-offset-3">
<header ><h2><a href="{{route('ver.torneo',[$torneo ->id])}}">{{$torneo -> nombre}}_{{$torneo -> id}}</a></h2></header>
</div>
</section>
@endforeach
@endsection