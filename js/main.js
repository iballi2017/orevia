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
        // loop: true,
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

    // //  Registration form validation
    // $("#loginForm").validate({
    //     rules: {
    //         // no quoting necessary
    //         name: "required",
    //         // quoting necessary!
    //         "user[email]": "email",
    //         // dots need quoting, too!
    //         "user.address.street": "required"
    //     },

    //     messages: {
    //         name: "Please enter your name"
    //     }
    // })



    //login form error messages
    $("#email_error_msg").hide()
    $("#password_error_msg").hide()
    var error_email = false
    var error_password = false

    $("#login_email").focusout(function () {
        check_email()
    })
    $("#login_password").focusout(function () {
        check_password()
    })

    function check_password() {
        var password_length = $("#login_password").val().length
        if (password_length < 8) {
            $("#password_error_msg").html("Password should be atleast 8 character long")
            $("#password_error_msg").show()
        }
        else if (password_length >= 8) {
            $("#password_error_msg").hide()
        }
    }

    function check_email() {

        var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$/i);
        if (pattern.test($("#login_email").val())) {
            $("#email_error_msg").hide()
        } else {
            $("#email_error_msg").html("Invalid email address")
            $("#email_error_msg").show()
            error_email = true
        }

    }

    // Seller's Bank details
    $('#bank_transfer').on("click", function () {
        $("#seller-bank-details").show(2000)
    })
    $('#third_party').on("click", function () {
        $("#seller-bank-details").hide(2000)
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


var stateSelect = document.querySelectorAll("option")
stateSelect.forEach((option) => {
    console.log(option)
    option.classList.add("selectOptionStyle")
    console.log(option)
})



//toggle login form reveal password
function loginPassword_click() {
    var x = document.getElementById("login_password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

//toggle reset password form reveal password
function newPassword_click() {
    var x = document.getElementById("new_password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function confirmPassword_click() {
    var x = document.getElementById("confirm_password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}