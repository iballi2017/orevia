<!-- header -->
<?php include_once '../components/header.php'; ?>

<main id="forgot-password-page">
    <div class="container">

        <div class="inner-wrapper text-center">


            <h3 class="my-5">Forgot Password</h3>

            <div class="lead mb-3">Please enter the email address you registered with. We will send you a link</div>


            <!-- triggered alert when user sends an invalid email address -->
            <div class="alert alert-danger" role="alert">
                Invalid email address
            </div>

            <!-- triggered alert when user sends an email address -->
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Please,</strong> Check your email
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form action="">
                <div class="input-group mb-3">
                    <input type="text" class="p-2 ml-auto" placeholder="Enter Email Address"
                        aria-label="Enter Email Address" aria-describedby="button-addon2" required>
                    <div class="input-group-append mr-auto">
                        <button class="form-btn rounded-right" type="submit" id="button-addon2">Send Link</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</main>



<!-- footer -->
<?php include_once '../components/footer.php'; ?>