<!-- header -->
<?php include_once '../components/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="my-4 container">My Dashboard</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-3 d-none d-md-block">
            <!-- sidebar -->
            <div class="nav flex-column nav-pills bg-light">
                <a class="account-tab-link" href="../views/user-profile.php">My Profile</a>
                <a class="account-tab-link active" href="../views/user-orders.php">Orders</a>
                <a class="account-tab-link" href="../views/user-wishlist.php">Wish
                    Lists</a>
            </div>
        </div>



        <main class="col-12 col-md-9 mb-3 mt-3 mt-md-0" id="user-order-details-page">

            <div class="form-wrapper p-3">
                <h5> <span><a href="./user-orders.php"><i class="fas fa-arrow-left mr-3"></i></a></span> Order
                    Details</h5>
                <hr />
                <table>
                    <tbody>
                        <tr>
                            <td>2 Item</td>
                        </tr>
                        <tr>
                            <td>Placed on 29-11-2020</td>
                        </tr>
                        <tr>
                            <td>Total: #4000</td>
                        </tr>
                    </tbody>
                </table>

                <hr />

                <h5>ITEMS IN YOUR ORDER</h5>
                <div class="border">
                    <div class="p-3">
                        Status : DELIVERED
                    </div>
                    <hr class="m-0" />
                    <div class="row p-3">
                        <!-- <div class="col-12 col-md-3">
                            <img src="../assets/images/orevia-cup.png" class="img-fluid mb-2"
                                alt="product item thumbnail">
                        </div>
                        <div class="col-12 col-md-9">
                            <table>
                                <thead>
                                    <tr>
                                        <th colspan="2">
                                            Orevia Body butter 150 ALMOIND OIL
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            QUANTITY
                                        </td>
                                        <td>
                                            2
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            PRIICE
                                        </td>
                                        <td>
                                            #2000
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> -->

                        <div class="col">
                            <figure class="figure m-0 product_image_caption">
                                <img src="../assets/images/orevia-cup.png" class="figure-img img-fluid mr-3"
                                    alt="product item thumbnail">
                                <figcaption class="figure-caption text-left">
                                    <div class="table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th colspan="2">
                                                        Orevia Body butter 150 ALMOIND OIL
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        QUANTITY
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        PRIICE
                                                    </td>
                                                    <td>
                                                        #2000
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- <h6>Orevia Body butter 150 ALMOIND OIL</h6> -->
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>

                <div class="my-4">
                    <div
                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); grid-gap: 2em;">
                        <div class="border" style="padding: 1em">

                            <h5>PAYMENT INFORMATION
                            </h5>

                            <dl class="mt-3">
                                <dt>Payment Method</dt>
                                <dd>Bank Transfer / Third-party</dd>
                                <dd>payment interface</dd>
                            </dl>

                            <dl>
                                <dt>Payment Details</dt>
                                <dd>Items total: ₦ 4000</dd>
                                <dd>payment interface</dd>
                                <dd>Shipping Fees:</dd>
                                <dd class="mt-5">Total: ₦ 4000</dd>
                            </dl>
                        </div>
                        <div class="border" style="padding: 1em">
                            <h5>DELIVERY INFORMATION
                            </h5>

                            <dl class="mt-3">
                                <dt>Delivery Method</dt>
                                <dd>Standard Door Delivery</dd>
                            </dl>

                            <dl class="mt-4">
                                <dt>Shipping Address</dt>
                                <dd>AKINOLA OLUWATOBI</dd>
                                <dd class="mt-3">6a kolawole Shonibare Street, Ilupeju, Lagos Nigeria
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>
<!-- footer -->
<?php include_once '../components/footer.php'; ?>