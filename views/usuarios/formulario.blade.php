@extends('home')

@section('styles')
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css">
@stop

@section('contenido')
	<h1>Crear Usuario</h1>
	<hr>
	<form method="POST" action="usuarios">
		<div class="form-group">

			<div class="col-md-6">
					<label class="control-label">Foto: </label><br>
					<input class="form-control" name="foto" required>

					<br>

					<label class="control-label">Nombre: </label><br>
					<input class="form-control" name="nombre" placeholder="Digite el nombre del usuario*" required>
				
					<br>

					<label class="control-label">Apellido: </label><br>
					<input class="form-control" name="apellido" placeholder="Digite el apellido del usuario*" required>
				
					<br>
			
					<label class="control-label">Tipo documento: </label><br>
					<select class="form-control" name="idtipo_documento">
						@foreach($tipo_documentos as $tipo_documento)
							<option value="{{ $tipo_documento->id }}">{{ $tipo_documento->abreviatura }}</option>
						@endforeach
					</select>

					<br>

					<label class="control-label">Numero de identidad: </label><br>
					<input class="form-control" name="numero_identidad" type="number" 
					placeholder="Digite el numero de identidad del usuario*" required>
				
					<br>

					<label class="control-label">Huella: </label><br>
					<input class="form-control" name="huella" required>
			</div>

			<div class="col-md-6">

				<label class="control-label">Nombre usuario: </label><br>
				<input class="form-control" name="NombreUsuario" 
				placeholder="Digite un nombreUsuario*" required>
			
				<br>

				<label class="control-label">Contraseña: </label><br>
				<input class="form-control" name="password" 
				placeholder="Digite una contraseña*" required>
			
				<br>

				<label class="control-label">Centro: </label><br>
					<select class="form-control" name="idcentro">
						@foreach($centros as $centro)
							<option value="{{ $centro->id }}">{{ $centro->abreviatura }}</option>
						@endforeach
					</select>

				<br>

				<label class="control-label">Tipo usuario: </label><br>
					<select class="form-control" name="idtipo_usuario">
						@foreach($tipo_usuarios as $tipo_usuario)
							<option value="{{ $tipo_usuario->id }}">{{ $tipo_usuario->nombre }}</option>
						@endforeach
					</select>

				<br>

				<label class="control-label">Estado: </label><br>
					<select class="form-control" name="idestado">
						@foreach($estados as $estados)
							<option value="{{ $estados->id }}">{{ $estados->nombre }}</option>
						@endforeach
					</select>
			</div>		

		</div>
		<!-- <input type="submit" class="btn btn-success" value="Crear"> -->
		<button type="submit" class="btn btn-success btn-lg pull-right boton">
			<span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> 
		</button>
	</form>
 @stop