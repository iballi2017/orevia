<!-- header -->
<?php include_once '../components/header_update.php'; ?>

<main id="forgot-password-page">
    <div class="container">

        <div class="inner-wrapper text-center">


            <h3 class="my-5">Forgot Password</h3>

            <div class="mb-3">Please enter the email address you registered with. We will send you a link</div>

            <!-- triggered alert when user sends a valid email address that is successful -->
            <div class="my-4">
                <a href="#">Please click to check your email</a>
            </div>


            <!-- triggered alert when user sends an invalid email address -->
            <div class="alert text-danger" role="alert">
                Invalid email address
            </div>



            <form action="" class="mb-5">
                <div class="input-group mb-3">
                    <input type="text" class="p-2 ml-auto" placeholder="Enter Email Address"
                        aria-label="Enter Email Address" aria-describedby="button-addon2" required>
                    <div class="input-group-append mr-auto">
                        <button class="white_btn rounded-right" type="submit" id="button-addon2">Send Link</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</main>



<!-- footer -->
<?php include_once '../components/footer.php'; ?>