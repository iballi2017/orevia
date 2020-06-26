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
            <!-- sidebar -->
            <div class="nav flex-column nav-pills bg-light">
                <a class="account-tab-link active" href="../views/user-profile.php">My Profile</a>
                <a class="account-tab-link" href="../views/user-orders.php">Orders</a>
                <a class="account-tab-link" href="../views/user-wishlist.php">Wish
                    Lists</a>
            </div>
        </div>



        <main class="col-12 col-md-9 mb-3 mt-3 mt-md-0" id="user-profile-page">

            <div class="form-wrapper p-3 p-md-5">
                <h3 class="mb-5">Hello Akinola, <small>Welcome to your profile</small></h3>

                <form action="#">
                    <fieldset>
                        <legend>
                            <h5 class="mb-4 form-title">Personal Details</h5>
                        </legend>

                        <div class="form-group row">
                            <label for="fullName" class="col-sm-3 col-form-label">Full Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fullName">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobileNumber" class="col-sm-3 col-form-label">Mobile Number</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="mobileNumber">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Current Email
                                Address</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="oldPassword" class="col-sm-3 col-form-label">Old Password</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="oldPassword" placeholder="Edit Password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="newPassword" class="col-sm-3 col-form-label">New Password</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="newPassword" placeholder="Edit Password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="confirmPassword" class="col-sm-3 col-form-label">Confirm Password
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="confirmPassword"
                                    placeholder="Edit Password">
                            </div>
                        </div>

                        <button type="submit" class="white_btn btn-md py-2 px-5 rounded user_profile_update_btn">Update
                            Profile</button>
                    </fieldset>
                </form>
            </div>

        </main>
    </div>
</div>
<!-- footer -->
<?php include_once '../components/footer.php'; ?>