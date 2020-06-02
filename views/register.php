<!-- header -->
<?php include_once '../components/header.php'; ?>

<main id="register-page">

    <div class="container">
        <div class="register form-wrapper p-5 my-5">
            <h3 class="form-title text-center form-title">Sign Up</h3>
            <form action="post" id="registerForm">
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputEmail4">Full Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="name" required>
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
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="number">Phone Number</label>
                        <input type="text" class="form-control" id="number" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" required>
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
                        <label for="password">Enter Password</label>
                        <input type="password" class="form-control" id="password" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password2">Confirm Password</label>
                        <input type="password" class="form-control" id="password2" required>
                    </div>
                </div>


                <div class="form-group text-center">
                    <button type="submit" class="form-btn btn-md py-2 px-5 rounded">Register</button>
                </div>
            </form>
        </div>


        <div class="text-center">Already have an account ? <a href="login.php" class="customLink">Click here</a>
        </div>
    </div>


</main>



<!-- footer -->
<?php include_once '../components/footer.php'; ?>