const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('quick-links');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('show');
});

//*********************
//      carousel
//*****************
let slidePosition = 0;
const slides = document.getElementsByClassName('sale-card');
const totalSlides = slides.length;

slideOne = slides[0];
slideTwo = slides[1];
slideThree = slides[2];

document.getElementById('carousel-button-next').addEventListener("click", moveToNextSlide);

document.getElementById('carousel-button-prev').addEventListener("click", function () {
    moveToPrevSlide();
});

function moveToNextSlide() {
    if (slideOne.classList.contains("sale-card--visible")) {
        slideOne.classList.remove('sale-card--visible');
        slideTwo.classList.add('sale-card--visible');
    }
    else if (slideTwo.classList.contains(('sale-card--visible'))) {
        slideTwo.classList.remove('sale-card--visible');
        slideThree.classList.add('sale-card--visible');
        console.log(slideThree);
    }
}

function moveToPrevSlide() {
    if (slideThree.classList.contains('sale-card--visible')) {
        slideThree.classList.remove('sale-card--visible');
        slideTwo.classList.add('sale-card--visible');
    }
    else if (slideTwo.classList.contains(('sale-card--visible'))) {
        slideTwo.classList.remove('sale-card--visible');
        slideOne.classList.add('sale-card--visible');
        console.log(slideThree);
    }
}