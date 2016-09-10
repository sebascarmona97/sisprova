<?php

class Tipodocumento extends Eloquent{
		protected $table = 'tipo_documento';
		protected $fillable = array('id','descripcion','abreviatura');

		public $timestamps = false;
}