
document.getElementById("btn__iniciar-sesion").addEventListener( "click", IniciarSesion); 
window.addEventListener("resize",nachoPagina);
/*Variables*/
var formulario_login_registro=document.querySelector('.contenedor__login-registrar');
var formulario_login=document.querySelector('.formulario__login');
var caja_tracera_login=document.querySelector('.caja__trasera--login');
/*Funciones*/

function nachoPagina(){
   if(window.innerWidth >850){
      caja_tracera_login.style.display="block";
      caja_tracera_registro.style.display="block";  

   }else{
       caja_tracera_registro.style.display="block";
       caja_tracera_registro.style.opacity="1";
       caja_tracera_login.style.display="none";
       formulario_login.style.display="block";
       formulario_registro.style.display= "none";
       formulario_login_registro.style.left="0px";
   }
}
nachoPagina();

function IniciarSesion(){
   if(window.innerWidth>850){
   formulario_registro.style.display="none";
   formulario_login_registro.style.left="10px";
   formulario_login.style.display="block";
   caja_tracera_registro.style.opacity="1";
   caja_tracera_login.style.opacity="0";
}else{
   formulario_registro.style.display="none";
   formulario_login_registro.style.left="0px";
   formulario_login.style.display="block";
   caja_tracera_registro.style.display="block";
   caja_tracera_login.style.display="none";
}
}

