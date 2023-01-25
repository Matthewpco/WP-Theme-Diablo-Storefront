// Handles functionality for world section lightbox gallery, view all button, and image comparison
// Assignment
var viewAllBtn = document.querySelector("#world-view-btn");
var viewAllDiv = document.querySelector("#view-more-div");
var divisor = document.getElementById("world-divisor");
var slider = document.getElementById("world-slider");
// Functions
function openWorldModal() {
    document.getElementById("world-modal").style.display = "block";
}

function closeWorldModal() {
    document.getElementById("world-modal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("worldSlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    //dots[slideIndex - 1].className += " active"; // used for gallery that is not needed for this project
    //captionText.innerHTML = dots[slideIndex - 1].alt;
}

function viewAll() {
    viewAllDiv.classList.add("row")
    viewAllBtn.classList.add("hidden")
}

function moveDivisor() {
    divisor.style.width = slider.value + "%";
}