<?php 
	class UsuarioController extends BaseController { 

		public function mostrar(){
			$usuarios = Usuario::with('tipo_documentos', 'centros', 'tipo_usuarios')->get();
			return View::make('usuarios.listado', array('usuarios' => $usuarios) );
		}

		public function formulario(){
			$tipo_documentos = TipoDocumento::all();
			$centros = Centro::all();
			$tipo_usuarios = TipoUsuario::all();
			$estados = Estado::all();

			return View::make('usuarios.formulario', ['tipo_documentos' => $tipo_documentos, 
				'centros' => $centros, 'tipo_usuarios' => $tipo_usuarios, 'estados' => $estados]);
		}

		public function guardar(){
			
			$datos['nombre'] = Input::get('nombre');
			$datos['apellido'] = Input::get('apellido');
			$datos['idtipo_documento'] = Input::get('idtipo_documento');
			$datos['numero_identidad'] = Input::get('numero_identidad');
			$datos['foto'] = Input::get('foto');
			$datos['huella'] = Input::get('huella');
			$datos['NombreUsuario'] = Input::get('NombreUsuario');

			$password = Input::get('password');
			$datos['password'] = Hash::make($password);

			$datos['idcentro'] = Input::get('idcentro');
			$datos['idtipo_usuario'] = Input::get('idtipo_usuario');
			$datos['idestado'] = Input::get('idestado');
			Usuario::create($datos);

			return Redirect::to('usuarios')->with('mensaje', 'Registro Insertado!');
		}

		public function obtener($id){
			
			$usuarios = Usuario::find($id);
			$tipo_documentos = TipoDocumento::all();
			$centros = Centro::all();
			$tipo_usuarios = TipoUsuario::all();
			$estados = Estado::all();

			return View::make('usuarios.editar', ['usuarios' => $usuarios, 'tipo_documentos' => $tipo_documentos, 
				'centros' => $centros, 'tipo_usuarios' => $tipo_usuarios, 'estados' => $estados]);
		}

		public function actualizar($id){

			$usuarios = Usuario::find($id);

			$usuarios->nombre = Input::get('nombre');
			$usuarios->apellido = Input::get('apellido');
			$usuarios->idtipo_documento = Input::get('idtipo_documento');
			$usuarios->numero_identidad = Input::get('numero_identidad');
			$usuarios->foto = Input::get('foto');
			$usuarios->huella = Input::get('huella');
			$usuarios->NombreUsuario = Input::get('NombreUsuario');

			$password = Input::get('password');
			$usuarios->password = Hash::make($password);

			$usuarios->idcentro = Input::get('idcentro');
			$usuarios->idtipo_usuario = Input::get('idtipo_usuario');
			$usuarios->idestado = Input::get('idestado');

			$usuarios->save();

			return Redirect::to('usuarios')->with('mensaje3', 'Registro Editado!');
		}
	}