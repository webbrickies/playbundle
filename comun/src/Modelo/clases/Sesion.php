<?php

class Sesion {
	// datos de la sesión
	protected $sid;

	// constructor
	function __construct() {
		// obtener el id de la sesión de la url en lugar de dejar que PHP la coja de la cookie
		if (isset($_GET["sid"])) {
			session_id($_GET["sid"]);
		} else {
			// creamos momentáneamente la sesión, para destruirla y regenerar su id.
			// así nos aseguramos de comenzar una sesión diferente incluso si están permitidas las cookies
			session_start();
			session_destroy();
			session_regenerate_id(true);
		}

		// arrancar una nueva o retomar la sesión anterior
		session_start();
		$this -> sid = session_id();
	}

	// url: Método que genera y devuelve la url conteniendo el sid y,
	// opcionalmente, otros parámetros que se le pueden pasar
	function url($parametros = "") {
		$res = "?sid=" . $this -> sid;
		if ($parametros != "") {
			$res .= "&" . $parametros;
		}
		return $res;
	}

	// getSID: Método para devolver el identificador de sesión
	function getSID() {
		return $this -> sid;
	}

	// get : Método para obtener una variable de sesión
	//       ... devuelve $defecto cuando no está establecida
	function get($nombre, $defecto = NULL) {
		if (isset($_SESSION[$nombre])) {
			return $_SESSION[$nombre];
		} else {
			return $defecto;
		}
	}

	// set : Método para establecer el valor de una variable de sesión
	function set($nombre, $valor) {
		$_SESSION[$nombre] = $valor;
	}
	
	function existeUsuario(){
		
		return isset($_SESSION['usuario'])?true:false;
		
	}
	
}
?>