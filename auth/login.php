<?php
@require_once 'config.php';
?>
<?php
if (isset($_POST['login'])) {
$username= $_POST['user'];
$password= base64_encode(strtoupper($_POST['pass']));
$fetch =mysqli_query($con, "SELECT * FROM users WHERE Password ='$password' AND Username ='$username'");
$row =mysqli_fetch_array($fetch);
$No_row =mysqli_num_rows($fetch);
if ($No_row > 0) {
$occupation = $row['Level'];
if ($occupation == "One") {
$sql_staff=mysqli_query($con, "SELECT * FROM users WHERE Username = '$username'");
$staff_data=mysqli_fetch_assoc($sql_staff);
$ID=$staff_data['ID'];
$status=$staff_data['Status'];
$extra=$staff_data['Master'];
$Username=$staff_data['Username'];
if ($extra == "Master") {
if ($status == "Unblocked") {
$_SESSION['Username']= $Username;
mysqli_query($con, 'UPDATE users SET uptime = NOW() WHERE id = $ID');
//header ('location:admin/mainfunction');
echo "<script> location.href='../admin/mainfunction'; </script>";
}else{
echo '<script>alert("Sorry! Your Blocked")</script>';
}
}else{
if ($status == "Unblocked") {
$_SESSION['Username']= $Username;
mysqli_query($con, 'UPDATE users SET uptime = NOW() WHERE id = $ID');
echo "<script> location.href='../staff/mainfunction'; </script>";
//header ('location:profile.php');
}else{
echo '<script>alert("Sorry! Your Blocked")</script>';
}
}
}elseif ($occupation == "Two") {
$sql_staff=mysqli_query($con, "SELECT * FROM users WHERE username = '$username' ");
$staff_data=mysqli_fetch_assoc($sql_staff);
$ID=$staff_data['ID'];
$status=$staff_data['Status'];
$Username=$staff_data['Username'];
if($status == "Unblocked"){
$_SESSION['Username']=$Username;
mysqli_query($con, 'UPDATE users SET uptime = NOW() WHERE id = $ID');
header ('location:discution.php');
}else{
echo '<script>alert("Sorry! Your Blocked")</script>';
}
}
}
else{
echo '<script>alert("Error! Wrong username or password")</script>';
}
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="ujamaatech" data-assets-path="assets/" data-template="ujamaatech" >
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Login | UjamaaTech</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/.favicon.ico" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
      />
      <!-- Icons. Uncomment required icon fonts -->
      <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
      <!-- Core CSS -->
      <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
      <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
      <link rel="stylesheet" href="assets/css/demo.css" />
      <!-- Vendors CSS -->
      <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
      <!-- Page CSS -->
      <!-- Page -->
      <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" />
      <!-- Helpers -->
      <script src="assets/vendor/js/helpers.js"></script>
      <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
      <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    </head>
    <body>
      <!-- Content -->
      <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
          <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
              <div class="card-body">
                <!-- Logo -->
                <div class="app-brand justify-content-center">
                  <a href="index" class="app-brand-link gap-2">
                    <h2 class="demo text-body fw-bolder">UjamaaTech</h2>
                  </a>
                </div>
                <!-- /Logo -->
                <h4 class="mb-2">Welcome to UjamaaTech! 👋</h4>
                <p class="mb-4">Please login to your account and update the world</p>
                <form id="formAuthentication" class="mb-3" action="login" method="POST">
                  <div class="mb-3">
                    <label for="email" class="form-label">Username</label>
                    <input type="text" class="form-control" id="email" name="user" placeholder="Enter your username" autofocus />
                  </div>
                  <div class="mb-3 form-password-toggle">
                    <div class="d-flex justify-content-between">
                      <label class="form-label" for="password">Password</label>
                      <a href="forgot-password">
                        <small>Forgot Password?</small>
                      </a>
                    </div>
                    <div class="input-group input-group-merge">
                      <input type="password" id="password" class="form-control" name="pass" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                      <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                  </div>
                  <div class="mb-3">
                    <button class="btn btn-primary d-grid w-100" type="submit" name="login">Login</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- /Register -->
          </div>
        </div>
      </div>
      <!-- / Content -->
      <!-- Core JS -->
      <!-- build:js assets/vendor/js/core.js -->
      <script src="assets/vendor/libs/jquery/jquery.js"></script>
      <script src="assets/vendor/libs/popper/popper.js"></script>
      <script src="assets/vendor/js/bootstrap.js"></script>
      <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
      <script src="assets/vendor/js/menu.js"></script>
      <!-- endbuild -->
      <!-- Vendors JS -->
      <!-- Main JS -->
      <script src="assets/js/main.js"></script>
      <!-- Page JS -->
      <!-- Place this tag in your head or just before your close body tag. -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
  </html>