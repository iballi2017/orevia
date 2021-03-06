<!-- header -->
<?php include_once '../components/header.php'; ?>

<main id="login-page">

    <div class="container">
        <div class="login form-wrapper p-5 my-5">
            <h3 class="form-title text-center form-title">Sign In</h3>
            <form action="post" id="loginForm">
                <div class="form-group">
                    <label for="login_email">Email Address</label>
                    <input type="email" class="form-control" id="login_email" required>
                    <small class="email_error_msg text-danger" id="email_error_msg"></small>
                </div>
                <div class="form-group">
                    <label for="login_password">Enter Password</label>

                    <div class="input-group">
                        <input type="password" class="form-control border-right" id="login_password" required>
                        <div class="input-group-append">
                            <button class="border-left password-eye" type="button" id="password_addon"
                                onclick="loginPassword_click()">
                                <i class="fas fa-eye"></i></button>
                        </div>
                    </div>
                    <small class="password_error_msg text-danger" id="password_error_msg"></small>
                </div>
                <div class="form-group text-right">
                    <a href="#" class="customLink">Forgot password</a>
                </div>


                <div class="text-center">
                    <button type="submit"
                        class="white_btn btn-md py-1 py-md-2 px-3 px-md-5 btn-block rounded">Login</button></div>
            </form>
        </div>


        <div class="text-center">Don't have an account ? <a href="register.php" class="customLink">Click here</a>
        </div>
    </div>


</main>



<!-- footer -->
<?php include_once '../components/footer.php'; ?>