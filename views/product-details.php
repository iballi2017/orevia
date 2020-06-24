<!-- header -->
<?php include_once '../components/header_update.php'; ?>

<main id="product-details-page">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../">Home</a></li>
                <li class="breadcrumb-item"><a href="./product-page.php">product-page</a></li>
                <li class="breadcrumb-item active" aria-current="page">product-details</li>
            </ol>
        </nav>
        <div class="row border my-5 pb-3">
            <div class="col-12 col-md-4 offset-md-1">
                <div class="owl-carousel owl-theme product-views-slider">
                    <div class="item">
                        <img src="../assets/images/orevia-cup.png" class="img-fluid" alt="" width="100%">

                    </div>
                    <div class="item">
                        <img src="../assets/images/orevia-cup.png" class="img-fluid" alt="">

                    </div>
                </div>
                <div class="text-center">
                    <button id="prev-img" class="border-0">
                        <img src="../assets/images/orevia-cup-thumbnail.png" class="img-fluid" alt=""
                            style="width: 40px">
                    </button>
                    <button id="next-img" class="border-0">
                        <img src="../assets/images/orevia-cup-thumbnail.png" class="img-fluid" alt=""
                            style="width: 40px"></button></div>
            </div>
            <div class="col-12 col-md-6 offset-md-1">
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">
                                <h4>Orevia Body butter 150g <small style="color: #740774"><i>Almond oil</i></small></h4>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Price</th>
                            <td>#2000</td>
                        </tr>
                        <tr>
                            <th scope="row">Quantity</th>
                            <td colspan="">
                                <button class="px-4 qty-btn minus border-0 clr-primary">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <span class="mx-2 border py-1 px-3">4</span>
                                <button class="px-4 qty-btn add border-0 clr-primary"><i
                                        class="fas fa-plus"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" colspan="2">
                                <div class="d-flex align-center">
                                    <a href="#" class="py-2 px-5 my-2 mr-2 border-0 bg-primary-clr">
                                        <i class="fas fa-shopping-cart mr-2 py-2"></i>
                                        Buy Now</a>
                                    <button class="px-5 py-2 my-2 border-0 bg-shade-clr d-none d-md-block">
                                        <i class="fas fa-heart mr-2"></i>Save For Later</button>
                                    <button class="d-block d-md-none" style="background: none; border: none"><i
                                            class="fas fa-heart fa-2x ml-3" style="color: #61585b"></i></button></div>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <!-- product information for desktop screens -->
        <section class="row mt-3 product-information-section d-none d-md-block">
            <div class="col p-0">
                <ul class="nav nav-pills mb-3 border-bottom" id="pills-tab" role="tablist">
                    <li class="nav-item text-center" style="flex-basis: 20%">
                        <a class="nav-link active rounded-0 py-3" id="pills-ingredient-tab" data-toggle="pill"
                            href="#pills-ingredient" role="tab" aria-controls="pills-ingredient"
                            aria-selected="true">Ingredient</a>
                    </li>
                    <li class="nav-item text-center" style="flex-basis: 20%">
                        <a class="nav-link rounded-0 py-3" id="pills-keyFeatures-tab" data-toggle="pill"
                            href="#pills-keyFeatures" role="tab" aria-controls="pills-keyFeatures"
                            aria-selected="false">Key Features</a>
                    </li>
                    <li class="nav-item text-center" style="flex-basis: 20%">
                        <a class="nav-link rounded-0 py-3" id="pills-howToUse-tab" data-toggle="pill"
                            href="#pills-howToUse" role="tab" aria-controls="pills-howToUse" aria-selected="false">How
                            To Use</a>
                    </li>
                    <li class="nav-item text-center" style="flex-basis: 20%">
                        <a class="nav-link rounded-0 py-3" id="pills-benefits-tab" data-toggle="pill"
                            href="#pills-benefits" role="tab" aria-controls="pills-benefits"
                            aria-selected="false">Benefits</a>
                    </li>
                    <li class="nav-item text-center" style="flex-basis: 20%">
                        <a class="nav-link rounded-0 py-3" id="pills-shipping-tab" data-toggle="pill"
                            href="#pills-shipping" role="tab" aria-controls="pills-shipping"
                            aria-selected="false">Shipping</a>
                    </li>
                </ul>
                <div class="tab-content p-3" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-ingredient" role="tabpanel"
                        aria-labelledby="pills-ingredient-tab">

                        <ol>
                            <li>Virgin Coconut oil</li>
                            <li>Sweet Almond oil</li>
                            <li>Vitamin C & E!</li>
                        </ol>
                    </div>
                    <div class="tab-pane fade" id="pills-keyFeatures" role="tabpanel"
                        aria-labelledby="pills-keyFeatures-tab">
                        <ol>
                            <li>Deeply moisturises</li>
                            <li>Rejuvenates & Refreshes</li>
                            <li>Full of Natural goodness</li>
                            <li>Rich in vitamin C & E</li>
                            <li>Exquisite fragrance</li>
                            <li>Great Value For Money</li>
                            <li>Beneficial for all skin type.</li>
                        </ol>
                    </div>
                    <div class="tab-pane fade" id="pills-howToUse" role="tabpanel" aria-labelledby="pills-howToUse-tab">
                        Apply as part of your daily skincare routine to achieve maximum benefits of a well nourished
                        beautiful skin.
                    </div>
                    <div class="tab-pane fade" id="pills-benefits" role="tabpanel" aria-labelledby="pills-benefits-tab">
                        <ol>
                            <li>It has the natural goodness of Hibiscus, Aloe Vera and sweet Almond oil.</li>
                            <li>It nourishes and rejuvenates the skin, removes all body impurities leaving it soft
                                supple and
                                fresh.</li>
                            <li>It is very effective for dry skin.</li>
                        </ol>
                    </div>
                    <div class="tab-pane fade" id="pills-shipping" role="tabpanel" aria-labelledby="pills-shipping-tab">
                        Delivery
                        Estimated delivery time: 1 - 2 days
                    </div>
                </div>

            </div>
        </section>
        <!-- -->

        <!-- product information for mobile screens -->
        <section class="d-md-none">
            <div class="accordion product_info_accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-block btn-link collapsed description_btn" type="button"
                                data-toggle="collapse" data-target="#collapseIngredient-info" aria-expanded="true"
                                aria-controls="collapseIngredient-info">
                                <div class="description_btn_label">
                                    <span>Ingredient</span>
                                    <span>
                                        <i class="fas fa-sort-down"></i>
                                    </span>
                                </div>
                            </button>
                        </h2>
                    </div>

                    <div id="collapseIngredient-info" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <ol>
                                <li>Virgin Coconut oil</li>
                                <li>Sweet Almond oil</li>
                                <li>Vitamin C & E!</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-block btn-link collapsed description_btn" type="button"
                                data-toggle="collapse" data-target="#collapseKeyFeatures-info" aria-expanded="false"
                                aria-controls="collapseKeyFeatures-info">
                                <div class="description_btn_label">
                                    <span>Key features</span>
                                    <span>
                                        <i class="fas fa-sort-down"></i>
                                    </span>
                                </div>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseKeyFeatures-info" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <ol>
                                <li>Deeply moisturises</li>
                                <li>Rejuvenates & Refreshes</li>
                                <li>Full of Natural goodness</li>
                                <li>Rich in vitamin C & E</li>
                                <li>Exquisite fragrance</li>
                                <li>Great Value For Money</li>
                                <li>Beneficial for all skin type.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-block btn-link collapsed description_btn" type="button"
                                data-toggle="collapse" data-target="#collapseHoToUse-info" aria-expanded="false"
                                aria-controls="collapseHoToUse-info">

                                <div class="description_btn_label">
                                    <span>How to use</span>
                                    <span>
                                        <i class="fas fa-sort-down"></i>
                                    </span>
                                </div>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseHoToUse-info" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            Apply as part of your daily skincare routine to achieve maximum benefits of a well nourished
                            beautiful skin.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-block btn-link collapsed description_btn" type="button"
                                data-toggle="collapse" data-target="#collapseBenefit-info" aria-expanded="false"
                                aria-controls="collapseBenefit-info">
                                <div class="description_btn_label">
                                    <span>Benefits</span>
                                    <span>
                                        <i class="fas fa-sort-down"></i>
                                    </span>
                                </div>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseBenefit-info" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <ol>
                                <li>It has the natural goodness of Hibiscus, Aloe Vera and sweet Almond oil.</li>
                                <li>It nourishes and rejuvenates the skin, removes all body impurities leaving it soft
                                    supple and
                                    fresh.</li>
                                <li>It is very effective for dry skin.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-block btn-link collapsed description_btn" type="button"
                                data-toggle="collapse" data-target="#collapseShipping-info" aria-expanded="false"
                                aria-controls="collapseShipping-info">
                                <div class="description_btn_label">
                                    <span>Shipping</span>
                                    <span>
                                        <i class="fas fa-sort-down"></i>
                                    </span>
                                </div>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseShipping-info" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            Delivery
                            Estimated delivery time: 1 - 2 days
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->


        <aside class="my-3">N.B: No refund after payment</aside>
    </div>
</main>

<!-- footer -->
<?php include_once '../components/footer.php'; ?>