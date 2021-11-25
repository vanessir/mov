<?php
	function conexion(){
		$servidor = 'localhost';
		$usuario = 'root';
		$password = '';
		$bd = 'mova';
		
		$con = mysqli_connect($servidor, $usuario, $password, $bd);
		/*if($con){
			echo 'Conectado';
		}else{
		echo 'Desconectado';
		}*/
	return $con;
	}
	//conexion();
?>