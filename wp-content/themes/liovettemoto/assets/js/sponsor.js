document.addEventListener("DOMContentLoaded", function() {
    let carousel = new bootstrap.Carousel(document.getElementById('sponsorCarousel'), {
        interval: 3000, 
        wrap: true, 
        ride: "carousel"
    });
});

