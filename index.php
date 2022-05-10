<?php

/*#EL INDEX: En el mostraremos la salida de las vistas al usuario
y tambien a traves de el enviaremos la distintas acciones que 
el usuario envie al controlador*/


require_once "controlador/plantilla.controlador.php";
require_once "controlador/formulario.controlador.php";

require_once "modelo/conexion.php";

$conexion = Conexion::conectar();



$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();
