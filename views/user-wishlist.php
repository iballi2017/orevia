<!-- header -->
<?php include_once '../components/header_update.php'; ?>

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
            <div class="nav flex-column nav-pills bg-light">
                <a class="account-tab-link" href="../views/user-profile.php">My Profile</a>
                <a class="account-tab-link" href="../views/user-orders.php">Orders</a>
                <a class="account-tab-link active" href="../views/user-wishlist.php">Wish
                    Lists</a>
            </div>
        </div>



        <main class="col-12 col-md-9 mb-3 mt-3 mt-md-0" id="user-wishlist-page">

            <div class="form-wrapper p-3">
                <div class="bg-white p-2 border-bottom"
                    style="display: flex; justify-content: space-between; align-items: flex-start">

                    <figure class="figure m-0" style="display: flex; align-items: flex-start">
                        <img src="../assets/images/orevia-fluid.png" class="figure-img img-fluid mr-3"
                            alt="product item thumbnail">
                        <figcaption class="figure-caption text-left">
                            <ul class="p-0">
                                <li><b>Orevia Body butter</b></li>
                                <li>150g</li>
                                <li><i>Almond</i></li>
                                <li><b>#1000.00</b></li>
                            </ul>
                        </figcaption>
                    </figure>

                    <div>
                        <button class="btn-sm border-0 cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        <button class="btn-sm border-0 delete-btn"><i class="fas fa-trash"></i></button>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>
<!-- footer -->
<?php include_once '../components/footer.php'; ?>