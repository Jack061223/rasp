// Carrusel de imágenes del encabezado
const headerCarousel = document.querySelector('.header-carousel');
const headerSlides = headerCarousel.querySelectorAll('.carousel-slide');

let headerSlideIndex = 0;

function showHeaderSlide(index) {
  headerSlides.forEach(slide => {
    slide.style.display = 'none';
  });
  headerSlides[index].style.display = 'block';
}

function headerCarouselAnimation() {
  showHeaderSlide(headerSlideIndex);
  headerSlideIndex++;
  if (headerSlideIndex >= headerSlides.length) {
    headerSlideIndex = 0;
  }
  setTimeout(headerCarouselAnimation, 3000);
}

headerCarouselAnimation();

// Carrusel de imágenes de la sección de ofertas
const offersCarousel = document.querySelector('.offers-carousel');
const offersSlides = offersCarousel.querySelectorAll('.carousel-slide');

let offersSlideIndex = 0;

function showOffersSlide(index) {
  offersSlides.forEach(slide => {
    slide.style.display = 'none';
  });
  offersSlides[index].style.display = 'block';
}

function offersCarouselAnimation() {
  showOffersSlide(offersSlideIndex);
  offersSlideIndex++;
  if (offersSlideIndex >= offersSlides.length) {
    offersSlideIndex = 0;
  }
  setTimeout(offersCarouselAnimation, 3000);
}

offersCarouselAnimation();
