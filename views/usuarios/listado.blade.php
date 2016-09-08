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
	<!-- <a href="crearprofesor"> Crear Profesor</a> -->
	<a href="crearusuario" class="btn btn-info btn-lg boton pull-right">
		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
	</a>
	@if(Session::get('mensaje'))
		<div class="alert alert-success" role="alert">
			{{ Session::get('mensaje') }}
		</div>
	@elseif(Session::get('mensaje2'))
		<div class="alert alert-danger" role="alert">
			{{ Session::get('mensaje2') }}
		</div>
	@elseif(Session::get('mensaje3'))
		<div class="alert alert-info" role="alert">
			{{ Session::get('mensaje3') }}
		</div>
	@endif
	<hr>
	<table class="table table-hover">
		<thead>
			<th>FOTO</th>
			<th>NOMBRE</th>
			<th>APELLIDO</th>
			<th>NUMERO IDENTIDAD</th>
			<th>CENTRO</th>
			<th>TIPO USUARIO</th>
			<th>EDITAR</th>
			<th>ELIMINAR</th>
		</thead>

		<tbody>
			@foreach( $usuarios as $usuario)
				<tr>
					<td>{{ $usuario->foto }} </td>
					<td>{{ $usuario->nombre }} </td>
					<td>{{ $usuario->apellido }} </td>
					<td>{{ $usuario['tipo_documentos']['abreviatura'] }}: {{ $usuario->numero_identidad }} </td>
					<td>{{ $usuario['centros']['abreviatura'] }} </td>
					<td>{{ $usuario['tipo_usuarios']['nombre'] }} </td>
					<td> 
						<a href="editarusuario/{{ $usuario->id}}" class="btn btn-info">
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
						</a>
					</td>
					<td> 
						<a href="eliminarusuario/{{ $usuario->id }}" class="btn btn-danger">
							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
						</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop

@section('scripts')
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript">
		$('table').DataTable();

		$('.alert').fadeOut(10000);
	</script>
@stop