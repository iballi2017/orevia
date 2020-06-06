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
?>
            <div class="nav flex-column nav-pills bg-light">
                <a class="account-tab-link" href="../views/user-profile.php">My Profile</a>
                <a class="account-tab-link" href="../views/user-orders.php">Orders</a>
                <a class="account-tab-link active" href="../views/user-wishlist.php">Wish
                    Lists</a>
                <!-- <a class="account-tab-link active rounded-0 mb-3" data-toggle="pill" href="../views/user-profile.php">My
                Profile</a>
            <a class="account-tab-link rounded-0 mb-3" data-toggle="pill" href="./">Orders</a>
            <a class="account-tab-link rounded-0 mb-3" data-toggle="pill" href="#">Wish
                Lists</a> -->
            </div>
        </div>



        <main class="col-12 col-md-9 mb-3 mt-3 mt-sm-0" id="user-wishlist-page">

            <div class="form-wrapper p-3">
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <tbody>
                            <tr class="border-bottom">
                                <td width="20%">
                                    <img src="../assets/images/orevia-fluid.png" class="img-fluid" alt="">
                                </td>
                                <td width="60%">
                                    <ul class="p-0">
                                        <li><b>Orevia Body butter</b></li>
                                        <li>150g</li>
                                        <li><i>Almond</i></li>
                                        <li><b>#1000.00</b></li>
                                    </ul>
                                </td>
                                <td width="10%">
                                    <button class="btn-sm border-0 cart-btn"><i
                                            class="fas fa-shopping-cart"></i></button>
                                </td>
                                <td width="10%">
                                    <button class="btn-sm border-0 delete-btn"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr class="border-bottom">
                                <td width="20%">
                                    <img src="../assets/images/orevia-fluid.png" class="img-fluid" alt="">
                                </td>
                                <td width="60%">
                                    <ul class="p-0">
                                        <li><b>Orevia Body butter</b></li>
                                        <li>150g</li>
                                        <li><i>Almond</i></li>
                                        <li><b>#1000.00</b></li>
                                    </ul>
                                </td>
                                <td width="10%">
                                    <button class="btn-sm border-0 cart-btn"><i
                                            class="fas fa-shopping-cart"></i></button>
                                </td>
                                <td width="10%">
                                    <button class="btn-sm border-0 delete-btn"><i class="fas fa-trash"></i></button>
                                </td>
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