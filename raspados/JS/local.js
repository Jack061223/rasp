// Declarando variables
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var contenedor_login_register = document.querySelector(".contenedor__login-register");
var caja_trasera_login = document.querySelector(".caja__trasera-login");
var caja_trasera_register = document.querySelector(".caja__trasera-register");

// Variables para almacenar los valores ingresados en el formulario de registro
var registroNombreCompleto = "";
var registroDireccion = "";
var registroCorreo = "";
var registroUsuario = "";

// Función para mostrar el formulario de registro
function mostrarFormularioRegistro() {
    formulario_register.style.display = "block";
    contenedor_login_register.style.left = "410px";
    formulario_login.style.display = "none";
    caja_trasera_register.style.opacity = "0";
    caja_trasera_login.style.opacity = "1";

    // Restaurar los valores guardados en el formulario de registro
    document.getElementById("nombre_completo").value = registroNombreCompleto;
    document.getElementById("direccion").value = registroDireccion;
    document.getElementById("correo").value = registroCorreo;
    document.getElementById("usuario").value = registroUsuario;
}

// Función para guardar los valores ingresados en el formulario de registro
function guardarValoresRegistro() {
    registroNombreCompleto = document.getElementById("nombre_completo").value;
    registroDireccion = document.getElementById("direccion").value;
    registroCorreo = document.getElementById("correo").value;
    registroUsuario = document.getElementById("usuario").value;
}

// Evitar recarga de página al enviar el formulario
document.querySelector(".formulario__register").addEventListener("submit", function (event) {
    event.preventDefault(); // Evitar el envío del formulario por defecto
    
    // Aquí puedes realizar la lógica de validación del formulario y el envío de los datos mediante AJAX
    
    // Si hay un error, mostrar el formulario de registro nuevamente
    var error = true; // Variable para simular un error, debes reemplazarla con tu lógica de validación
    if (error) {
        guardarValoresRegistro(); // Guardar los valores ingresados en el formulario
        mostrarFormularioRegistro(); // Mostrar el formulario de registro
    }
});

// Ejecutando funciones
document.getElementById("btn__iniciar-sesion").addEventListener("click", function () {
    formulario_login.style.display = "block";
    contenedor_login_register.style.left = "10px";
    formulario_register.style.display = "none";
    caja_trasera_register.style.opacity = "1";
    caja_trasera_login.style.opacity = "0";
});

document.getElementById("btn__registrarse").addEventListener("click", function () {
    mostrarFormularioRegistro();
});

window.addEventListener("resize", function () {
    if (window.innerWidth > 850) {
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "block";
    } else {
        caja_trasera_register.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        contenedor_login_register.style.left = "0px";
        formulario_register.style.display = "none";
    }
});
