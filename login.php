<?php
@require_once 'includes/config.php';
include('includes/headerlogin.php');
?>
<!-- login Area Start -->
<div class="login-form-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8"><br><br>
                <div class="login-form">
                    <!-- Login Heading -->
                    <div class="login-heading">
                        <span>Login</span>
                        <p>Enter Login details to get access</p>
                    </div>
                    <!-- Single Input Fields -->
                    <div class="input-box">
                        <div class="single-input-fields">
                            <label>Username or Email Address</label>
                            <input type="text" placeholder="Username / Email address">
                        </div>
                        <div class="single-input-fields">
                            <label>Password</label>
                            <input type="password" placeholder="Enter Password">
                        </div>
                        <div class="single-input-fields login-check">
                            <input type="checkbox" id="fruit1" name="keep-log">
                            <label for="fruit1">Keep me logged in</label>
                            <a href="#" class="f-right">Forgot Password?</a>
                        </div>
                    </div>
                    <!-- form Footer -->
                    <div class="login-footer">
                        <p>Don’t have an account? <a href="sinUp">Sign Up</a>  here</p>
                        <button class="submit-btn3">Login</button>
                    </div>
                </div>
            </div>
        </div><br><br>
    </div>
</div>
<!-- login Area End -->
</main>
<?php
include('includes/footer.php');
?>