
//Configuración de eventos

document.getElementById("btn__registrarse").addEventListener('click', registrar)
document.getElementById("btn__iniciar-sesion").addEventListener("click", IniciarSesion);
window.addEventListener("resize", nachoPagina);


// DECLARACION DE VARIABLES

var formulario_login_registro = document.querySelector('.contenedor__login-registrar');
var formulario_login = document.querySelector('.formulario__login');
var formulario_registro = document.querySelector('.formulario__registrar');
var caja_tracera_login = document.querySelector('.caja__trasera--login');
var caja_tracera_registro = document.querySelector('.caja__tracera--registrar');


//FUNCIONES


function nachoPagina() {
    if (window.innerWidth > 850) {
        caja_tracera_login.style.display = "block";
        caja_tracera_registro.style.display = "block";

    } else {
        caja_tracera_registro.style.display = "block";
        caja_tracera_registro.style.opacity = "1";
        caja_tracera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_registro.style.display = "none";
        formulario_login_registro.style.left = "0px";
    }
}
nachoPagina();

function IniciarSesion() {
    if (window.innerWidth > 850) {
        formulario_registro.style.display = "none";
        formulario_login_registro.style.left = "10px";
        formulario_login.style.display = "block";
        caja_tracera_registro.style.opacity = "1";
        caja_tracera_login.style.opacity = "0";
    } else {
        formulario_registro.style.display = "none";
        formulario_login_registro.style.left = "0px";
        formulario_login.style.display = "block";
        caja_tracera_registro.style.display = "block";
        caja_tracera_login.style.display = "none";
    }
}



function registrar() {
    if (window.innerWidth > 850) {
        formulario_registro.style.display = "block";
        formulario_login_registro.style.left = "410px";
        formulario_login.style.display = "none";
        caja_tracera_registro.style.opacity = "0";
        caja_tracera_login.style.opacity = "1";
    } else {
        formulario_registro.style.display = "block";
        formulario_login_registro.style.left = "0px";
        formulario_login.style.display = "none";
        caja_tracera_registro.style.display = "none";
        caja_tracera_login.style.display = "block";
        caja_tracera_login.style.opacity = "1";
    }
}




function mostrarSiguiente() {
    if (validarDatosPersonales()) {
        var paso1 = document.getElementById('Registro_Personal');
        var paso2 = document.getElementById('Registro_Cuenta');
        // Oculta el primer y ejecuta el 2do
        paso1.style.display = 'none';
        paso2.style.display = 'block';
    }
}


function validarDatosPersonales() {

    var dni = document.querySelector('[name="dni"]').value;
    var nombre = document.querySelector('[name="nombre_completo"]').value;
    var apellido = document.querySelector('[name="apellido"]').value;
    var telefono = document.querySelector('[name="telefono"]').value;
    var direccion = document.querySelector('[name="direccion"]').value;
    var correo = document.querySelector('[name="correo"]').value;
    var genero = document.querySelector('[name="genero"]').value;
    var fechaNacimiento = document.querySelector('[name="fechaNacimiento"]').value;


    //Validacion if
    if (dni && nombre && apellido && telefono && direccion && correo && genero && fechaNacimiento) {
        return true;
    } else {
        alert("Por favor, rellene todos los campos");
        return false;
    }
}

function validarDatosUsuario() {
    var username = document.querySelector('[name="usuario"]').value;
    var contrasena = document.querySelector('[name="contrasena"]').value;

    //Validacion
    if (username && contrasena) {
        return true;
    } else {
        alert("Rellene todos los campos");
        return false;
    }
}