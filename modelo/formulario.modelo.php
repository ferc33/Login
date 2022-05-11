<?php
/*La conexion es requerida en cada modelo y no en el index.php*/
require_once "conexion.php";

Class ModeloFormularios {

static public function mdlRegistro($tabla, $datos){

	$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre,email,password) VALUES (:nombre, :email, :password)");

	$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
	$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
	$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
	/*Si se ejecuta el statement */
	if($stmt->execute()){

		return "ok";
	}else { /*Si no se ejecuta el statement imprime, la informacion del error*/

		print_r(Conexion::conectar()->errorInfo());
	}
	/*Cierra la conexion*/
	$stmt->close();
	/*vaciamos la variable, ofrece mayor seguridad*/
	$stmt = null;


}

}