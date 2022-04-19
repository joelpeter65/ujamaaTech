<?php
@require_once 'includes/config.php';
include('includes/header.php');
?>
<?php
if(isset($_GET['action'])=="Move"){
$id=urldecode(base64_decode($_GET['id']));
$_SESSION['ids'] = $id;
if (!empty($_SESSION['ids'])) {
header("location: postDetails");
}
}
?>
<!-- Top Posts Start -->
<div class="top-post-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-tittle mb-35">
                    <h2>Business</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-lg-between">
            <div class="col-lg-8 col-md-8">
                <!-- single-job-content -->
                <?php
                if (isset($_POST['searchmaster'])) {
                $text = $_POST['searchmaster'];
                $query = "SELECT * FROM uploads where HEADING LIKE '%$text%' AND CATEGORIES = 'business' AND APPROVE = 'OK' ORDER BY UP_ID DESC";
                $result = mysqli_query($con, $query)  or die(mysqli_error($con));
                while($row = mysqli_fetch_array( $result))
                {
                echo '
                <div class="single-job-items mb-30">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="cBusiness?id='.urlencode(base64_encode($row['UP_ID'])).'&action=Move"><img src="assets/img/post/'.$row['IMAGES'].'" class="img-fluid" alt=""></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="job-tittle">
                                <a href="cBusiness?id='.urlencode(base64_encode($row['UP_ID'])).'&action=Move"><h4>'.$row['HEADING'].'</h4></a>
                                <p>We present things in a way that isn’t sensational, said Ms. Cham mavanijakul, 20, whose family has roots...</p>
                            </div>
                        </div>
                    </div>
                </div>';
                }
                }else{
                $query = "SELECT * FROM uploads where CATEGORIES = 'business' AND APPROVE = 'OK' ORDER BY UP_ID DESC";
                $result = mysqli_query($con, $query)  or die(mysqli_error($con));
                $num = mysqli_num_rows($result);
                if ($num > 0) {
                while($row = mysqli_fetch_array( $result))
                {
                echo '
                <div class="single-job-items mb-30">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="cBusiness?id='.urlencode(base64_encode($row['UP_ID'])).'&action=Move"><img src="assets/img/post/'.$row['IMAGES'].'" class="img-fluid" alt=""></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="job-tittle">
                                <a href="cBusiness?id='.urlencode(base64_encode($row['UP_ID'])).'&action=Move"><h4>'.$row['HEADING'].'</h4></a>
                                <p>We present things in a way that isn’t sensational, said Ms. Cham mavanijakul, 20, whose family has roots...</p>
                            </div>
                        </div>
                    </div>
                </div>';
                }
                }else{
                    echo '<div class="text-center display-1 justify-content-center">Nothing to Report here</div>';
                }
                }
                ?>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="google-add mb-40 d-none d-lg-block">
                    <img src="assets/img/gallery/images.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Posts End -->
<?php
include('includes/footer.php');
?>