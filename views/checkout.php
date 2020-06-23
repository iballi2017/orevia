<!-- header -->
<?php include_once '../components/header_update.php'; ?>

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
                        <div class="form-group col-6">
                            <label for="inputEmail">Email Address</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="form-group col-6">
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
                                <div class="form-group col-6">
                                    <label for="town_city">Town/City</label>
                                    <div class="select-wrapper">
                                        <select class="form-control rounded-0" name="town_city" id="town_city">
                                            <option value="Town A">Town A</option>
                                            <option value="Town B">Town B</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-6">
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
                <fieldset class="accordion container" id="accordionExample">
                    <div class="py-4" id="headingOne" style="display: flex; align-items: center">

                        <legend>2. PAYMENT METHOD</legend>
                        <div type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            <i class="fas fa-sort-down fa-2x p-0" style="color: #740774"></i>
                        </div>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">


                            <div class="form-row form-group">
                                <div class="col-12 col-md-6">
                                    <div style=" display:flex; align-items: center" onclick="showAccountDetails()">

                                        <input type="radio" id="bank_transfer" name="payment_method"
                                            value="Bank Transfer">
                                        <label for="bank_transfer">
                                            <span class="custom-radio"></span>
                                            Bank Transfer</label>
                                    </div>

                                </div>
                                <div class="col-12 col-md-6" onclick="showAccountDetails()">

                                    <input type="radio" id="third_party" name="payment_method"
                                        value="Third_party payment">
                                    <label for="third_party">
                                        <span class="custom-radio"></span>
                                        Third-party Payment Interface</label>
                                </div>
                            </div>
                            <div class="row" id="seller_bank_details">
                                <div class="col-12 col-sm-7">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Bank Account Name:</th>
                                                <th scope="col">{{Seller's Account Name}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Bank Account Number:</th>
                                                <th scope="col">{{Seller's Account Number}}</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>

            </div>
            <div class="inner-wrapper form-wrapper mt-5">

                <div class="section-head bg-secondary-clr my-5">
                    <div class="container py-2">
                        <h2>ORDER SUMMARY</h2>
                    </div>
                </div>
                <div class="container">
                    <h5>YOUR ORDER ( 1 ITEM )</h5>
                    <hr style="border-top: 2px solid #4d063d" />
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" colspan="4">1 Item</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" colspan="3">Sub Total</th>
                                <td>#2,000.00</td>
                            </tr>
                            <tr>
                                <th scope="row" colspan="3">Shipping</th>
                                <td>--</td>
                            </tr>
                            <tr>
                                <th scope="row" colspan="3">VAT</th>
                                <td>--</td>
                            </tr>
                            <tr class="border-top">
                                <th scope="row" colspan="3">Total to pay</th>
                                <td>#2,000.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="form-group text-center" style="display: flex; justify-content: center; flex-wrap: wrap">
                <!-- <button class="modify-cart-btn px-5 white_btn btn-lg">Modify Cart</button>
                <button class="modify-cart-btn px-5 primary_btn btn-lg">Confirm Order</button> -->
                <a href="#" class="modify-cart-btn px-5 white_btn btn-lg mr-2 my-1">Modify Cart</a>
                <a href="#" class="modify-cart-btn px-5 primary_btn btn-lg my-1">Confirm Order</a>
            </div>
        </form>
    </div>


</main>



<!-- footer -->
<?php include_once '../components/footer.php'; ?>