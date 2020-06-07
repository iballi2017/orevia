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
            <?php include_once '../components/user-account-nav.php'; ?>
        </div>



        <main class="col-12 col-md-9 mb-3 mt-3 mt-sm-0" id="user-profile-page">

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

                        <button type="submit" class="white_btn btn-md py-2 px-5 rounded">Update
                            Profile</button>
                    </fieldset>
                </form>
            </div>

        </main>
    </div>
</div>
<!-- footer -->
<?php include_once '../components/footer.php'; ?>