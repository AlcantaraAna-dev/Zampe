var slides = document.querySelectorAll('.slide');

var currentSlide = 0;

function nextSlide () {

slides [currentSlide].className ='slide';

currentSlide = (currentSlide +1) % slides.length;

slides [currentSlide]. className = 'slide active';
}

function prevslide () {

slides [currentSlide]. className= 'slide';

currentSlide = (currentSlide -1 + slides.length) % slides.length;

slides [currentSlide].className = 'slide active';
}

var slideInterval = setInterval (nextSlide, 5000);