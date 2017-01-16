
    <script type="text/javascript">
    function showRadio(indexMatch){
        var local = 0;
        var away = 0;
        var result = "";
        for (var i = indexMatch; i > 0; i--) {
            match = "match";
            match = match.concat(i.toString());
            var radioForm = document.forms["formRadio"].elements[match];
            var radioValue = radioForm[1];
            if (radioValue.checked == false) {
                local = local +1;
            }else 
            {
                away = away +1;
            }
        }

        indexMatch= indexMatch +1;
        var match = "divMatch";
        match = match.concat(indexMatch.toString());
        var result = document.getElementById(match);
        if (away == local) {
            result.style.display= "block";
         }
         else
        {
            if (indexMatch != 2) {
                result.style.display= "none";
            }
        }

        }
     </script>
@extends('layouts.cms')

@section('content')

<script type="text/javascript">


</script>
<div class="container" style="margin-top: 50px; ">
	<div class="row">
		<div class="col-sm-4 col-md-4" style="align-content: center; ">
            <div class="user-image" style=" position: relative; ;  z-index: 1; width: 80%;height: 80%; text-align: center;">
                <img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 256px; height: 256px; margin-left: 70px" src="/img/avatar_usr/{{$match->local->avatar}}">   
            </div>
            <div class="user-info-block" style="text-align: center; ">
                <div class="user-heading" style="width: 100%; text-align: center; margin: 10px 0 0;">
                    <h3>{{$match->local->name}}</h3>
                    
                </div>
                
                <div class="user-body">
                    <div class="tab-content">
                        <div id="information">
                            <h4>Resultado</h4>
                            <h1><kbd>
                            	@if($match->status == 'Finished')
                            		{{$match->score_local}}
                            	@else
                            		-
                            	@endif
                            </kbd></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-md-4">
        	<div style="min-width:100px; min-height: 400px;margin-top: 10px; background: url({{ asset('img/tournaments/versus.png')}}) no-repeat center; background-size:100% 100%;">

        	</div>
        	<div class="user-info-block">
                <div class="user-heading" style="width: 100%; text-align: center; margin: 10px 0 0;">
                    <h3></h3>
                    
                </div>
                
                <div class="user-body">
                    <div class="tab-content">
                        <div id="information" style="text-align: center; ">
                        	<p><kbd > Estado:</kbd>
                        		@if($match->status == 'Finished')
                        		<span class="bg-warning"> Terminado </span>
                        		@else
                        		<span class="bg-success">En curso</span>
                        		@endif

                        	</p>	
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-md-4" style="align-content: center; ">
            <div class="user-image" style=" position: relative;  z-index: 1; width: 80%;height: 80%; text-align: center;">
                <img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail" style="width: 256px; height: 256px; margin-left: 62px" src="/img/avatar_usr/{{$match->away->avatar}}">   
            </div>
            <div class="user-info-block" style="text-align: center; ">
                <div class="user-heading" style="width: 100%; text-align: center; margin: 10px 0 0;">
                    <h3>{{$match->away->name}}</h3>
                    
                </div>
                
                <div class="user-body">
                    <div class="tab-content">
                        <div id="information">
                            <h4>Resultado</h4>
                            <h1><kbd>
                            	@if($match->status == 'Finished')
                            		{{$match->score_away}}
                            	@else
                            		-
                            	@endif
                            </kbd></h1>
                        </div>
                    </div>
                </div>            
            </div>
        </div>

        
	</div>
	@if($canShowReports)
	<div class="row">
                <div class="col-sm-4 col-md-4">
                </div>
                	<div class="col-md-4">
                		<div class="panel panel-default">
                			<div class="panel-heading"><h4>Match Game Results:</h4>
                			</div>
                			<div class="list-group">
                				<div class="list-group-item">
                					<table width="100%">
                						<tbody>
                							<tr>
                								<td width="40%">
                									<h3 class="list-group-item-heading">
                										Game winner: 
                                                        @if ($match->status == 'Finished')
                                                         <span style="margin-top: 20px">{{$match->winner->name}}</span> 
                                                        @endif
                								</td>
                							</tr>
                						</tbody>
                					</table>
                				</div>
                			</div>
                		</div>
                	</div>	
                	<div class="col-sm-4 col-md-4">
            		</div>  						
                </div>






    @if($match->status == 'Dispute')
	<div class="row well" style="margin-top: 20px;">
		<legend>Resolver Disputa :</legend>
		{!!Form::open(['route' => ['match.resolve', $match->id], 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'formRadio']) !!}
            @for ($i = 0; $i < $match->round->tournament->best_of; $i++)
			<div class="form-group" id="divMatch{{$i + 1}}" style="@if((($match->round->tournament->best_of)/2) < $i ) display: none; @else display: block; @endif">
                <div style="margin-bottom: -9px;" >
				{!!Form::label( 'match'.($i + 1) , 'Partido'.' '.($i + 1).': ' , [ 'class' => 'col-sm-2 control-label' ]) !!}
                </div>
				<div class="col-sm-10" >
                <div onclick="showRadio({{$i + 1 }})">
                <span  >{{$match->local->name }}</span>
                {{ Form::radio('match'.($i + 1), 'local' )}} 
                </div>
                <div onclick="showRadio({{$i + 1 }})">
                <span >{{$match->away->name }}</span>
                {{ Form::radio('match'.($i + 1), 'away' ) }} 
				</div>
                </div>
                </div>
            @endfor
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
		{!!Form::open(['route' => ['match.report', $match->id], 'method' => 'POST', 'class' => 'form-horizontal' , 'id' => 'formRadio']) !!}
			@for ($i = 0; $i < $match->round->tournament->best_of; $i++)
            <div class="form-group" id="divMatch{{$i + 1}}" style="@if((($match->round->tournament->best_of)/2) < $i ) display: none; @else display: block; @endif" >
                <div style="margin-bottom: -9px;" >
                {!!Form::label( 'match'.($i + 1) , 'Partido'.' '.($i + 1).': ' , [ 'class' => 'col-sm-2 control-label' ]) !!}
                </div>
                <div class="col-sm-10">
                <div onclick="showRadio({{$i + 1}})">
                <span >{{$match->local->name }}</span>
                {{ Form::radio('match'.($i + 1), 'local' )}} 
                </div>
                <div onclick="showRadio({{$i + 1}})">
                <span >{{$match->away->name }}</span>
                {{ Form::radio('match'.($i + 1), 'away' )}} 
                </div>
                </div>
                </div>
            @endfor
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

</div>	
@endsection