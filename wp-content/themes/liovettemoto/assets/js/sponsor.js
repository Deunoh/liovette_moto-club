document.addEventListener("DOMContentLoaded", function() {
    let carousel = new bootstrap.Carousel(document.getElementById('sponsorCarousel'), {
        interval: 4000, 
        wrap: true, 
        ride: "carousel"
    });
});

