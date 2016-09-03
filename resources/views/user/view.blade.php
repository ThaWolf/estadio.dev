@extends('layouts.cms')

@section('content')

<!-- User Header -->
<div class="row">
	<div class="col-md-3 media">
   		<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail"  style="width: 250px; height: 250px; display: block; margin-left: auto; margin-right: auto; margin-top: 10px; " src="/img/torneos/placehodor.png">
	</div>
	<div class="col-md-9">
		<h1 style="color:white;"> {{$user->name}}</h1>
	</div>
</div>
<!-- Tabs -->
<div class="tabbable-panel" style="margin-top: 10px;">
    <div class="tabbable-line">
        <ul class="nav nav-tabs nav-justified">
            <li class="active"><a href="#cuentas" data-toggle="tab"><p>Cuentas Asociadas</p></a></li>
            <li><a href="#equipos" data-toggle="tab"><p>Equipos</p></a></li>
          	<li><a href="#proxtorneos" data-toggle="tab"><p>Proximos torneos</p></a></li>
          	<li><a href="#historial" data-toggle="tab"><p>Historial de torneos</p></a></li>
        </ul>
    </div>
    <div class="tab-content">
    <!-- Account Tab -->
    <div class="tab-pane fade in active" id="cuentas">
    	<div class="panel-body">
    	@foreach($user->accounts as $account)
    		<div class="row">
				<div class="col-md-4">
					<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 250px; height: 50px; margin-top: 10px; " src="/img/torneos/overwatch1.png">
				</div>
				<div class="col-md-4" style="text-align: center;">
					<h2>{{ $account->name }}</h2>
				</div>
				<div class="col-md-4">
					<!-- TODO: No region for now -->
				</div>
    		</div>
    	@endforeach
    	@if($availableSports->count() > 0)
	    	<div class="row well" style="margin-top: 20px;">
				<legend>Agregar Cuenta:</legend>
				{!!Form::open(['route' => ['user.addAccount', $user->id], 'method' => 'POST', 'class' => 'form-horizontal']) !!}
					<div class="form-group">
						{!!Form::label( 'sport_id', 'Deporte:', [ 'class' => 'col-sm-2 control-label' ]) !!}
						<div class="col-sm-10">
						{!!Form::select('sport_id', $availableSports, '', [ 'class' => 'form-control' ]) !!}
						</div>
					</div>
					<div class="form-group">
						{!!Form::label( 'name', 'Nombre de usuario:', [ 'class' => 'col-sm-2 control-label' ]) !!}
						<div class="col-sm-10">
						{!!Form::text( 'name', '', [ 'class' => 'form-control', 'min' => '0' ]) !!}
						</div>
					</div>
		            <div class="col-sm-offset-2">
						{!!Form::submit( 'Agregar', ['class' => 'btn btn-primary']) !!}
					</div>
		        {!!Form::close() !!}
			</div>
		@endif
    	</div>
    </div>
    <!-- Teams Tab -->
    <div class="tab-pane fade" id="equipos">
    	<div class="panel-body">
		@foreach($user->teams as $team)
	        <div class="col-md-3" style="margin-bottom: 36px;">
                <div class="media">
                    <a href="#" class="pull-left">        
                        <img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 64px; height: 64px;" src="/img/torneos/placehodor.png">      
                    </a>
                    <div class="media-body">
                        <h3 class="media-heading"><strong>
                        	<a href="{{ route('team.view', $team->id) }}">
                        		{{ $team->name }}
                        	</a>
                       	</strong></h3>
                        <p class="small">{{ $team->sport->name }}</p>
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
          	@foreach($user->tournaments as $tournament)
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
          	@foreach($user->tournaments as $tournament)
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
	</div>
</div>

@endsection