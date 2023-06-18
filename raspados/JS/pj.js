// JavaScript personalizado para el funcionamiento del carrusel

// Obtener el elemento del carrusel
const carousel = document.querySelector('.carousel');

// Obtener el ancho del carrusel
const carouselWidth = carousel.offsetWidth;

// Animar el carrusel
function animateCarousel() {
  carousel.style.transform = `translateX(-${carouselWidth}px)`;
}

// Iniciar la animación del carrusel
setInterval(animateCarousel, 3000);
