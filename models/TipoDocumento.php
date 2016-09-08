<?php

class TipoDocumento extends Eloquent  {

	protected $table = 'tipo_documentos';
	protected $fillable = array('descripcion', 'abreviatura');


}
