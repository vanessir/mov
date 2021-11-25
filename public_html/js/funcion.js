function limpiar(){
	document.formulario.reset();
	document.formulario.nombre.focus();
}
function validacion(){
	var form = document.formulario;
	if(form.perfil.value == 0){
		form.perfil.value = "";
		form.perfil.focus();
		alert("El campo usuario no contiene caracteres o está vacio");
		return false;
	}
	if(form.contrasena.value == 0){
		form.contrasena.value = "";
		form.contrasena.focus();
		alert("El campo contraseña no contiene caracteres o está vacio");
		return false;
	}
	if(form.conf_contrasena.value == 0){
		form.conf_contrasena.value = "";
		form.conf_contrasena.focus();
		alert("El campo confirmar contraseña no contiene caracteres o está vacio");
		return false;
	}
	if(form.nombre.value == 0){
		form.nombre.value = "";
		form.nombre.focus();
		alert("El campo nombre no contiene caracteres o está vacio");
		return false;
	}
	if(form.apellidos.value == 0){
		form.apellidos.value = "";
		form.apellidos.focus();
		alert("El campo napellidos no contiene caracteres o está vacio");
		return false;
	}
	
	if(form.correo.value == 0){
		form.correo.value = "";
		form.correo.focus();
		alert("El campo correo no contiene caracteres o está vacio");
		return false;
	}
	if(form.telefono.value == 0){
		form.telefono.value = "";
		form.telefono.focus();
		alert("El campo telefono no contiene caracteres o está vacio");
		return false;
	}
	
	form.submit();
}
function validacion1(){
	var form = document.formulario;
	if(form.nombre.value == 0){
		form.nombre.value = "";
		form.nombre.focus();
		alert("El campo nombre no contiene caracteres o está vacio");
		return false;
	}
	if(form.correo.value == 0){
		form.correo.value = "";
		form.correo.focus();
		alert("El campo correo no contiene caracteres o está vacio");
		return false;
	}
	if(form.asunto.value == 0){
		form.asunto.value = "";
		form.asunto.focus();
		alert("No se ha seleccionado ningun asunto");
		return false;
	}
	
	if(form.comentarios.value == 0){
		form.comentarios.value = "";
		form.comentarios.focus();
		alert("El campo comentarios no contiene caracteres o está vacio");
		return false;
	}
	
	
	form.submit();
}
