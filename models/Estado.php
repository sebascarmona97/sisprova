<?php
	class Estado Extends Eloquent{
		protected $table = 'estado';
		protected $fillable = array('id','nombre');

		public $timestamps = false; 
	}