<?php
	//print_r($_POST);
	require_once("config.php");
	date_default_timezone_set('America/Mexico_City');
	$perfil = $_POST['perfil'];
	$contrasena = $_POST['contrasena'];
	$conf_contrasena = $_POST['conf_contrasena'];
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$correo = $_POST['correo'];
	$telefono = $_POST['telefono'];
	$fecha = date('Y-m-a');
	$hora = date('h:i:s');
	
	$sql = "INSERT INTO usuarios(perfil, contrasena, conf_contrasena, nombre, apellidos, correo, telefono, fecha, hora) 
	VALUES('$perfil', '$contrasena', '$conf_contrasena', '$nombre', '$apellidos', '$correo', '$telefono', '$fecha', '$hora')";
	$resultado = mysqli_query(conexion(), $sql);

	echo "<script>
			alert('El usuario ha sido registrado');
			window.location = 'registro.php';
			</script>";		
	
?>