<?php

Class Conexion {

static public function conectar() {
	/*=============================================
	=           Conexion a la base de datos   =
	=============================================*/
		$link = new PDO("mysql:host=localhost;dbname=curso-php", "root","");
		
		$link -> exec("set names utf8");

		return $link;
	

}

}