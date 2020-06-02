<!-- header -->
<?php include_once '../components/header.php'; ?>

<main id="product-details-page">
    <div class="container">
        <div class="row border my-5 pb-3">
            <div class="col-12 col-md-4 offset-md-1">
                <div class="owl-carousel owl-theme product-views-slider">
                    <div class="item">
                        <img src="../assets/images/Orevia-cup.png" alt="" width="100%">

                    </div>
                    <div class="item">
                        <img src="../assets/images/Orevia-cup.png" alt="">

                    </div>
                </div>
                <div class="text-center">
                    <button id="prev-img" class="border-0">
                        <img src="../assets/images/orevia-cup-thumbnail.png" alt="" style="width: 40px">
                    </button>
                    <button id="next-img" class="border-0">
                        <img src="../assets/images/orevia-cup-thumbnail.png" alt="" style="width: 40px"></button></div>
            </div>
            <div class="col-12 col-md-6 offset-md-1">
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">
                                <h4>Orevia Body butter 150g <small><i>Almond oil</i></small></h4>
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
                                <span class="mx-2">4</span>
                                <button class="px-4 qty-btn add border-0 clr-primary"><i
                                        class="fas fa-plus"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" colspan="2">
                                <button class="px-5 my-2 border-0 bg-primary-clr">
                                    <i class="fas fa-shopping-cart mr-2 py-2"></i>
                                    Buy Now</button>
                                <button class="px-5 my-2 border-0 bg-shade-clr">
                                    <i class="fas fa-heart mr-2 py-2"></i>Save For Later</button>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <section class="row my-5 product-information-section">
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
                        <!-- 1. Virgin Coconut oil


                        2. Sweet Almond oil

                        3. Vitamin C & E! -->
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
                        <!-- 1. Deeply moisturises

                        2. Rejuvenates & Refreshes

                        3. Full of Natural goodness

                        4. Rich in vitamin C & E

                        5. Exquisite fragrance

                        6. Great Value For Money

                        7.Beneficial for all skin type. -->
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
                        <!-- 1) It has the natural goodness of Hibiscus, Aloe Vera and sweet Almond oil.

                        2) It nourishes and rejuvenates the skin, removes all body impurities leaving it soft supple and
                        fresh.

                        3) It is very effective for dry skin. -->
                    </div>
                    <div class="tab-pane fade" id="pills-shipping" role="tabpanel" aria-labelledby="pills-shipping-tab">
                        Delivery
                        Estimated delivery time: 1 - 2 days
                    </div>
                </div>

            </div>
        </section>
        <h5>N.B: No refund after payment</h5>
    </div>
</main>

<!-- footer -->
<?php include_once '../components/footer.php'; ?>