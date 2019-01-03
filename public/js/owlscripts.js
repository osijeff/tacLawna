$(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    nav: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3,
            nav: false
        },
        1000: {
            items: 5,
            nav: false,
            loop: false
        }
    }
});

$(document).ready(function() {
    $("#news-slider").owlCarousel({
        items: 2,
        itemsDesktop: [1199, 2],
        itemsMobile: [600, 1],
        pagination: true,
        autoPlay: true
    });
});
