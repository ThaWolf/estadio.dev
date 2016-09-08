<!-- Modal -->
<div class="modal fade" id="resultados" tabindex="-1" role="dialog" aria-labelledby="Resultados">
	<div class="modal-dialog" role="document">
		<div class="modal-content">


			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-md-4" style="align-content: center; ">
						<div class="user-image" style=" position: relative; ;  z-index: 1; width: 80%;height: 80%; text-align: center;">
							<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail"  src="/img/torneos/placehodor.png">
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
						<div style="min-width:100px; min-height: 400px;margin-top: 10px; background: url({{ asset('img/torneos/versus.png')}}) no-repeat center; background-size:100% 100%;">
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
							<img alt="64x64" data-src="/holder.js/64x64" class="media-object img-thumbnail"  src="/img/torneos/placehodor.png">
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
													</h3>
													<span class="bg-success"><h3>{{$report->winner->name}}</h3>
													</span>
													
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

					</div>	

				</div>
			</div>
		</div>