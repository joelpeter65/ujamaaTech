<?php
@require_once 'includes/config.php';
include('includes/header.php')
?>
<?php
if (!empty($_SESSION['ids'])) {
}else{
echo "<script> location.href='index'; </script>";
}
?>
<!-- Post Details Stat -->
<div class="psot-details pb-80 pt-10">
    <div class="container">
        <?php
        $id = $_SESSION['ids'];
        $query = "SELECT * FROM uploads where UP_ID = '$id'";
        $result = mysqli_query($con, $query)  or die(mysqli_error($con));
        while($row = mysqli_fetch_array( $result)){
        echo '
        <div class="about-details-cap text-center"><h3>'.$row['HEADING'].'</h3></div>
        <br>
        <img src="assets/img/post/'.$row['IMAGES'].'" style="border-radius: 5px;" width="100%" class="img-thumnail"/>
        <br><i>Story written by&nbsp;'.$row['ST_by'].'</i>
        <p class="displaytext">'.$row['STORY'].'';
            }
            ?>
        </div>
    </div>
    <!-- Post Details End -->
    <div class="row">
        <div class="col-lg-12">
            <!-- contact-form -->
            <div class="form-wrapper pt-80">
                <div class="row ">
                    <div class="col-xl-12">
                        <div class="small-tittle mb-30">
                            <h2>Drop your message</h2>
                        </div>
                    </div>
                </div>
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0" nonce="u6YxwEke"></script>
                <?PHP
                $url = $_SERVER['SERVER_NAME'] . $_SESSION['ids'];
                echo "<div class='fb-comments' data-href='$url' data-num-posts='10' data-width='300'></div>";
                ?>
            </div>
        </div>
    </div>
    <?php
    include('includes/footer.php')
    ?>