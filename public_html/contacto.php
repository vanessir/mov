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
    <link href="css/style.css" rel="stylesheet" type="text/css" />
	 <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
    <link href="css/fontawesome-all.css" rel="stylesheet" />
   
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="">
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
         <nav>
            <ul>
                 <li ><a href="index.php" title="Home">MOVA</a> </li>
				<li><a href="acerca.php" title="Acerca">Acerca</a></li>
				<li><a href="maps.php" title="Mapa">Búscanos</a></li>
                <li ><a href="promociones.php" title="Promociones">Promociones</a></li>
                <li><a href="galeria1.php" title="Paquetes">Paquetes</a></li>
                <li><a href="galeria2.php" title="Videos">Videos</a></li>
                <li><a href="cotizaciones.php" title="Cotizaciones">Cotizaciones</a></li>
                <li class="active"><a href="contacto.php" title="Contacto">Contacto</a></li>
                <li ><a href="sesion.php" title="Iniciar sesion">Iniciar sesion</a></li>
				
            </ul>
        </nav>
        
        <h1>ÁREA DE CONTACTO</h1>
			
    <div class=" w3l-login-form">
        <h2>Contáctanos</h2>
        <form class="formulario" name="formulario" id="formulario" action="registroContacto.php" method="post">
			<div calss="grup">
				 <h2>Datos del contacto:</h2>
				  <label style="font-family:serif;">Correo:    hmorales@utleon.edu.mx</label><br>
				  <label style="font-family:serif;">Telefono:  477-123-5645.</label><br>
				  <a>Siguenos en redes sociales: <br>
				  <i class="bi bi-facebook" title="facebook" style="font-size:50px;color:blue;" ></i>
				  <i class="bi bi-twitter" title="twitter" style="font-size:50px;color:#08d0ff; margin-left:20px;margin-right:20px;" ></i>
				  <i class="bi bi-instagram" title="instagram" style="font-size:50px;color:#ffa180;" ></i>
				  </a>
			</div>
            <div class=" w3l-form-group">
                <label>Nombre:</label>
                <div class="group">
                    <i class="fas fa-user" ></i>
                    <input name="nombre" type="text" class="form-control" placeholder="Nombre(completo)" required />
                </div>
				
            <div class=" w3l-form-group">
                <label>Correo:</label>
                <div class="group">
                   <i class="bi bi-envelope-fill"></i>
                    <input name="correo" type="email" class="form-control" placeholder="Email" required />
                </div>
            </div>
			<div class=" w3l-form-group">
                <label>Asunto:</label>
                <div class="group">
                    <i class="bi bi-puzzle-fill"></i>
					<select name="asunto" required >
						<option value="" >Selecciona</option>
						<option value="Quejas">Quejas</option>
						<option value="Sujerencias">Sujerencias</option>
					</select>
                   
                </div>
            </div>
			<div>
                <label>Comentarios:</label>
                <div class="group">
                   
					
					<textarea  type="text" name="comentarios" class="form-control"  rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 118px;" placeholder="Escribe tus comentarios"></textarea>
                   
                </div>
            </div>
            
            
            <button type="button" class="submit" id="enviar" title="Enviar" onClick="validacion1()">Enviar</button>
        </form>
       
    </div>
    <footer>
        <p class="copyright-agileinfo"> &copy; Todos los derechos reservados | Realizado por <a href="www.viajes-elite.com">MOVA</a></p>
    </footer>
       
        <script src="js/funcion.js"></script>
    </body>
</html>