$(document).ready(function () {
    // alert("hello");
    // Review slider (Owl carousel)
    $(".hero-slider").owlCarousel({
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

    $(".product-views-slider").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: false,
        autoplayTimeout: 10000,
        smartSpeed: 1000,
        fluidSpeed: 3,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    $("#prev-img").click(function () {
        // alert("hello")
        $(".product-views-slider").trigger('prev.owl.carousel');
    })
    $("#next-img").click(function () {
        // alert("hello")
        $(".product-views-slider").trigger('next.owl.carousel');
    })


    // ###### custom bootstrap carousel events
    $("#prev").on("click", function () {
        $('.carousel').carousel("prev")
    })
    $("#next").on("click", function () {
        $('.carousel').carousel("next")
    })

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
