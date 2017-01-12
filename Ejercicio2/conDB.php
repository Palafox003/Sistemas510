<?php 
class Conectar
{
	private $user="root";
	private $db="Ejercicio2";
	private $host="localhost";
	private $pass="";
	private $con;
	
	function __construct()
	{
		$this->conexion();
	}

	private function conexion(){
		$con2=new mysqli($this->host,$this->user,$this->pass,$this->db);
			if(mysqli_connect_errno()){
				echo "Error de conexion.";
			}else{
				echo "Conectado.";
				$this->con=$con2;
			}
	}
	function insertar($tabla,$valores){
		$consulta="insert into $tabla values(".$valores.")";
			$result=$this->con->query($consulta);
				if($result){
					echo "Datos insertados.";
				}else{
					echo "Error al insertar.";
				}
	}

}
?>