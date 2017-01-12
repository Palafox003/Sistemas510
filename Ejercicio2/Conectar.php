<?php  
require_once"conDB.php";
	$agregar=$_POST["agregar"];
	$nombre=$_POST["nombre"];
	$correo=$_POST["correo"];
	$telefono=$_POST["telefono"];
	$direccion=$_POST["direccion"];

	$con=new Conectar();

	$con->insertar("$agregar","null,'$nombre','$correo','$telefono','$direccion'");

?>