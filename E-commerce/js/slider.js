let currentIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

function showSlide(index) {
  if (index < 0) {
    index = totalSlides - 1;
  } else if (index >= totalSlides) {
    index = 0;
  }

  const offset = -index * 100;
  document.querySelector('.slides').style.transform = `translateX(${offset}%)`;
  currentIndex = index;
}

function nextSlide() {
  showSlide(currentIndex + 1);
}

function prevSlide() {
  showSlide(currentIndex - 1);
}

setInterval(nextSlide, 2000); //  every 2 seconds new photo
