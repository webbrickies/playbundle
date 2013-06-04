<?php

/* CONEXION A LA BASE DE DATOS */

include_once 'metodosBD.php';

$conexion = conectar_mysql("127.0.0.1:3306", "root", "");
if ($conexion) {
	seleccionar_charset("utf8", $conexion);
	seleccionar_bd("playbundle", $conexion);
	//print "Conexion realizada con exito!";
}

/* FIND DE LA CONEXION */

/*---------------------------------------------------------*/

/* PROBAR CODIGO AQUI */

	
	
	$prueba = getUsuario("davidjaya@gmail.es");
	var_dump($prueba);

/* FIN DEL CODIGO DE PRUEBA */


?>