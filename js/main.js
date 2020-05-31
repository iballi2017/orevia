$(document).ready(function () {
    // alert("hello");
    // Review slider (Owl carousel)
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 10000,
        smartSpeed: 1000,
        fluidSpeed: 3,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });



    // ###### custom bootstrap carousel events
    $("#prev").on("click", function () {
        $('.carousel').carousel("prev")
    })
    $("#next").on("click", function () {
        $('.carousel').carousel("next")
    })
    // $('.carousel').carousel({
    //     interval: 2000
    // })

})


// main navigation bar sticky effect
window.onscroll = function () { myFunction() };
var navbar = document.getElementById("main-header");
var sticky = navbar.offsetTop;

function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky-top")
    } else {
        navbar.classList.remove("sticky-top");
    }
}
