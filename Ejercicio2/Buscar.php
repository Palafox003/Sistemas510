<!DOCTYPE html>
<html>
<head>
	<title>Buscar</title>
</head>
<body>
	<h2>BUSCAR</h2>
	<form method="post" action="">
		<label>Buscar:</label>
		<input type="text" name="buscar">
		<input type="submit" name="boton" value="Buscar">
	</form>
<?php 
if(@$_POST["boton"]){
	require_once"classDB/conDB.php";
		$buscar=$_POST["buscar"];
		$con=new Conectar();
			if($_POST["buscar"]){
				$result=$con->buscar("*","usuarios"," nombre LIKE '%$buscar%'");
			}else{
				$result=$con->buscar("*","usuarios","1");	
			}
			 	$num_result=$result->num_rows;

			echo "Resultados encontrados: $num_result <br>"; 		
}
?>
</body>
</html>