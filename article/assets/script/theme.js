$(document).ready(function() {
    $('.main-slide-banner').slick({
        speed: 2000,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
    let prevScrollPos = window.pageYOffset;
    window.onscroll = function() {
    let currentScrollPos = window.pageYOffset;
    if (prevScrollPos > currentScrollPos) {
        document.querySelector("header").style.top = "0";
    } else {
        document.querySelector("header").style.top = "-80px"; // Adjust according to your header height
    }
    prevScrollPos = currentScrollPos;
    }

});