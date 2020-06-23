<!-- header -->
<?php include_once '../components/header_update.php'; ?>

<main id="review-page">

    <div class="container">

        <form action="#">
            <div class="inner-wrapper">

                <div class="section-head bg-secondary-clr mt-5">
                    <div class="container py-2">
                        <h2>REVIEW</h2>
                    </div>
                </div>
                <div class="p-2 text-white" style="background-color: #E2BECA">
                    Help us get better by giving your feedback
                </div>

                <div>
                    <div class="card mb-3 border-0" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="../assets/images/orevia-cup.png" class="card-img img-fluid" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Orevia Body butter</h5>
                                    <p class="card-text">
                                        <div>
                                            <h6>Flavour: <small>Almond</small></h6>
                                        </div>
                                        <div>
                                            <h6>Quantity: <small>1</small></h6>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-5" />
                </div>

                <fieldset class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="inputName">Name</label>
                                    <input type="text" class="form-control" id="inputName">
                                </div>
                                <div class="form-group col-12">
                                    <label for="rating" style="display: block">Rate</label>

                                    <!-- star rating -->
                                    <span class="star-rating">
                                        <i class="far fa-star text-warning fa-3x review-star"></i>
                                        <i class="far fa-star text-warning fa-3x review-star"></i>
                                        <i class="far fa-star text-warning fa-3x review-star"></i>
                                        <i class="far fa-star text-warning fa-3x review-star"></i>
                                        <i class="far fa-star text-warning fa-3x review-star"></i>
                                    </span>

                                    <!-- star rating hidden input field-->
                                    <input type="text" id="rating_value" style="visibility: hidden">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="inputName">Comment</label>
                                    <textarea type="text" rows="4" class="form-control" id="inputName"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <button type="submit" class="modify-cart-btn px-5 primary_btn btn-lg">Submit</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </form>
    </div>

</main>

<!-- footer -->
<?php include_once '../components/footer.php'; ?>