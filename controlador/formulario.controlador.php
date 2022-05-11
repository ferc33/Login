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
		$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla,null,null);
		return $respuesta;
	}

	/*=============================================
	=         Funcion de ingreso          =
	=============================================*/
	public function ctrIngreso(){

		if(isset($_POST["ingresoEmail"])){

			$tabla ="registros";
			$item ="email";
			$valor =$_POST['ingresoEmail'];

			$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla,$item,$valor);

			if($respuesta["email"] == $_POST['ingresoEmail'] && $respuesta["password"]== $_POST['ingresoPassword']){
					//En las variables $_POST voy a poner las variables que se indican en ingreso.php de la vista
				
				echo '<script>
				if(window.history.replaceState){
					window.history.replaceState(null, null, window.location.href);
				}   

				</script>';
				echo '<div class="alert alert-success">A ingresado al sistema </div>';
			}else {
				echo '<div class="alert alert-danger">No ha ingresado</div>';
				echo '<script>
				if(window.history.replaceState){
					window.history.replaceState(null, null, window.location.href);
				}   

				</script>';
			}
				 	//echo '<pre>'; print_r($respuesta); echo '</pre>';
		}

	}

}


