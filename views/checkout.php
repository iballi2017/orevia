<!-- header -->
<?php include_once '../components/header.php'; ?>

<main id="checkout-page">

    <div class="container">
        <form action="#">
            <div class="inner-wrapper form-wrapper">

                <div class="section-head bg-secondary-clr my-5">
                    <div class="container py-2">
                        <h2>CHECK OUT</h2>
                    </div>
                </div>

                <fieldset class="container">
                    <legend>1. RECEIVER’S DETAILS</legend>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputFirstName">First Name</label>
                            <input type="text" class="form-control" id="inputFirstName">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastFirstName">Last Name</label>
                            <input type="text" class="form-control" id="lastFirstName">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Email Address</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastPhone">Phone number</label>
                            <input type="text" class="form-control" id="lastPhone">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputStreet">Street Address</label>
                            <input type="text" class="form-control" id="inputStreet">
                        </div>
                        <div class="form-group col-md-6">

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="town_city">Town/City</label>
                                    <div class="select-wrapper">
                                        <select class="form-control rounded-0" name="town_city" id="town_city">
                                            <option value="Town A">Town A</option>
                                            <option value="Town B">Town B</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="state">State</label>
                                    <div class="select-wrapper">
                                        <select class="form-control rounded-0" name="state" id="state">
                                            <option value="Lagos">Lagos</option>
                                            <option value="Abuja">Abuja</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="inner-wrapper form-wrapper mt-5">

                <fieldset class="container">
                    <legend>2. PAYMENT METHOD</legend>

                    <div class="form-row form-group">
                        <div class="col">
                            <input type="radio" id="bank_transfer" name="payment_method" value="Bank Transfer">
                            <label for="bank_transfer">
                                <span class="custom-radio"></span>
                                Bank Transfer</label>

                        </div>
                        <div class="col">

                            <input type="radio" id="third_party" name="payment_method" value="Third_party payment">
                            <label for="third_party">
                                <span class="custom-radio"></span>
                                Third-party payment</label>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="inner-wrapper form-wrapper mt-5">

                <div class="section-head bg-secondary my-5">
                    <h4>CHECK OUT</h4>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt repellendus nulla incidunt harum aut
                    officiis est, maiores reprehenderit, enim voluptatem aspernatur! Reiciendis perspiciatis cupiditate
                    quam
                    veritatis sequi voluptas nam totam?</p>
            </div>
        </form>
    </div>


</main>



<!-- footer -->
<?php include_once '../components/footer.php'; ?>