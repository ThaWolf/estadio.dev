




<!-- Modal -->
<div class="modal fade" id="agregarcuenta" tabindex="-1" role="dialog" aria-labelledby="Agregarcuenta">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	{!!Form::open(['route' => ['user.addAccount', $user->id], 'method' => 'POST', 'class' => 'form-horizontal']) !!}
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar cuenta</h4>
      </div>
      <div class="modal-body">
        <div class="row well" style="margin-top: 20px;">
				<legend>Agregar Cuenta:</legend>
				
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
		            
		        
			</div>
      </div>
      <div class="modal-footer">
        <div class="col-sm-offset-2">
						{!!Form::submit( 'Agregar', ['class' => 'btn btn-primary']) !!}
					</div>
        {!!Form::close() !!}
      </div>
    </div>
  </div>
</div>