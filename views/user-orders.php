<!-- header -->
<?php include_once '../components/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <button class="bo_back_history border-0" onclick="goBack()">
                <i class="fas fa-long-arrow-alt-left fa-2x"></i></button>
        </div>
    </div>
    <div class="row d-none d-md-block">
        <div class="col">
            <h3 class="my-4 container">My Dashboard</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-3 d-none d-md-block">
            <!-- sidebar -->
            <?php  ?><div class="nav flex-column nav-pills bg-light">
                <a class="account-tab-link" href="../views/user-profile.php">My Profile</a>
                <a class="account-tab-link active" href="../views/user-orders.php">Orders</a>
                <a class="account-tab-link" href="../views/user-wishlist.php">Wish
                    Lists</a>
            </div>
        </div>



        <main class="col-12 col-md-9 mb-3 mt-3 mt-md-0" id="user-orders-page">

            <div class="form-wrapper p-3">
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Order Number</th>
                                <th scope="col">Date</th>
                                <th scope="col">Ship To</th>
                                <th scope="col">Order Total</th>
                                <th scope="col">Status</th>
                                <th scope="col">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>09/11/2019</td>
                                <td>Akinola Oluwaobi</td>
                                <td>#4,000.00</td>
                                <td class="text-primary">Processing</td>
                                <td><a class="btn-sm white_btn" href="./user-order-details.php">View</a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>20/01/2020</td>
                                <td>Olayemi Joshua</td>
                                <td>#5300.99</td>
                                <td class="text-success">Delivered</td>
                                <td><a class="btn-sm white_btn" href="./user-order-details.php">View</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </main>
    </div>
</div>
<!-- footer -->
<?php include_once '../components/footer.php'; ?>