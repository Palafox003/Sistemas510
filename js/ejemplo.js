$(document).on("ready",inicio);
function inicio(){
	$("#enviar").on("click",datos);
}
function datos(){
	var nombre=$("#nombre").val();
	var correo=$("#correo").val();
	var telefono=$("#telefono").val();

	$("#resultado").html("Hola "+ nombre + "<br> Tu correo es: "+ correo + "<br> Tu telefono es: "+ telefono);
	return false;
}