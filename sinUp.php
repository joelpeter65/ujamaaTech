<?php
@require_once 'includes/config.php';
include('includes/header.php');
?>
<!-- Register Area Start -->
<div class="register-form-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="register-form text-center">
                    <form action="sinUp" method="POST">
                        <!-- Login Heading -->
                        <div class="register-heading">
                            <span>Sign Up</span>
                            <p>Create your account and join the fun</p>
                        </div>
                        <!-- Single Input Fields -->
                        <div class="input-box">
                            <div class="single-input-fields">
                                <label>Full name</label>
                                <input type="text" placeholder="Enter full name">
                            </div>
                            <div class="single-input-fields">
                                <label>Email Address</label>
                                <input type="email" placeholder="Enter email address">
                            </div>
                            <div class="single-input-fields">
                                <label>Password</label>
                                <input type="password" placeholder="Enter Password">
                            </div>
                            <div class="single-input-fields">
                                <label>Confirm Password</label>
                                <input type="password" placeholder="Confirm Password">
                            </div>
                        </div>
                        <!-- form Footer -->
                        <div class="register-footer">
                            <p> Already have an account? <a href="login"> Login</a> here</p>
                            <button class="submit-btn3">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Area End -->
</main>
<?php
include('includes/footer.php');
?>