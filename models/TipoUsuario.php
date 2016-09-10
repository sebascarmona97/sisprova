<?php

class TipoUsuario Extends Eloquent{
	protected $table = 'tipo_usuario';
	protected $fillable = array('id ','nombre','descripcion');

	public $timestamps = false;

}