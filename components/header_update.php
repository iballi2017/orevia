<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        OREVIA | Beauty Skin Care | Skincare | Beauty | Health | Lagos Nigeria |
        Abuja</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <!-- bootstrap 4.3.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css" />
    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet" />
    <!-- jquery form validation -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <!-- owl carousel -->
    <link rel="stylesheet" href="../OwlCarousel2-2.3.4/owl.carousel.min.css" />
    <link rel="stylesheet" href="../OwlCarousel2-2.3.4/owl.theme.default.min.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="../css/main.css" />



    <style>
    /* css variables */
    :root {
        --primary-clr: #740774;
        ;
        --light-text-color: #808891;
    }


    /*  */
    .wrapper {
        width: 90%;
        margin: 0 auto;
    }

    .o_main_nav {
        display: none;
    }

    .o_main_mobile_navbar {
        position: relative;
    }

    .o_main_mobile_navbar .o_mobile_navtab {
        padding: 0;
        list-style: none;
        line-height: 35px;
    }

    #o_nav_toggler>.fa-plus {
        transform: rotate(45deg);
        transition: transform .5s ease;
    }

    #o_nav_toggler>.fa-bars {
        transform: rotate(0deg);
        transition: transform .5s ease;
    }

    .o_main_mobile_navbar .o_nav_top {
        border-bottom: 1px solid #808891;
    }

    .o_main_mobile_navbar .o_nav_top_inner {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: .7em;
        padding-bottom: .7em;
    }

    .o_main_mobile_navbar .o_mobile_navtab li {
        border-bottom: 1px solid #808891;
        padding-top: .5em;
        padding-bottom: .5em;
    }


    .o_nav_dropdown a {
        color: #434343;
    }

    #o_mobile_nav_dropdown {
        background-color: #fff;
        position: absolute;
        transform: scaleY(0);
        transition: transform .5s ease;
        -webkit-transition: transform .5s ease;
        -moz-transition: transform .5s ease;
        -o-transition: transform .5s ease;
        transform-origin: top;
        width: 100%;
    }

    .o_entry_btn {
        display: flex;
        justify-content: space-around;
        margin: 1em;

    }

    .o_entry_btn a {
        width: 47%;
        background-color: #fff;
        border: 1px solid purple;
        color: purple;
        border-radius: 0;
    }

    @media(min-width: 768px) {


        .o_main_mobile_navbar {
            display: none;
        }

        .o_main_nav {
            display: block;
        }
    }

    @media(min-width: 700px) {


        .o_main_nav_top_inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .o_navtab {
            list-style: none;
            padding: 0;
            display: flex;
            align-items: center;
            margin-top: unset;
            margin-bottom: unset;
        }

        .o_navtab li {
            margin-left: 2em;
        }

        .o_navtab a {
            color: var(--light-text-color)
        }

        .o_navtab a::after {
            content: "";
            height: 3px;
            display: block;
            background-color: var(--light-text-color);
            width: 40%;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 250ms ease-out;
            -moz-transition: transform 250ms ease-out;
            -o-ransition: transform 250ms ease-out;
            -webkit-transition: transform 250ms ease-out;
            -ms-transition: transform 250ms ease-in-out;
        }

        .o_navtab a:hover,
        .o_navtab:focus {
            text-decoration: none;
            transition: color 250ms ease-in-out;
            transition: font-weight 250ms ease-in-out;
            -moz-transition: color 250ms ease-in-out;
            -moz-transition: font-weight 250ms ease-in-out;
            -o-transition: color 250ms ease-in-out;
            -o-transition: font-weight 250ms ease-in-out;
            -webkit-transition: color 250ms ease-in-out;
            -webkit-transition: font-weight 250ms ease-in-out;
            -ms-transition: color 250ms ease-in-out;
            -ms-transition: font-weight 250ms ease-in-out;
            outline: 0;
        }

        .o_navtab a:hover::after,
        .o_navtab a:focus::after {
            transform: scaleX(1);
            transform-origin: left;
            transition: transform 250ms ease-in;
            -moz-transition: transform 250ms ease-in;
            -o-transition: transform 250ms ease-in;
            -webkit-transition: transform 250ms ease-in;
            -ms-transition: transform 250ms ease-in-out;
        }

        .o_contact_via_container {
            flex-basis: 40%;
        }

        .o_brand_logo_container {
            /* flex-basis: 50%; */
            flex-basis: auto;
            text-align: center;
        }

        .o_navtab_container {
            flex-basis: 40%;
            display: grid;
            place-content: end;
        }

    }
    </style>
</head>

<body>

    <!-- Header -->
    <header class="sticky-top bg-white">

        <nav class="o_main_nav">
            <div class="o_main_nav_top">
                <div class="o_main_nav_top_inner wrapper">
                    <div class="o_contact_via_container">
                        <small class="mr-3">
                            <i class="fas fa-envelope mr-2"></i> <span>info@gmail.com</span></small>
                        <small>
                            <i class="fas fa-phone mr-2"></i><span>07065199444</span></small>
                    </div>

                    <div class="o_brand_logo_container">
                        <h2><a href="../index.php"><img src="../assets/images/orevia-Logo.png" alt="Brand logo" /></a>
                        </h2>
                    </div>

                    <div class="o_navtab_container">

                        <ul class="o_navtab">
                            <li>
                                <a href="#"><small>Login</small></a>
                            </li>
                            <li>
                                <a href="#"><small>Sign up</small></a>
                            </li>
                            <li>
                                <a href="#"><small>
                                        <i class="fas fa-shopping-cart"></i>
                                        <span class="badge badge-secondary">0</span></small>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="o_main_nav_bottom main-nav">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link customLink active" href="../index.php#top">Home
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link customLink" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link customLink" href="#">Key Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link customLink" href="#">how to use</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link customLink" href="../index.php#faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link customLink" href="../index.php#reviews">Reviews</a>
                    </li>
                </ul>
            </div>

        </nav>




        <nav class="o_main_mobile_navbar">

            <div class="o_nav_top">
                <div class="wrapper o_nav_top_inner">

                    <div id="o_nav_toggler">
                        <i class="fas fa-bars fa-2x" id="toggler_icon"></i>
                        <!-- <i class="fas fa-plus fa-2x"></i> -->
                    </div>

                    <div class="brand_logo">
                        <h2><a href="../index.php"><img src="../assets/images/orevia-Logo.png" alt="Brand logo" /></a>
                        </h2>
                    </div>

                    <div>
                        <i class="fas fa-shopping-cart" id="toggler_icon"></i><span
                            class="badge badge-secondary">0</span>
                    </div>
                </div>
            </div>

            <div class="o_nav_dropdown pb-2" id="o_mobile_nav_dropdown">

                <div class="o_entry_btn wrapper">
                    <a href="#" class="btn btn-lg">Login</a>
                    <a href="#" class="btn btn-lg">Sign up</a>
                </div>

                <ul class="o_mobile_navtab wrapper">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
                    </li>
                    <li>
                        <a href="#">Products</a>
                    </li>
                    <li>
                        <a href="#">Key Features</a>
                    </li>
                    <li>
                        <a href="#">How To Use</a>
                    </li>
                    <li>
                        <a href="#">FAQ</a>
                    </li>
                    <li>
                        <a href="#">Reviews</a>
                    </li>
                </ul>

                <div class="o_mobile_contact wrapper pt-2">
                    <span>info@gmail.com</span>
                    <span class="ml-5">07065199444</span>
                </div>
            </div>
        </nav>

    </header>