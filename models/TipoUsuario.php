<?php

class TipoUsuario extends Eloquent  {

	protected $table = 'tipo_usuarios';
	protected $fillable = array('nombre', 'descripcion');


}
