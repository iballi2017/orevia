<?php
include_once '../components/header.php'; ?>

<main id="product-page">

    <div class="page-title py-2">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">product-page</li>
                </ol>
            </nav>
            <h1 class="text-center">Orevia Body butter</h1>
        </div>

    </div>


    <div class="container">
        <div class="row">
            <div class="col">
                <button class="bo_back_history border-0" onclick="goBack()">
                    <i class="fas fa-long-arrow-alt-left fa-2x"></i></button>
            </div>
        </div>
    </div>



    <section id="our-products">
        <div class="container">
            <div class="row my-5">
                <div class="col">
                    <!-- Owl carousel HTML -->
                    <div class="owl-carousel product_list_slider">
                        <div class="card-body border product-card">
                            <figure class="text-center">
                                <img src="../assets/images/orevia-cup.png" class="img-fluid" alt="Trulli"
                                    style="width: 100%;" />
                                <figcaption>
                                    <h4>Orevia Body butter</h4>
                                    <span class="product-content-qty">(150ml)</span>
                                    <h4 class="price">#2000</h4>
                                    <span class="star-rating">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                    </span>

                                    <button class="btn-block py-2 mt-2 white_btn">
                                        SHOP NOW
                                    </button>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="card-body border product-card">
                            <figure class="text-center">
                                <img src="../assets/images/orevia-cup.png" class="img-fluid" alt="Trulli"
                                    style="width: 100%;" />
                                <figcaption>
                                    <h4>Orevia Body butter</h4>
                                    <span class="product-content-qty">(150ml)</span>
                                    <h4 class="price">#2000</h4>
                                    <span class="star-rating">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                    </span>

                                    <button class="btn-block py-2 mt-2 white_btn">
                                        SHOP NOW
                                    </button>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="card-body border product-card">
                            <figure class="text-center">
                                <img src="../assets/images/orevia-cup.png" class="img-fluid" alt="Trulli"
                                    style="width: 100%;" />
                                <figcaption>
                                    <h4>Orevia Body butter</h4>
                                    <span class="product-content-qty">(150ml)</span>
                                    <h4 class="price">#2000</h4>
                                    <span class="star-rating">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                    </span>

                                    <button class="btn-block py-2 mt-2 white_btn">
                                        SHOP NOW
                                    </button>
                                </figcaption>
                            </figure>
                        </div>
                    </div>


                    <div class="custom_control_nav">
                        <button class="product_prev_nav"></button>
                        <button class="product_next_nav"></button></div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php include_once '../components/footer.php'; ?>