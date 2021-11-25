
  
  


var boton = document.getElementById("botones");
var boton1 = document.getElementById("botones1");
var boton2 = document.getElementById("botones2");
var sound = false;
var v = document.getElementsByTagName("video")[6];
var v1 = document.getElementsByTagName("video")[7];
var v2 = document.getElementsByTagName("video")[8];
boton.addEventListener("click", function() {    
    if (!sound) {
   v.play();
   this.innerHTML = "Pause";
   sound = true;
  } else {
   v.pause();
   this.innerHTML = "Play";
   sound = false;
  } } );
  
boton1.addEventListener("click", function() {    
    if (!sound) {
   v1.play();
   this.innerHTML = "Pause";
   sound = true;
  } else {
   v1.pause();
   this.innerHTML = "Play";
   sound = false;
  } } );
  boton2.addEventListener("click", function() {    
    if (!sound) {
   v2.play();
   this.innerHTML = "Pause";
   sound = true;
  } else {
   v2.pause();
   this.innerHTML = "Play";
   sound = false;
  } } );


  

