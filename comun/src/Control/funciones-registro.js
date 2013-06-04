/*
 * Este codigo javascript pertenece al CONTROL por lo tanto no deberia de haber insercion de codigo html
 * ni animaciones o codigo cuyo objetivo sea la decoracion de la pagina web.
 * Este script debe de encargarse de la manipulacion de datos entre la VISTA y el MODELO y cualquier
 * algoritmo complejo de tratamiento de los datos de la aplicacion! 
 */

var resultado_ajax = false;

function control_suscribir(email){
	
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	
    if(re.test(email)){

		$.getJSON("../Modelo/funciones_ajax.php", {
			'funcion' : 'modelo_suscribir',
			'email' : email
		}, function(data, status) {
			if (status == "success") {
				resultado_ajax = data;
			}
		});
	
	} else {
		
		alert("Control dice: El email introducido no es valido!");
		
	}
	
}

