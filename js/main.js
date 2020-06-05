$(document).ready(function () {

    // navbar-toggler rotation
    $(".navbar-toggler").on("click", () => {
        if ($(".navbar-collapse").hasClass("show")) {
            $(".navbar-toggler").css({ "color": "red", "transform": "rotate(0deg)", "transition": "transform 20ms ease-in-out", "-webkit-transition": "transform 20ms ease-in-out", "-moz-transition": "transform 20ms ease-in-out", "-o-transition": "transform 20ms ease-in-out" });
        } else {
            $(".navbar-toggler").css({ "color": "red", "transform": "rotate(90deg)", "transition": "transform 20ms ease-in-out", "-webkit-transition": "transform 20ms ease-in-out", "-moz-transition": "transform 20ms ease-in-out", "-o-transition": "transform 20ms ease-in-out" }
            )
        }
    })





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


    /*###
        Validations
        ###*/
    /* 1. Login */
    $("#email_error_msg").hide()
    $("#password_error_msg").hide()
    var error_email = false
    var error_password = false

    $("#login_email").keyup(function () {
        check_email()
    })
    $("#login_password").keyup(function () {
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


    /* 1. Registration page error handling */
    var register_error_name = false
    var register_error_email = false
    var register_error_phone = false
    var register_error_address = false
    var register_error_password = false
    var register_error_confirm_password = false
    //..............Name
    $("#registration_name_error_msg").hide()
    $("#register_inputName").on("keyup", function () {
        check_register_name()
    })
    $("#register_inputName").on("click", function () {
        check_register_name()
    })

    function check_register_name() {
        let name = $("#register_inputName").val().length
        if (name > 0) {
            $("#registration_name_error_msg").hide()
            register_error_name = true
            enable_registration_button()
        } else {
            $("#registration_name_error_msg").show()
            register_error_name = false
        }
    }
    //..............Email
    $("#registration_email_error_msg").hide()
    $("#register_inputEmail").keyup(function () {
        check_register_email()
    })
    function check_register_email() {
        let email = $("#register_inputEmail").val().length
        if (email != 0) {
            $("#registration_email_error_msg").hide()
            register_error_email = true
            let pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$/i);
            if (pattern.test($("#register_inputEmail").val())) {
                $("#registration_email_pattern_error").hide()
                register_error_email = true
                enable_registration_button()
            } else {
                $("#registration_email_pattern_error").html("Invalid email address")
                $("#registration_email_pattern_error").show()
                register_error_email = false
            }
        } else {
            $("#registration_email_error_msg").show()
            register_error_email = false
        }
    }
    //..............Phone
    $("#registration_phone_error_msg").hide()
    $("#register_inputPhone").keyup(function () {
        check_register_phone()
    })
    function check_register_phone() {
        let phone = $("#register_inputPhone").val().length
        if (phone != 0) {
            $("#registration_phone_error_msg").hide()
            register_error_phone = true
            enable_registration_button()
        } else {
            $("#registration_phone_error_msg").show()
            register_error_phone = false
        }
    }
    //..............Address
    $("#registration_address_error_msg").hide()
    $("#register_inputAddress").keyup(function () {
        check_register_address()
    })
    function check_register_address() {
        let address = $("#register_inputAddress").val().length
        if (address != 0) {
            $("#registration_address_error_msg").hide()
            register_error_address = true
            enable_registration_button()
        } else {
            $("#registration_address_error_msg").show()
            register_error_address = false
        }
    }
    //..............Password
    $("#registration_password_error_msg").hide()
    $("#registration_password_length_error_msg").hide()
    $("#register_inputPassword").keyup(function () {
        check_register_password()
    })

    var password_1;
    function check_register_password() {
        let password = $("#register_inputPassword").val().length
        if (password != 0) {
            $("#registration_password_error_msg").hide()
            register_error_password = true
            if (password < 8) {
                $("#registration_password_length_error_msg").show()
                register_error_password = false
            } else {
                $("#registration_password_length_error_msg").hide()
                password_1 = $("#register_inputPassword").val()
                register_error_password = true
                enable_registration_button()
            }

        } else {
            $("#registration_password_error_msg").show()
            register_error_password = false
        }
    }
    //..............Confirm Password
    $("#registration_confirm_password_error_msg").hide()
    $("#registration_confirm_password_match_error_msg").hide()
    $("#register_confirm_inputPassword").keyup(function () {
        check_register_confirm_password()
    })
    function check_register_confirm_password() {
        let confirm_password = $("#register_confirm_inputPassword").val()
        let confirm_password_count = $("#register_confirm_inputPassword").val().length
        if (confirm_password_count != 0) {
            $("#registration_confirm_password_error_msg").hide()
            register_error_confirm_password = true
            enable_registration_button()
            if (confirm_password != password_1) {
                $("#registration_confirm_password_match_error_msg").show()
                register_error_confirm_password = false
            } else {
                $("#registration_confirm_password_match_error_msg").hide()
                register_error_confirm_password = true
                enable_registration_button()
            }
        } else {
            $("#registration_confirm_password_error_msg").show()
            register_error_confirm_password = false
        }
    }



    // (function ($) {
    //     if (register_error_name === true && register_error_email === true && register_error_phone === true && register_error_address === true && register_error_password === true && register_error_confirm_password === true) {
    //         $("#registration_form_btn").addClass("form-btn")
    //         console.log("done!")

    //     }
    //     console.log("done!")
    //     console.log(register_error_name)
    // })(jQuery);

    function enable_registration_button() {
        if (register_error_name === true && register_error_email === true && register_error_phone === true && register_error_address === true && register_error_password === true && register_error_confirm_password === true && register_error_password === register_error_confirm_password) {
            $("#registration_form_btn").addClass("form-btn")
            $("#registration_form_btn").removeAttr("disabled")
            console.log("done!")

        } else {
            $("#registration_form_btn").removeClass("form-btn")
            $("#registration_form_btn").attr("disable")
            // $("#registration_form_btn").attr("disable", "disabled")
            console.log("failed!")
        }
    }



    if (register_error_name === true && register_error_email === true && register_error_phone === true && register_error_address === true && register_error_password === true && register_error_confirm_password === true)



        // Seller's Bank details
        $('#bank_transfer').on("click", function () {
            $("#seller-bank-details").show()
        })
    $('#third_party').on("click", function () {
        $("#seller-bank-details").hide()
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
    option.classList.add("selectOptionStyle")
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