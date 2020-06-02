<!-- header -->
<?php include_once '../components/header.php'; ?>

<main id="account-page">

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="my-4">My Dashboard</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3 bg-light px-0 my-3 py-5 account-sidebar">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="account-tab-link active rounded-0 mb-3" id="v-pills-my-profile-tab" data-toggle="pill"
                        href="#v-pills-my-profile" role="tab" aria-controls="v-pills-my-profile" aria-selected="true">My
                        Profile</a>
                    <a class="account-tab-link rounded-0 mb-3" id="v-pills-orders-tab" data-toggle="pill"
                        href="#v-pills-orders" role="tab" aria-controls="v-pills-orders"
                        aria-selected="false">Orders</a>
                    <a class="account-tab-link rounded-0 mb-3" id="v-pills-wishlists-tab" data-toggle="pill"
                        href="#v-pills-wishlists" role="tab" aria-controls="v-pills-wishlists"
                        aria-selected="false">Wish Lists</a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-my-profile" role="tabpanel"
                        aria-labelledby="v-pills-my-profile-tab">
                        <div class="form-wrapper p-5">
                            <h1 class="mb-5">Hello Akinola, <small>Welcome to your profile</small></h1>

                            <form action="#">
                                <fieldset>
                                    <legend>
                                        <h4 class="mb-4 form-title">Personal Details</h4>
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
                                            <input type="text" class="form-control" id="oldPassword"
                                                placeholder="Edit Password">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="newPassword" class="col-sm-3 col-form-label">New Password</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="newPassword"
                                                placeholder="Edit Password">
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

                                    <button type="submit" class="form-btn btn-md py-2 px-5 rounded">Update
                                        Profile</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-orders-tab">
                        <h2>Orders</h2>
                    </div>
                    <div class="tab-pane fade" id="v-pills-wishlists" role="tabpanel"
                        aria-labelledby="v-pills-wishlists-tab">
                        <h2>wishlists</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- footer -->
<?php include_once '../components/footer.php'; ?>