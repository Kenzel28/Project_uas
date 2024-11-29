$(document).ready(function () {
    console.log("JavaScript file loaded successfully.");

    document.addEventListener('DOMContentLoaded', function () {
        const carousel = document.querySelectorAll('.carousel');
        carousel.forEach(function (item) {
            new bootstrap.Carousel(item);
        });
    });
});