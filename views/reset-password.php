<!-- header -->
<?php include_once '../components/header.php'; ?>

<main id="reset-password-page">

    <div class="container">
        <div class="login form-wrapper p-5 my-5">
            <h3 class="form-title text-center form-title mb-5">Reset Password</h3>

            <!-- alert message if password combination did not match -->
            <div class="alert alert-danger" role="alert">
                Password combination do not match
            </div>

            <form action="post" id="resetPasswordForm">
                <div class="form-group">
                    <label for="new_password">New Password</label>

                    <div class="input-group mb-3">
                        <input type="password" class="form-control border-right" id="new_password" required>
                        <div class="input-group-append">
                            <button class="border-left password-eye" type="button" id="newPassword_addon"
                                onclick="newPassword_click()">
                                <i class="fas fa-eye"></i></button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>

                    <div class="input-group mb-3">
                        <input type="password" class="form-control border-right" id="confirm_password" required>
                        <div class="input-group-append">
                            <button class="border-left password-eye" type="button" id="confirmPassword_addon"
                                onclick="confirmPassword_click()">
                                <i class="fas fa-eye"></i></button>
                        </div>
                    </div>
                </div>


                <div class="text-center">
                    <button type="submit" class="form-btn btn-md py-2 px-5 btn-block rounded">Submit</button></div>
            </form>
        </div>


        <div class="text-center">Don't have an account ? <a href="register.php" class="customLink">Click here</a>
        </div>
    </div>


</main>



<!-- footer -->
<?php include_once '../components/footer.php'; ?>
