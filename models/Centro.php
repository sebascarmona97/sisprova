<?php

class Centro extends Eloquent  {

	protected $table = 'centros';
	protected $fillable = array('nombre', 'abreviatura', 'descripcion', 'idcomplejo');


}
