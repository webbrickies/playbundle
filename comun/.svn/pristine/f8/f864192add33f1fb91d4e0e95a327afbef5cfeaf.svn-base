<?php
    
// INCLUDES

//metodos para las bases de datos
include_once('metodosBD.php');


//---- fin includes 

// CONEXION A MYSQL

$conexion = conectar_mysql("127.0.0.1:3306", "root", "");
if($conexion){
	seleccionar_charset("utf8", $conexion);
	seleccionar_bd("proyecto_fct", $conexion);
	//print "Conexion realizada con exito!";
} else {
	print "Error al conectar a mysql!";
}

//---- fin conexion mysql

// SWITCH al que javascript accede mediante ajax para comunicar con el servidor asincronamente
// Los datos son enviados en formato json.

if(isset($_GET['funcion'])){
	
	$datos = array(
		'valor' => false,
		'mensaje' => ''
	);
	
	$funcion = $_GET['funcion'];
	
	switch ($funcion) {
		
		case 'modelo_suscribir':
			
			$email = "";
			if(isset($_GET['email'])){
				$email = $_GET['email'];
				if(!existe_email($email)){
					if(suscribir($email)){
						$datos['valor'] = true;
						$datos['mensaje'] = 'Email guardado correctamente :)';
					} else {
						$datos['mensaje'] = 'El email no pudo ser guardado...';
					}
				} else {
					$datos['mensaje'] = 'El email ya se encuentra en la base de datos!';
				}
			}
			
			break;
		
		

	}
	
	echo json_encode($datos);
}

//---- fin del switch ajax













    
    
    
?>