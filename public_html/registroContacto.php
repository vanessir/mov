<?php
	//print_r($_POST);
	require_once("config.php");
	date_default_timezone_set('America/Mexico_City');
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$asunto = $_POST['asunto'];
	$fecha = date('Y-m-d');
	$comentarios = $_POST['comentarios'];
	
	$sql = "INSERT INTO contacto(nombre, correo, asunto, fecha, comentarios) 
	VALUES('$nombre', '$correo', '$asunto', '$fecha', '$comentarios')";
	$resultado = mysqli_query(conexion(), $sql);

	echo "<script>
			alert('Ya hemos resibido sus comentarios. Le agradecemos');
			window.location = 'contacto.php';
			</script>";		
	
?>