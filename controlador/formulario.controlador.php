<?php 

class ControladorFormularios {

	/*=============================================
	=   Meotod para registrar los usuarios con enviar
	=============================================*/
	
	static public function ctrRegistro (){
		if(isset($_POST["registroNombre"])){
			
			$tabla = "registros";
			/*  datos son guardados en un array*/
			$datos = array("nombre" => $_POST['registroNombre'],
									"email" => $_POST['registroEmail'],
									"password" => $_POST['registroPassword']);

			 $respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);

			 return $respuesta;
		}
	}
	/*=============================================
	=   Metodo para seleccionar 
	=============================================*/
	static public function ctrSeleccionarRegistros(){
		$tabla = "registros"; // Save to table name!
		$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla);
		return $respuesta;
	}

}





