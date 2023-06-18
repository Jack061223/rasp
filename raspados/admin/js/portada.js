/*Mostrar Imagen Agregar */
function mostrarImagen() {
  const archivo = document.getElementById('imagen').files[0];
  const lector = new FileReader();
  lector.onload = function (event) {
    const vista_previa = document.getElementById('vista-previa');
    vista_previa.src = event.target.result;
  }
  lector.readAsDataURL(archivo);
}

/*Mostrar formulario agregar*/
function agregar() {
  const form = document.getElementById('agregar');
  const inputs = document.querySelectorAll('input[type="text"]');
  form.classList.toggle('activo');
}

/*Mostrar Imagen Modificar */
function mostrarImagenM() {
  const inputImagen = document.getElementById('img');
  const vistaPrevia = document.getElementById('vista_previa');

  if (inputImagen.files && inputImagen.files[0]) {
    const lector = new FileReader();

    lector.onload = function (e) {
      vistaPrevia.src = e.target.result;
    };

    lector.readAsDataURL(inputImagen.files[0]);
  }
}