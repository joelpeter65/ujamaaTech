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
    <!--comments Area -->
    <div class="coments-area pb-80">
        <div class="container">
            <div class="row ">
                <div class="col-xl-12">
                    <div class="small-tittle mb-30">
                        <h2>Drop your message</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11">
                    <div class="single-comments mb-40">
                        <div class="comments-items">
                            <div class="comments-img">
                                <a href="#"><img src="assets/img/gallery/comment-img1.png" alt=""></a>
                            </div>
                            <div class="comments-tittle">
                                <a href="#"><h4>Kristiana</h4></a>
                                <span>2 days ago</span>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-11">
                    <div class="single-comments mb-30 ml-80">
                        <div class="comments-items">
                            <div class="comments-img">
                                <a href="#"><img src="assets/img/gallery/comment-img2.png" alt=""></a>
                            </div>
                            <div class="comments-tittle">
                                <a href="#"><h4>Jonson Alex</h4> <span class="author">Author</span></a>
                                <span>2 days ago</span>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form -->
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
                        <form id="contact-form" action="#" method="POST">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-box user-icon mb-15">
                                        <input type="text" name="name" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-box email-icon mb-15">
                                        <input type="text" name="email" placeholder="Enter your email">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-box email-icon mb-15">
                                        <input type="text" name="email" placeholder="Website">
                                    </div>
                                </div>
                                <!-- <div class="col-lg-12 col-md-6 mb-15">
                                    <div class="select-itms">
                                        <select name="select" id="select2">
                                            <option value="">Topic</option>
                                            <option value="">Topic one</option>
                                            <option value="">Topic Two</option>
                                            <option value="">Topic Three</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-15">
                                        <textarea name="message" id="message" placeholder="Comment"></textarea>
                                    </div>
                                    <div class="submit-info">
                                        <button class="submit-btn2" type="submit">Leave Comment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--comments Area End -->
    <?php
    include('includes/footer.php')
    ?>