<!-- header -->
<?php include_once '../components/header.php'; ?>

<main id="register-page">

    <div class="container">
        <div class="register form-wrapper p-5 my-5">
            <h3 class="form-title text-center form-title">Sign Up</h3>
            <form action="post" id="registerForm">
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="register_inputName">Full Name</label>
                        <input type="text" class="form-control" id="register_inputName" required>
                        <small class="registration_name_error_msg text-danger" id="registration_name_error_msg">This
                            field is required</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="gender">Gender</label>
                        <div class="select-wrapper">
                            <select class="form-control rounded-0" name="gender" id="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="register_inputEmail">Email Address</label>
                        <input type="email" class="form-control" id="register_inputEmail" required>
                        <div><small class="registration_email_error_msg text-danger"
                                id="registration_email_error_msg">This
                                field is required

                            </small></div>
                        <div>
                            <small class="registration_email_error_msg text-danger"
                                id="registration_email_pattern_error"></small></div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="register_inputPhone">Phone Number</label>
                        <input type="text" class="form-control" id="register_inputPhone" required>
                        <small class="registration_phone_error_msg text-danger" id="registration_phone_error_msg">This
                            field is required</small>
                    </div>
                </div>
                <div class="form-group">
                    <label for="register_inputAddress">Address</label>
                    <input type="text" class="form-control" id="register_inputAddress" required>
                    <small class="registration_address_error_msg text-danger" id="registration_address_error_msg">This
                        field is required</small>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="town">Town/City</label>
                        <div class="select-wrapper">
                            <select class="form-control rounded-0" name="town" id="town">
                                <option value="">Select Town/City</option>
                                <option value="lagos">Ikeja</option>
                                <option value="abuja">Kubwa</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="state">State</label>
                        <div class="select-wrapper">
                            <select class="form-control state-select rounded-0" name="state" id="state">
                                <option value="">Select State</option>
                                <option value="lagos">Lagos</option>
                                <option value="abuja">Abuja</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="register_inputPassword">Enter Password</label>
                        <input type="password" class="form-control" id="register_inputPassword" required>
                        <div><small class="registration_password_error_msg text-danger"
                                id="registration_password_error_msg">This
                                field is required</small></div>
                        <div><small class="registration_password_length_error_msg text-danger"
                                id="registration_password_length_error_msg">Your password must be atleast 8
                                characters</small></div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="register_confirm_inputPassword">Confirm Password</label>
                        <input type="password" class="form-control" id="register_confirm_inputPassword" required>
                        <div><small class="registration_confirm_password_error_msg text-danger"
                                id="registration_confirm_password_error_msg">This
                                field is required</small></div>
                        <div><small class="registration_confirm_password_match_error_msg text-danger"
                                id="registration_confirm_password_match_error_msg">Your password does not match</small>
                        </div>
                    </div>
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn-md py-2 px-5 rounded" id="registration_form_btn"
                        disabled>Register</button>
                </div>
            </form>
        </div>


        <div class="text-center">Already have an account ? <a href="login.php" class="customLink">Click here</a>
        </div>
    </div>


</main>



<!-- footer -->
<?php include_once '../components/footer.php'; ?>