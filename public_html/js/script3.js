
  

 function cotizar(){
  
 var fechaI = document.getElementById("FI").value;
 var fechaF = document.getElementById("FF").value;
 var Np = document.getElementById("personas").value;
 var Nn = document.getElementById("ninos").value;

 
 //btener un Número de dias a partir de dos fechas
var dia1 = new Date(fechaI);
var dia2 = new Date(fechaF);
 let difference = Math.abs(dia1 - dia2);
     days = (difference / (1000 * 3600 * 24));

if(document.getElementById("button")){var destino = "Cancún, México";
    var d1 = (document.getElementById("cancun").value * Np);}
	

 
        if(document.getElementById("si").checked){
          var cot = document.getElementById("si").value;
		  var cost = days * 1000;
		  var tot = cost+d1;
		  }	
      
        if(document.getElementById("no").checked){
          var cot = document.getElementById("no").value;}
        if(fechaI && fechaF && (Np > 0)){
            alert("               Presupuesto Total:" + tot +
                    "\nPrecio:" + d1 +
                    "\nDestino:"+ destino +
                    "\nHozpedaje y vuelo:" + "" + cot + ": $" + cost +
                    "\nFecha de inicio:" + "" + fechaI +
                    "\nFecha final:" + " " + fechaF +
                    "\nNúmero de dias: " + days +
                    "\nNúmero de personas:" + " " + Np +
                    "\nNúmero de niños:" + " " + Nn); 
       }

           else{ alert("No se ha establecido alguno de los Datos requeridos." + 
                       "\nPorfavor intentar de nuevo.");
            }
          
      };
function cotizar1(){
  
 var fechaI = document.getElementById("FI").value;
 var fechaF = document.getElementById("FF").value;
 var Np = document.getElementById("personas").value;
 var Nn = document.getElementById("ninos").value;

 
 //btener un Número de dias a partir de dos fechas
var dia1 = new Date(fechaI);
var dia2 = new Date(fechaF);
 let difference = Math.abs(dia1 - dia2);
     days = (difference / (1000 * 3600 * 24));

if(document.getElementById("button")){var destino = "Cartagena de Indias, Colombia";
    var d1 = (document.getElementById("cartagena").value * Np);}


 
        if(document.getElementById("si").checked){
          var cot = document.getElementById("si").value;
		  var cost = days * 1000;
		  var tot = cost+d1;
		  }	
      
        if(document.getElementById("no").checked){
          var cot = document.getElementById("no").value;}
        if(fechaI && fechaF && (Np > 0)){
            alert("               Presupuesto Total:" + tot +
                    "\nPrecio:" + d1 +
                    "\nDestino:"+ destino +
                    "\nHozpedaje y vuelo:" + "" + cot + ": $" + cost +
                    "\nFecha de inicio:" + "" + fechaI +
                    "\nFecha final:" + " " + fechaF +
                    "\nNúmero de dias: " + days +
                    "\nNúmero de personas:" + " " + Np +
                    "\nNúmero de niños:" + " " + Nn); 
       }

           else{ alert("No se ha establecido alguno de los Datos requeridos." + 
                       "\nPorfavor intentar de nuevo.");
            }
          
      };         
function cotizar2(){
  
 var fechaI = document.getElementById("FI").value;
 var fechaF = document.getElementById("FF").value;
 var Np = document.getElementById("personas").value;
 var Nn = document.getElementById("ninos").value;

 
 //btener un Número de dias a partir de dos fechas
var dia1 = new Date(fechaI);
var dia2 = new Date(fechaF);
 let difference = Math.abs(dia1 - dia2);
     days = (difference / (1000 * 3600 * 24));

if(document.getElementById("button")){var destino = "Los cabos, Baja California";
    var d1 = (document.getElementById("cabos").value * Np);}


 
        if(document.getElementById("si").checked){
          var cot = document.getElementById("si").value;
		  var cost = days * 1000;
		  var tot = cost+d1;
		  }	
      
        if(document.getElementById("no").checked){
          var cot = document.getElementById("no").value;}
        if(fechaI && fechaF && (Np > 0)){
            alert("               Presupuesto Total:" + tot +
                    "\nPrecio:" + d1 +
                    "\nDestino:"+ destino +
                    "\nHozpedaje y vuelo:" + "" + cot + ": $" + cost +
                    "\nFecha de inicio:" + "" + fechaI +
                    "\nFecha final:" + " " + fechaF +
                    "\nNúmero de dias: " + days +
                    "\nNúmero de personas:" + " " + Np +
                    "\nNúmero de niños:" + " " + Nn); 
       }
           else{ alert("No se ha establecido alguno de los Datos requeridos." + 
                       "\nPorfavor intentar de nuevo.");
            }
          
      };         
function cotizar3(){
  
 var fechaI = document.getElementById("FI").value;
 var fechaF = document.getElementById("FF").value;
 var Np = document.getElementById("personas").value;
 var Nn = document.getElementById("ninos").value;

 
 //btener un Número de dias a partir de dos fechas
var dia1 = new Date(fechaI);
var dia2 = new Date(fechaF);
 let difference = Math.abs(dia1 - dia2);
     days = (difference / (1000 * 3600 * 24));

if(document.getElementById("button")){var destino = "Machu Pichu, Perú";
    var d1 = (document.getElementById("machu").value * Np);}


 
        if(document.getElementById("si").checked){
          var cot = document.getElementById("si").value;
		  var cost = days * 1000;
		  var tot = cost+d1;
		  }	
      
        if(document.getElementById("no").checked){
          var cot = document.getElementById("no").value;}
        if(fechaI && fechaF && (Np > 0)){
            alert("               Presupuesto Total:" + tot +
                    "\nPrecio:" + d1 +
                    "\nDestino:"+ destino +
                    "\nHozpedaje y vuelo:" + "" + cot + ": $" + cost +
                    "\nFecha de inicio:" + "" + fechaI +
                    "\nFecha final:" + " " + fechaF +
                    "\nNúmero de dias: " + days +
                    "\nNúmero de personas:" + " " + Np +
                    "\nNúmero de niños:" + " " + Nn); 
       }

           else{ alert("No se ha establecido alguno de los Datos requeridos." + 
                       "\nPorfavor intentar de nuevo.");
            }
          
      };         
function cotizar4(){
  
 var fechaI = document.getElementById("FI").value;
 var fechaF = document.getElementById("FF").value;
 var Np = document.getElementById("personas").value;
 var Nn = document.getElementById("ninos").value;

 
 //btener un Número de dias a partir de dos fechas
var dia1 = new Date(fechaI);
var dia2 = new Date(fechaF);
 let difference = Math.abs(dia1 - dia2);
     days = (difference / (1000 * 3600 * 24));

if(document.getElementById("button")){var destino = "Mendoza, Argentina";
    var d1 = (document.getElementById("mend").value * Np);}


 
        if(document.getElementById("si").checked){
          var cot = document.getElementById("si").value;
		  var cost = days * 1000;
		  var tot = cost+d1;
		  }	
      
        if(document.getElementById("no").checked){
          var cot = document.getElementById("no").value;}
        if(fechaI && fechaF && (Np > 0)){
            alert("               Presupuesto Total:" + tot +
                    "\nPrecio:" + d1 +
                    "\nDestino:"+ destino +
                    "\nHozpedaje y vuelo:" + "" + cot + ": $" + cost +
                    "\nFecha de inicio:" + "" + fechaI +
                    "\nFecha final:" + " " + fechaF +
                    "\nNúmero de dias: " + days +
                    "\nNúmero de personas:" + " " + Np +
                    "\nNúmero de niños:" + " " + Nn); 
       }

           else{ alert("No se ha establecido alguno de los Datos requeridos." + 
                       "\nPorfavor intentar de nuevo.");
            }
          
      };         
function cotizar5(){
  
 var fechaI = document.getElementById("FI").value;
 var fechaF = document.getElementById("FF").value;
 var Np = document.getElementById("personas").value;
 var Nn = document.getElementById("ninos").value;

 
 //btener un Número de dias a partir de dos fechas
var dia1 = new Date(fechaI);
var dia2 = new Date(fechaF);
 let difference = Math.abs(dia1 - dia2);
     days = (difference / (1000 * 3600 * 24));

if(document.getElementById("button")){var destino = "Punta Cana, Republica Dominicana";
    var d1 = (document.getElementById("cana").value * Np);}


 
        if(document.getElementById("si").checked){
          var cot = document.getElementById("si").value;}
      
        if(document.getElementById("no").checked){
          var cot = document.getElementById("no").value;}
        if(fechaI && fechaF && (Np > 0)){
            alert("       Presupuesto Total:" + 
                    "\nPrecio:" + d1 +
                    "\nDestino:"+ destino +
                    "\nHozpedaje y vuelo:" + "" + cot + 
                    "\nFecha de inicio:" + "" + fechaI +
                    "\nFecha final:" + " " + fechaF +
                    "\nNúmero de dias: " + days +
                    "\nNúmero de personas:" + " " + Np +
                    "\nNúmero de niños:" + " " + Nn); 
       }

           else{ alert("No se ha establecido alguno de los Datos requeridos." + 
                       "\nPorfavor intentar de nuevo.");
            }
          
      };         	  
      document.getElementById("button").onclick = cotizar;
      document.getElementById("button1").onclick = cotizar1;
      document.getElementById("button2").onclick = cotizar2;
      document.getElementById("button3").onclick = cotizar3;
      document.getElementById("button4").onclick = cotizar4;
      document.getElementById("button5").onclick = cotizar5;
    
    