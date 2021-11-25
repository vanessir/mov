<?php
	require_once('config.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MOVA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, 
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->
        <link rel="stylesheet" type="text/css" href="">
		 <link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    </head>
    
    <body>
        <?php
								if(conexion()){
									echo "Estatus: <span>Conectado</span>";
								}else{
									echo "Estatus: <span>Descanoctado</span>";
									}
							?>
        
        <h1>REGISTRATE</h1>
    <div class=" w3l-login-form">
        <h2>REGISTRO</h2>
        <form class="formulario" name="formulario" id="formulario" action="insertarDatos.php" method="POST">

            <div class=" w3l-form-group">
                <label for="perfil">Nombre de usuario:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="perfil" class="form-control" placeholder="Nombre de usuario" required />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label for="contrasena">Contraseña:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="text" name="contrasena" class="form-control" placeholder="Contraseña" required />
                </div>
            </div>
              <div class=" w3l-form-group">
                <label for="conf_contrasena">Confirmar Contraseña:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="text"  name="conf_contrasena" class="form-control" placeholder="Confirmar Contraseña" required />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label for="nombre">Nombre:</label>
                <div class="group">
						 <i class="bi bi-person-lines-fill"></i>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" required />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label for="apellidos">Apellidos:</label>
                <div class="group">
                     <i class="bi bi-person-lines-fill"></i>
                    <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" required />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label for="correo" >Correo electronico:</label>
                <div class="group">
                   <i class="bi bi-envelope-open-fill"></i>
                    <input type="email" name="correo" class="form-control" placeholder="Correo" required />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label for="telefono">Telefono:</label>
                <div class="group">
                   <i class="bi bi-phone-fill"></i>
						<input type="text" name="telefono" class="form-control" placeholder="Telefono" required" />
                </div>
            </div>
            
            <button type="button" class="submit" id="guardar" title="Guardar" onClick="validacion()">Registrar</button>
        </form>
	
		
		
        <p class=" w3l-register-p">Ya cuento con una cuenta<a href="sesion.php" class="register"> Regresar</a></p>
    </div>
    <footer>
        <p class="copyright-agileinfo"> &copy; Todos los derechos reservados | Realizado por <a href="www.viajes-elite.com">MOVA</a></p>
    </footer>
        
        <script src="js/funcion.js"></script>
    </body>
</html>