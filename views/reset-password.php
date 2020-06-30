<!-- header -->
<?php include_once '../components/header.php'; ?>

<main id="reset-password-page">

    <div class="container">
        <div class="login form-wrapper p-5 my-5">
            <h3 class="form-title text-center form-title mb-5">Reset Password</h3>

            <!-- alert message if password combination did not match -->
            <div class="alert text-danger text-center" role="alert" id="reset_password_error_msg">
                Password combination do not match
            </div>

            <form action="post" id="resetPasswordForm">
                <div class="form-group">
                    <label for="new_password">New Password</label>

                    <div class="input-group mb-3">
                        <input type="password" class="form-control border-right" id="new_reset_password" required>
                        <div class="input-group-append">
                            <button class="border-left password-eye" type="button" id="newPassword_addon"
                                onclick="newPassword_click()">
                                <i class="fas fa-eye"></i></button>
                        </div>
                    </div>
                    <div><small class="text-danger" id="reset_password_length_error_msg">Your password must be atleast
                            8
                            characters</small></div>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>

                    <div class="input-group mb-3">
                        <input type="password" class="form-control border-right" id="confirm_reset_password" required>
                        <div class="input-group-append">
                            <button class="border-left password-eye" type="button" id="confirmPassword_addon"
                                onclick="confirmPassword_click()">
                                <i class="fas fa-eye"></i></button>
                        </div>
                    </div>
                    <div><small class="confirm_reset_password_required_msg text-danger"
                            id="confirm_reset_password_required_msg">This
                            field is required</small></div>
                </div>


                <div class="text-center">
                    <button type="submit"
                        class="white_btn btn-md py-1 py-md-2 px-3 px-md-5 btn-block rounded">Submit</button></div>
            </form>
        </div>


        <div class="text-center">Don't have an account ? <a href="register.php" class="customLink">Click here</a>
        </div>
    </div>


</main>



<!-- footer -->
<?php include_once '../components/footer.php'; ?>