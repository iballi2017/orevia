$(document).ready(function () {




    // Review slider (Owl carousel)
    // index.php
    $(".product_list_slider").owlCarousel({
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
    
    $(".product_list_slider").trigger('stop.owl.autoplay');// ######## stop auto scroll

    $(".product_list_slider").trigger('stop.owl.autoplay');// ######## stop auto scroll

    // Review slider (Owl carousel)
    // index.php
    $(".reviews-slider").owlCarousel({
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

    // product-details.php
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
    // ====
    $(".extra_nav_prev").click(function () {
        // alert("hello")
        $(".product-views-slider").trigger('prev.owl.carousel');
    })
    $(".extra_nav_next").click(function () {
        // alert("hello")
        $(".product-views-slider").trigger('next.owl.carousel');
    })
    // ====
    $(".product_prev_nav").click(function () {
        // alert("hello")
        $(".product_list_slider").trigger('prev.owl.carousel');
    })
    $(".product_next_nav").click(function () {
        // alert("hello")
        $(".product_list_slider").trigger('next.owl.carousel');
    })


    // ###### custom bootstrap carousel events
    $("#prev").on("click", function () {
        $('.carousel').carousel("prev")
    })
    $("#next").on("click", function () {
        $('.carousel').carousel("next")
    })


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
            register_error_name = false;
            enable_registration_button()
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
            register_error_email = true;
            enable_registration_button()
            let pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$/i);
            if (pattern.test($("#register_inputEmail").val())) {
                $("#registration_email_pattern_error").hide()
                register_error_email = true
                enable_registration_button()
            } else {
                $("#registration_email_pattern_error").html("Invalid email address")
                $("#registration_email_pattern_error").show()
                register_error_email = false;
                enable_registration_button()
            }
        } else {
            $("#registration_email_error_msg").show()
            register_error_email = false;
            enable_registration_button()
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
            register_error_phone = false;
            enable_registration_button()
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
            register_error_address = false;
            enable_registration_button()
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
                register_error_password = false;
                enable_registration_button()
            } else {
                $("#registration_password_length_error_msg").hide()
                password_1 = $("#register_inputPassword").val()
                register_error_password = true
                enable_registration_button()
            }

        } else {
            $("#registration_password_error_msg").show()
            register_error_password = false;
            enable_registration_button()
        }
    }
    //..............Confirm Password
    $("#registration_confirm_password_error_msg").hide()
    $("#registration_confirm_password_match_error_msg").hide()
    $("#register_confirm_inputPassword").keyup(function () {
        check_register_confirm_password()
    })
    $("#register_confirm_inputPassword").focusout(function () {
        check_register_confirm_password()
    })
    function check_register_confirm_password() {
        let confirm_password = $("#register_confirm_inputPassword").val()
        let confirm_reset_password_length = $("#register_confirm_inputPassword").val().length
        if (confirm_reset_password_length != 0) {
            $("#registration_confirm_password_error_msg").hide()
            register_error_confirm_password = true
            enable_registration_button()
            if (confirm_password != password_1) {
                $("#registration_confirm_password_match_error_msg").show()
                register_error_confirm_password = false;
                enable_registration_button()
            } else {
                $("#registration_confirm_password_match_error_msg").hide()
                register_error_confirm_password = true
                enable_registration_button()
            }
        } else {
            $("#registration_confirm_password_error_msg").show()
            register_error_confirm_password = false;
            enable_registration_button();
        }
    }

    function enable_registration_button() {
        if (register_error_name === true && register_error_email === true && register_error_phone === true && register_error_address === true && register_error_password === true && register_error_confirm_password === true && register_error_password === register_error_confirm_password) {
            $("#registration_form_btn").addClass("white_btn")
            $("#registration_form_btn").removeAttr("disabled", "disabled")

        } else {
            $("#registration_form_btn").removeClass("white_btn")
            $("#registration_form_btn").attr("disabled", "disabled")
        }
    }



    // ##### RESET PASSWORD

    //..............Password
    var reset_password_error = false
    $("#reset_password_error_msg").hide()
    $("#reset_password_length_error_msg").hide()
    $("#new_reset_password").keyup(function () {
        check_reset_password()
    })

    var reset_password_value;
    function check_reset_password() {
        let password_length = $("#new_reset_password").val().length
        let new_password = $("#new_reset_password").val();
        if (password_length != 0) {
            $("#reset_password_error_msg").hide()
            reset_password_error = true
            if (password_length < 8) {
                $("#reset_password_length_error_msg").show()
                reset_password_error = false
            } else {
                $("#reset_password_length_error_msg").hide()
                reset_password_value = new_password
                reset_password_error = true
            }
            reset_password_value = new_password

        } else {
            $("#reset_password_error_msg").show()
            reset_password_error = false
        }
    }
    //..............Confirm Password
    $("#confirm_reset_password_required_msg").hide()
    $("#confirm_reset_password_match_error_msg").hide()
    $("#confirm_reset_password_required_msg").hide()
    $("#confirm_reset_password").keyup(function () {
        check_confirm_reset_password()
    })
    function check_confirm_reset_password() {
        let confirm_reset_password = $("#confirm_reset_password").val()
        let confirm_reset_password_length = $("#confirm_reset_password").val().length


        if (confirm_reset_password_length != 0) {
            $("#confirm_reset_password_required_msg").hide()
            if (confirm_reset_password != reset_password_value) {
                $("#reset_password_error_msg").show()
            } else {
                $("#reset_password_error_msg").hide()
                $("#confirm_reset_password_match_error_msg").hide()
            }
        } else {
            $("#confirm_reset_password_required_msg").show()
        }

        if (confirm_reset_password_length === 0) {
            $("#confirm_reset_password_match_error_msg").show()
        }
    }



    // footer newsletter email ui validation
    $("#newsletter_email_error_mgs").hide()

    $("#newsletter_email_input").keyup(function () {
        check_newsletter_email_input_value()
    })
    $("#newsletter_email_input").focusout(function () {
        check_newsletter_email_input_value()
    })

    function check_newsletter_email_input_value() {
        var newsletter_email_input_value = $("#newsletter_email_input").val()

        if (newsletter_email_input_value != 0) {
            let pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$/i);
            if (pattern.test(newsletter_email_input_value)) {
                $("#newsletter_email_error_mgs").hide()
            } else {
                $("#newsletter_email_error_mgs").show()
            }

        }
    }

    // star ratings
    const stars = document.querySelectorAll(".review-star")
    var ratingValue = document.querySelector("#rating_value")
    var index;
    for (let i = 0; i < stars.length; i++) {
        stars[i].addEventListener("mouseover", function () {

            for (let j = 0; j < stars.length; j++) {
                stars[j].classList.remove("fas")
                stars[j].classList.add("far")
            }
            for (let j = 0; j <= i; j++) {
                stars[j].classList.remove("far")
                stars[j].classList.add("fas")

            }
        })

        stars[i].addEventListener("click", function () {
            ratingValue.value = i + 1
            index = i;

            // the value of rating stars
            // console.log(`rating is ${ratingValue.value}`)
        })
        stars[i].addEventListener("mouseout", function () {

            for (let j = 0; j < stars.length; j++) {
                stars[j].classList.remove("fas")
                stars[j].classList.add("far")
            }
            for (let j = 0; j <= index; j++) {
                stars[j].classList.remove("far")
                stars[j].classList.add("fas")


            }
        })
    }
})



// Seller's Bank details
var bankTransferRadioButton = document.getElementById("bank_transfer")
var seller_account_details = document.getElementById("seller_bank_details")
function showAccountDetails() {
    if (bankTransferRadioButton.checked != true) {
        seller_account_details.style.display = "none"
    } else {
        seller_account_details.style.display = "block"
    }
}



// Adding a class to all "Select options" for styling. *Registration page; and *Checkout page
var selectOption = document.querySelectorAll("option")
selectOption.forEach((option) => {
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
    var x = document.getElementById("new_reset_password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function confirmPassword_click() {
    var x = document.getElementById("confirm_reset_password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}


// Inersection Observer on page scroll, for active navigation links
var intersection_array = [
    {
        section: "hero",
        link: "hero_link"
    },
    {
        section: "about-us",
        link: "about_us_link"
    },
    {
        section: "our-products",
        link: "products_link"
    },
    {
        section: "reviews",
        link: "reviews_link"
    },
    {
        section: "faq",
        link: "faq_link"
    }
]
const homepageSections = document.querySelectorAll(".section")
const option = {
    // threshold: 1,
    // rootMargin: "0px 0px -200px 0px"
    rootMargin: "-200px 0px -150px 0px"
}
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        }

        intersection_array.forEach(_section => {
            if (entry.target.id === _section.section) {
                const main_nav_links = document.querySelectorAll(".nav-item")
                main_nav_links.forEach(link => {
                    if (link.id === _section.link) {
                        for (let sibling of link.parentNode.children) {
                            if (sibling != this) {
                                sibling.classList.remove("active")
                            }
                            link.classList.add("active")
                        }
                    }
                })
            }
        })


    })
}, option)

homepageSections.forEach(section => {
    observer.observe(section)
})


// Handling mobile navigation dropdown and menu button icon transformation (new main navbar)
const nav_dropdown_toggler = document.querySelector("#o_nav_toggler")
const nav_dropdown = document.querySelector("#o_mobile_nav_dropdown")

nav_dropdown_toggler.addEventListener("click", show_mobile_nav)
const menu_icon = document.getElementById("toggler_icon")


var x = 0

function show_mobile_nav() {
    if (x === 0) {
        nav_dropdown.style.transform = "scaleY(1)";
        nav_dropdown.style.position = "relative";
        nav_dropdown.style.height = "600px";
        nav_dropdown.style.overflowY = "hidden";
        menu_icon.classList.remove("fa-bars")
        menu_icon.classList.add("fa-plus")
        x = 1;

    } else if (x === 1) {
        nav_dropdown.style.transform = "scaleY(0)";
        nav_dropdown.style.position = "absolute";
        nav_dropdown.style.height = "unset";
        nav_dropdown.style.overflowY = "unset";
        menu_icon.classList.remove("fa-plus")
        menu_icon.classList.add("fa-bars")
        x = 0;
    }
}
// ****************************************


// go back history
function goBack() {
    window.history.back();
}
  // *********