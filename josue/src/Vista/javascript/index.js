/*
 * Este codigo javascript pertenece a la VISTA por lo tanto no deberia de haber algoritmos complejos
 * unicamente getters & setters para los elementos html que necesiten manipular datos!
 * Tambien cualquier codigo cuyo objetivo sea meramente decorativo como animaciones o eventos jquery.
 */

$(document).ready(function(){
	
	$("#carga_ajax").hide();
	
	//MUESTRA UN MENSAJE DE CARGANDO MIENTRAS SE EJECUTA AJAX
	$(document).ajaxStart(function(){
		$("#carga_ajax").fadeIn(1000);
	});
	
	$(document).ajaxStop(function(){
		$("#carga_ajax").fadeOut(1000);
	});
	
});
	


function vista_suscribir(){
	var email = $("#email").val();
	/*
	 * llamar a metodo de CONTROL pasandole el email, para que se encargue de comprobar que es un email valido 
	 * y en caso de que lo sea dicho metodo llame a otro metodo de MODELO para guardarlo en la base de datos y
	 * modificar lo que sea necesario.
	 * 
	 */
	control_suscribir(email);
}
