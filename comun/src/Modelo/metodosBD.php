<?php
    //Funcion para conectar a una instancia de mysql server
    function conectar_mysql($url, $usuario, $password){
    	
		$conexion = mysql_connect($url, $usuario, $password);
		if (!$conexion) {
			die('No pudo conectarse: ' . mysql_error());
		}
		return $conexion;
	}
	
	//Funcion para seleccionar una base de datos
	function seleccionar_bd($base_datos, $conexion){
		
		mysql_select_db($base_datos, $conexion);
	}
    
	//Funcion para seleccionar el juego de caracteres a usar en nuestra en conexion (importante si queremos usar caracteres no latinos)
    function seleccionar_charset($charset, $conexion){
    	mysql_query("SET character_set_results = '$charset', character_set_client = '$charset', character_set_connection = '$charset', character_set_database = '$charset', character_set_server = '$charset'", $conexion);
    }
	
	//Funciones para la base de datos proyecto_fct
	
	function existe_email($email){
		$existe = false;
		$consulta = mysql_query("SELECT email FROM suscritos WHERE email = '$email'");
		while ($fila = mysql_fetch_array($consulta, MYSQL_ASSOC)) {// WHILE PARA RECORRER TODOS LOS VALORES DE LA CONSULTA
			if($fila['email']== $email){
				$existe = true;
			}
		}
		return $existe;
	}
	
	function  suscribir($email){
		$exito = false;
		$consulta = mysql_query("INSERT INTO suscritos(email) VALUES('$email')");
		if($consulta){
			$exito = true;
		}
		return $exito;
	}

	//Funciones
	function getUsuario($email) {
		
		$res = mysql_query("SELECT * FROM usuarios WHERE email='$email'");
		
		if($res) {
			$consulta = mysql_fetch_assoc($res);
			/*while($fila = mysql_fetch_array($res)) {
				$consulta = false;
				$consulta = $fila['nombre'];
			}*/
		} else {
			$consulta = false;
		}
		
		return $consulta;
	}
	
?>