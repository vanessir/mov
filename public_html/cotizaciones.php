<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        
		 <link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    </head>
    
    <body>
             <ul>
                <li ><a href="index.php" title="Home">MOVA</a> </li>
				<li><a href="acerca.php" title="Acerca">Acerca</a></li>
				<li ><a href="maps.php" title="Mapa">Búscanos</a></li>
                <li ><a href="promociones.php" title="Promociones">Promociones</a></li>
                <li ><a href="galeria1.php" title="Paquetes">Paquetes</a></li>
                <li ><a href="galeria2.php" title="Videos">Videos</a></li>
                <li class="active"><a href="cotizaciones.php" title="Cotizaciones">Cotizaciones</a></li>
                <li ><a href="contacto.php" title="Contacto">Contacto</a></li>
                <li ><a href="sesion.php" title="Iniciar sesion">Iniciar sesion</a></li>
            </ul>
        </nav>
        <section>
            <article>
               
                                      
        <div class="nav2"> 
						<br><br>		
                        <h1>Imagenes</h1>
                        <section class="titular">
                                <a href="#Img_1"><img src="img/galeria2/cancunmexico.jpg" alt="Cancún, México" title="Cancún, México"></a>
                                <a href="#Img_2"><img src="img/galeria2/cartagenadeindiascolombia.jpg" alt="Cartagena de Indias, Colombia" title="Cartagena de Indias, Colombia"></a>
                                <a href="#Img_3"><img src="img/galeria2/loscabosbajacalifornia.jpg" alt="Los cabos, Baja California" title="Los cabos, Baja California"></a>
                                <a href="#Img_4"><img src="img/galeria2/machupichuperu.jpg" alt="Machu Pichu, Perú" title="Machu Pichu, Perú"></a>
                                <a href="#Img_5"><img src="img/galeria2/mendozaargentina.jpg" alt="Mendoza, Argentina" title="Mendoza, Argentina"></a>
                                <a href="#Img_6"><img src="img/galeria2/puntacanarepublicadominicana.jpg" alt="Punta Cana, Republica Dominicana" title="Punta Cana, Republica Dominicana"></a>
                            
                        </section>
                       
                        
                                       
                        <section class="imagenes">
                            <div id="Img_1">
                                <img id="1" name="cancun" class="imagenes2" title="Cancún, México" src="img/galeria2/cancunmexico.jpg" >
                                <br>
                                <label class="l1">Precio: <input id="cancun" type="number" value="1000" disabled></label>
								<button id="button" class="btncot" >Cotizar</button>
								
                            </div>
                            <div id="Img_2">
                                <img  id="2" class="imagenes2" title="Cartagena de Indias, Colombia" src="img/galeria2/cartagenadeindiascolombia.jpg">
                                <br>
                                <label class="l2">Precio: <input id="cartagena" type="number" value="3540" disabled></label>
                               <button id="button1" class="btncot" >Cotizar</button>
                            </div>  
                            <div id="Img_3">
                                <img  id="3" class="imagenes2" title="Los cabos, Baja California" src="img/galeria2/loscabosbajacalifornia.jpg">
                                <br>
                                <label class="l3">Precio: <input id="cabos" type="number" value="2500" disabled></label>
                               <button id="button2" class="btncot" >Cotizar</button>
                            </div>
                            <div id="Img_4">
                                <img id="4" class="imagenes2" title="Machu Pichu, Perú" src="img/galeria2/machupichuperu.jpg">
                                <br>
                                <label class="l4">Precio: <input id="machu" type="number" value="3200" disabled></label>
                                <button id="button3" class="btncot" >Cotizar</button>
                            </div>
                            <div id="Img_5">
                                <img id="5" class="imagenes2" title="Mendoza, Argentina" src="img/galeria2/mendozaargentina.jpg">
                                <br>
                                <label class="l5">Precio: <input id="mend" type="number" value="5000" disabled></label>
                                <button id="button4" class="btncot" >Cotizar</button>
                            </div>
                            <div id="Img_6">
                                <img id="6" class="imagenes2" title="Punta Cana, Republica Dominicana" src="img/galeria2/puntacanarepublicadominicana.jpg">
                                <br>
                                <label class="l6">Precio: <input id="cana" type="number" value="5500" disabled></label>
                                <button id="button5" class="btncot" >Cotizar</button>
                            </div>
							 
                              
                            
                
                        
                        
                    </div> 
                            
                        </section>
                        <section class=" w3l-coti-form" id="form">
										
										<form action="#" method="POST">

											<div class=" w3l-form-group">
												<label>Inicio:</label>
												<div class="group">
													<i class="fas fa-user"></i>
													<input id="FI" type="date" class="form-control" required="required" min="2021-11-21" max="2022-12-31"/>
												</div>
											</div>
											<div class=" w3l-form-group">
												<label>Fin:</label>
												<div class="group">
													<i class="fas fa-user"></i>
													<input id="FF" type="date" class="form-control" required="required" min="2021-11-21" max="2022-12-31"/>
												</div>
											</div>
											<div class=" w3l-form-group">
												<label>Hozpedaje y vuelo:</label>
												<div class="group">
													<i class="fas fa-user"></i>
													<input id="si" type="radio" name="Hozpedaje" value="si" checked>Si
													<input id="no" type="radio" name="Hozpedaje" value="no" checked>No
												</div>
											</div>
											<div class=" w3l-form-group">
												<label>Número de personas:</label>
												<div class="group">
													<i class="fas fa-user"></i>
													<input id="personas" type="number" class="form-control" placeholder="Número de personas" required="required" min="1" max="15" value="0"/>
												</div>
											</div>
											<div class=" w3l-form-group">
												<label>Niños(-12):</label>
												<div class="group">
													<i class="fas fa-user"></i>
													<input id="ninos"	 type="number" class="form-control" placeholder="Número de niños" required="required"min="0" max="6" value="0"/>	
												</div>
											</div>
											
											
										</form>
										
							</section>
							
                         
                
               
        <script src="js/script3.js"></script>
    </body>
</html>
