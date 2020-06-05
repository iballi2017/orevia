<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- favicon -->
    <link rel="icon" href="./assets/images/favicon.png" type="image/gif" sizes="16x16" />
    <title>
        OREVIA | Beauty Skin Care | Skincare | Beauty | Health | Lagos Nigeria |
        Abuja
    </title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <!-- bootstrap 4.3.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap.min.css" />
    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="./OwlCarousel2-2.3.4/owl.carousel.min.css" />
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/owl.theme.default.min.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="./css/main.css" />
</head>

<body data-spy="scroll" data-target="#main-header" data-offset="0">
    <div class="top-bar">
        <div class="container top-bar-inner">
            <div class="contact-info">
                <span class="email">oreviaskincare@gmail.com</span>
                <span class="phone ml-sm-4">07019920332</span>
            </div>
            <div class="brand-container d-none d-md-block">
                <!-- <h2>Brand logo</h2> -->
                <h2><img src="./assets/images/Orevia-Logo.png" alt="" /></h2>
            </div>
            <div class="access-container">
                <ul class="access-nav">
                    <li class="mr-lg-4 mr-3 mr-sm-3 mr-md-4">
                        <a href="./views/account.php" class="customLink">Akinola</a>
                    </li>
                    <li class="mr-lg-4 mr-3 mr-sm-3 mr-md-4">
                        <a href="#" class="customLink">Logout</a>
                    </li>
                    <li class="mr-lg-4 mr-3 mr-sm-3 mr-md-4">
                        <a href="./views/login.php" class="customLink">Login</a>
                    </li>
                    <li class="mr-lg-4 mr-3 mr-sm-3 mr-md-4">
                        <a href="./views/register.php" class="customLink">Sign up</a>
                    </li>
                    <li>
                        <a href="./checkout.php" class="customLink">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="badge badge-light bg-primary-clr">4</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <header id="main-header">

        <nav class="navbar navbar-expand-lg navbar-light main-nav">
            <a class="navbar-brand d-lg-none" href="./">
                <img src="./assets/images/Orevia-logo-alt.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                <i class="fas fa-ellipsis-v mobile-menu-toggler"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link customLink" href="#">
                            Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link customLink" href="#about-us">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link customLink" href="./views/product-page.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link customLink" href="#">Key Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link customLink" href="#">how to use</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link customLink" href="#faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link customLink" href="#reviews">Reviews</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="hero">
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner" style="position: relative;">
                        <div class="custom-slider-nav text-center py-2">
                            <button class="bg-primary-clr btn-sm hero-slide-nav" id="prev"></button>
                            <button class="bg-primary-clr btn-sm hero-slide-nav" id="next"></button>
                        </div>
                        <div class="carousel-item active">
                            <!-- <img src="https://source.unsplash.com/user/erondu/1600x659" class="d-block w-100"
                                alt="slider-1" /> -->
                            <img src="./assets/images/the-honest-company-P9ayWrBn63c-unsplash.png" class="d-block w-100"
                                alt="slider-1" />
                            <div class="carousel-caption d-none d-md-block">
                                <div class="carousel-caption-inner">
                                    <h1>First slide label</h1>
                                    <p>
                                        Nulla vitae elit libero, a pharetra augue mollis interdum.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!-- <img src="https://source.unsplash.com/user/erondu/1600x659" class="d-block w-100"
                                alt="slider-2" /> -->
                            <img src="./assets/images/deanna-alys-6LBBOwkPzyQ-unsplash.png" class="d-block w-100"
                                alt="slider-1" />
                            <div class="carousel-caption d-none d-md-block">
                                <div class="carousel-caption-inner">
                                    <h1>Second slide label</h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!-- <img src="https://source.unsplash.com/user/erondu/1600x659" class="d-block w-100"
                                alt="slider-3" /> -->
                            <img src="./assets/images/the-honest-company-P9ayWrBn63c-unsplash.png" class="d-block w-100"
                                alt="slider-1" />
                            <div class="carousel-caption d-none d-md-block">
                                <div class="carousel-caption-inner">
                                    <h1>Third slide label</h1>
                                    <p>
                                        Praesent commodo cursus magna, vel scelerisque nisl
                                        consectetur.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- <section id="test">
        <div class="container">
          <div class="row">
            <div class="col">
              <button
                class="btn btn-secondary btn-sm hero-slide-nav"
                id="prev"
              ></button>
              <button
                class="btn btn-secondary btn-sm hero-slide-nav"
                id="next"
              ></button>
            </div>
          </div>
        </div>
      </section> -->

        <section id="about-us">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title display-5 mb-4">About us</h2>
                </div>
                <article class="lead">
                    <p>
                        For those who have seen the Earth from space, and for the hundreds
                        and perhaps thousands more who will, the experience most certainly
                        changes your perspective. The things that we share in our world
                        are far more valuable than those which divide us. It suddenly
                        struck me that that tiny pea, pretty and blue, was the Earth. I
                        put up my thumb and shut one eye, and my thumb blotted out the
                        planet Earth. I didn’t feel like a giant. I felt very, very small.
                        Science has not yet mastered prophecy. We predict too much for the
                        next year and yet far too little for the next 10.
                    </p>
                </article>
            </div>
        </section>

        <section id="our-products">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title display-5 mb-4">Our Products</h2>
                </div>

                <div class="row mt-5">
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card shadow border-0 my-2">
                            <div class="card-body product-card">
                                <figure class="text-center">
                                    <img src="./assets/images/Orevia-bottle.png" alt="Trulli" style="width: 100%;" />
                                    <figcaption>
                                        <h4>Orevia Body butter</h4>
                                        <span class="product-content-qty">(150ml)</span>
                                        <h4 class="price">#2000</h4>
                                        <span class="star-rating">
                                            <i class="far fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                        </span>

                                        <button class="btn-block py-2 mt-2 shop-card-btn">
                                            SHOP NOW
                                        </button>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card shadow border-0 my-2">
                            <div class="card-body product-card">
                                <figure class="text-center">
                                    <img src="./assets/images/Orevia-cup.png" alt="Trulli" style="width: 100%;" />
                                    <figcaption>
                                        <h4>Orevia Body butter</h4>
                                        <span class="product-content-qty">(150ml)</span>
                                        <h4 class="price">#5000</h4>
                                        <span class="star-rating">
                                            <i class="far fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                        </span>

                                        <button class="btn-block py-2 mt-2 shop-card-btn">
                                            SHOP NOW
                                        </button>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card shadow border-0 my-2">
                            <div class="card-body product-card">
                                <figure class="text-center">
                                    <img src="./assets/images/Orevia-cup.png" alt="Trulli" style="width: 100%;" />
                                    <figcaption>
                                        <h4>Orevia Body butter</h4>
                                        <span class="product-content-qty">(150ml)</span>
                                        <h4 class="price">#2000</h4>
                                        <span class="star-rating">
                                            <i class="far fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                        </span>

                                        <button class="btn-block py-2 mt-2 shop-card-btn">
                                            SHOP NOW
                                        </button>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="reviews">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title display-5 mb-4">Reviews</h2>
                </div>
                <div class="row">
                    <div class="col">
                        <!-- Set up your HTML -->
                        <div class="owl-carousel hero-slider owl-theme">
                            <div>
                                <div class="card-body">
                                    <div class="card-body bg-0">
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Animi, deleniti quo. Quas fugiat incidunt ipsam.
                                        </p>
                                        <h6>Oluwa Kelvin</h6>
                                        <p>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card-body">
                                    <div class="card-body bg-0">
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Animi, deleniti quo. Quas fugiat incidunt ipsam.
                                        </p>
                                        <h6>Oluwa Kelvin</h6>
                                        <p>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card-body">
                                    <div class="card-body bg-0">
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Animi, deleniti quo. Quas fugiat incidunt ipsam.
                                        </p>
                                        <h6>Oluwa Kelvin</h6>
                                        <p>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card-body">
                                    <div class="card-body bg-0">
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Animi, deleniti quo. Quas fugiat incidunt ipsam.
                                        </p>
                                        <h6>Oluwa Kelvin</h6>
                                        <p>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card-body">
                                    <div class="card-body bg-0">
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Animi, deleniti quo. Quas fugiat incidunt ipsam.
                                        </p>
                                        <h6>Oluwa Kelvin</h6>
                                        <p>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card-body">
                                    <div class="card-body bg-0">
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Animi, deleniti quo. Quas fugiat incidunt ipsam.
                                        </p>
                                        <h6>Oluwa Kelvin</h6>
                                        <p>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card-body">
                                    <div class="card-body bg-0">
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Animi, deleniti quo. Quas fugiat incidunt ipsam.
                                        </p>
                                        <h6>Oluwa Kelvin</h6>
                                        <p>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="faq">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title display-5 mb-4">Faq</h2>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="accordion" id="accordionExample">
                            <div class="card rounded-0">
                                <div class="card-header" id="headingOne">
                                    <div class="float-left">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Hic nisi ob sit?
                                    </div>
                                    <h6 class="mb-0">
                                        <button class="float-right faq-btn" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <strong><i class="fas fa-minus fa-2x"></i></strong>
                                        </button>
                                    </h6>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia
                                        aute, non cupidatat skateboard dolor brunch. Food truck
                                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                        tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                        helvetica, craft beer labore wes anderson cred nesciunt
                                        sapiente ea proident. Ad vegan excepteur butcher vice
                                        lomo. Leggings occaecat craft beer farm-to-table, raw
                                        denim aesthetic synth nesciunt you probably haven't heard
                                        of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0">
                                <div class="card-header" id="headingTwo">
                                    <div class="float-left">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Hic nisi obcaecati ea eum maiores?
                                    </div>
                                    <h6 class="mb-0">
                                        <button class="float-right faq-btn" type="button" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            <strong><i class="fas fa-minus fa-2x"></i></strong>
                                        </button>
                                    </h6>
                                </div>

                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia
                                        aute, non cupidatat skateboard dolor brunch. Food truck
                                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                        tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                        helvetica, craft beer labore wes anderson cred nesciunt
                                        sapiente ea proident. Ad vegan excepteur butcher vice
                                        lomo. Leggings occaecat craft beer farm-to-table, raw
                                        denim aesthetic synth nesciunt you probably haven't heard
                                        of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 border-right pr-5 my-3">
                    <img src="../assets/images/Orevia-Logo.png" alt="" />
                    <form action="#">
                        <p class="mt-5">
                            Subscribe to our newsletter to get update our latest offers and
                            product
                        </p>

                        <div class="newsletter-form-grp">
                            <input type="email" name="email" id="email" placeholder="Enter Your Email Address"
                                aria-label="Enter Your Email Address" class="pl-3" />
                            <button type="submit">
                                <!-- <i class="fas fa-angle-right"></i> -->
                            </button>
                        </div>
                    </form>
                </div>

                <div class="col-12 col-md-4 my-3">
                    <h4 class="footer-section-title">
                        Contact us
                    </h4>
                    <ul style="padding: 0; list-style: none; line-height: 2;">
                        <li>Address</li>
                        <li>Mobile number: 07019920332</li>
                        <li>Email: oreviaskincare@gmail.com</li>
                    </ul>
                </div>

                <div class="col-12 col-md-4 my-3">
                    <h4 class="footer-section-title">
                        Blog
                    </h4>

                    <ul class="blog-container">
                        <li class="blog-item">
                            <div class="row">
                                <div class="col-8">
                                    <div><small>February 27, 2019</small></div>
                                    <div class="blog-link">
                                        <strong>
                                            <a href="#" class="customLink">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit...
                                            </a>
                                        </strong>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <img src="../assets/images/blog-thumbnail.png" alt="" class="blog-thumbnail" />
                                </div>
                            </div>
                        </li>
                        <li class="blog-item">
                            <div class="row">
                                <div class="col-8">
                                    <div><small>February 27, 2019</small></div>
                                    <div class="blog-link">
                                        <strong>
                                            <a href="#" class="customLink">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit...
                                            </a>
                                        </strong>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <img src="../assets/images/blog-thumbnail.png" alt="" class="blog-thumbnail" />
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row border-top mt-5 pt-4">
                <div class="col-12 col-md-3">
                    2020 &copy; Orevia. All Rights Reserved.
                </div>
                <div class="col-12 col-md-3 text-md-center">
                    <a href="#" class="customLink">Terms and conditions</a>
                </div>
                <div class="col-12 col-md-3 text-md-center">
                    <a href="#" class="customLink">Privacy Policy</a>
                </div>
                <div class="col-12 col-md-3">
                    <!-- <span>
              <a href="#"><i class="fab fa-twitter-square"></i></a>
            </span>
            <span>
              <a href="#"><i class="fab fa-facebook-square"></i></a>
            </span>
            <span>
              <a href="#"><i class="fab fa-instagram-square"></i></a>
            </span> -->

                    <ul class="footer-social-icons">
                        <li>
                            <a href="#" class="customLink"><i class="fab fa-twitter-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#" class="customLink"><i class="fab fa-facebook-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#" class="customLink"><i class="fab fa-instagram-square fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- bootstrap 4.3.1 -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="./bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <!-- owl carousel -->
    <script src="./OwlCarousel2-2.3.4/owl.carousel.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>