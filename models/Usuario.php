<?php


class Usuario extends Eloquent{

	
	protected $table = 'usuarios';

	protected $fillable = array('nombre', 'apellido', 'idtipo_documento', 'numero_identidad', 'foto', 'huella',
	 'NombreUsuario', 'password', 'idcentro', 'idtipo_usuario', 'idestado');

	public $timestamps = false; 

	public function tipo_usuarios(){
		return $this->belongsTo('TipoUsuario','idtipo_usuario');
	}

	public function tipo_documentos(){
		return $this->belongsTo('TipoDocumento','idtipo_documento');
	}

	public function centros(){
		return $this->belongsTo('Centro','idcentro');
	}

	public function estados(){
		return $this->belongsTo('Estado','idestado');
	}

}
