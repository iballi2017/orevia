<!-- header -->
<?php include_once '../components/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-4 container">My Dashboard</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-3">
            <!-- sidebar -->
            <?php
// include_once '../components/user-account-nav.php';
?><div class="nav flex-column nav-pills bg-light">
                <a class="account-tab-link" href="../views/user-profile.php">My Profile</a>
                <a class="account-tab-link active" href="../views/user-orders.php">Orders</a>
                <a class="account-tab-link" href="../views/user-wishlist.php">Wish
                    Lists</a>
                <!-- <a class="account-tab-link active rounded-0 mb-3" data-toggle="pill" href="../views/user-profile.php">My
                Profile</a>
            <a class="account-tab-link rounded-0 mb-3" data-toggle="pill" href="./">Orders</a>
            <a class="account-tab-link rounded-0 mb-3" data-toggle="pill" href="#">Wish
                Lists</a> -->
            </div>
        </div>



        <main class="col-12 col-md-9 mb-3 mt-3 mt-sm-0" id="user-orders-page">

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
                                <td><button class="btn-sm shop-card-btn">View</button></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>20/01/2020</td>
                                <td>Olayemi Joshua</td>
                                <td>#5300.99</td>
                                <td class="text-success">Delivered</td>
                                <td><button class="btn-sm shop-card-btn">View</button></td>
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