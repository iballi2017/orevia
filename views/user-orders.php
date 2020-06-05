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



        <main class="col-12 col-md-9 mb-3" id="user-profile-page">

            <div class="form-wrapper p-5">

                <h1>Orders</h1>
            </div>

        </main>
    </div>
</div>
<!-- footer -->
<?php include_once '../components/footer.php'; ?>