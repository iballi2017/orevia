<!-- header -->
<?php include_once '../components/header.php'; ?>

<main>

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

                    <div class="input-group mb-3">
                        <input type="password" class="form-control border-right" id="login_password" required>
                        <div class="input-group-append">
                            <button class="border-left password-eye" type="button" id="password_addon">
                                <i class="fas fa-eye"></i></button>
                        </div>
                    </div>
                    <small class="password_error_msg text-danger" id="password_error_msg"></small>
                </div>
                <div class="form-group text-right">
                    <a href="#">Forgot password</a>
                </div>


                <div class="text-center">
                    <button type="submit" class="form-btn btn-md py-2 px-5 btn-block rounded">Login</button></div>
            </form>
        </div>


        <div class="text-center">Don't have an account ? <a href="register.php" class="customLink">Click here</a>
        </div>
    </div>


</main>



<!-- footer -->
<?php include_once '../components/footer.php'; ?>