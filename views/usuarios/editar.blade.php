@extends('home')

@section('styles')
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css">
	<style type="text/css">
	.boton{
		position: fixed;
		right: 4px;
    	top: 267px;
    	border-radius: 50px;
		box-shadow: 2px 2px 5px #999;

	}
	.boton span{
		
	}
	</style>
@stop

@section('contenido')
	<h1>Editar Materias</h1>
	<hr>
	<form method="POST" action="{{ url() }}/editarusuario/{{ $usuarios->id }}">
		<div class="form-group">

			<div class="col-md-6">
					<label class="control-label">Foto: </label><br>
					<input class="form-control" name="foto" value="{{ $usuarios->huella }}" required>

					<br>

					<label class="control-label">Nombre: </label><br>
					<input class="form-control" name="nombre" value="{{ $usuarios->nombre }}" required>
				
					<br>

					<label class="control-label">Apellido: </label><br>
					<input class="form-control" name="apellido" value="{{ $usuarios->apellido }}" required>
				
					<br>
			
					<label class="control-label">Tipo documento: </label><br>
					<select class="form-control" name="idtipo_documento">
						@foreach($tipo_documentos as $tipo_documento)
							@if($tipo_documento->id == $usuarios->idtipo_documento)
								<option value="{{ $tipo_documento->id }}" selected="">{{ $tipo_documento->abreviatura }}</option>
							@else
							<option value="{{ $tipo_documento->id }}">{{ $tipo_documento->abreviatura }}</option>
							@endif
						@endforeach
					</select>

					<br>

					<label class="control-label">Numero de identidad: </label><br>
					<input class="form-control" name="numero_identidad" type="number" value="{{ $usuarios->numero_identidad }}" required>
				
					<br>

					<label class="control-label">Huella: </label><br>
					<input class="form-control" name="huella" value="{{ $usuarios->huella }}" required>
			</div>

			<div class="col-md-6">

					<label class="control-label">Nombre usuario: </label><br>
					<input class="form-control" name="NombreUsuario" value="{{ $usuarios->NombreUsuario }}" required>
				
					<br>

					<label class="control-label">Contraseña: </label><br>
					<input class="form-control" name="password" required>
				
					<br>

					<label class="control-label">Centro: </label><br>
					<select class="form-control" name="idcentro">
						@foreach($centros as $centro)
							@if($centro->id == $usuarios->centro)
								<option value="{{ $centro->id }}" selected="">{{ $centro->abreviatura }}</option>
							@else
							<option value="{{ $centro->id }}">{{ $centro->abreviatura }}</option>
							@endif
						@endforeach
					</select>

					<br>

					<label class="control-label">Tipo usuario: </label><br>
						<select class="form-control" name="idtipo_usuario">
							@foreach($tipo_usuarios as $tipo_usuario)
								@if($tipo_usuario->id == $usuarios->idtipo_usuario)
									<option value="{{ $tipo_usuario->id }}" selected="">{{ $tipo_usuario->nombre }}</option>
								@else
								<option value="{{ $tipo_usuario->id }}">{{ $tipo_usuario->nombre }}</option>
								@endif
							@endforeach
						</select>

					<br>

					<label class="control-label">Estado: </label><br>
						<select class="form-control" name="idestado">
							@foreach($estados as $estado)
								@if($estado->id == $usuarios->estado)
									<option value="{{ $estado->id }}" selected="">{{ $estado->nombre }}</option>
								@else
								<option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
								@endif
							@endforeach
						</select>
			</div>	
		</div>
		<br><br>
		<!-- <input type="submit" class="btn btn-success" value="Editar"> -->
		<button type="submit" class="btn btn-success btn-lg boton">
			<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
		</button>
	</form>
@stop