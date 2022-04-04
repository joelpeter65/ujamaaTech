<?php
@require_once 'includes/config.php';
include ('includes/masterheader.php');
?>
<script language="javascript">
if ( window.history.replaceState ) {
window.history.replaceState( null, null, window.location.href );
}
</script>
<?php
$alert="";
/*Capture GET Values*/
if(isset($_GET['action'])=="edit"){
$staff_id=urldecode(base64_decode($_GET['id']));
$sql_st=mysqli_query($con, "SELECT * FROM uploads WHERE UP_ID='$staff_id'");
$data=mysqli_fetch_assoc($sql_st);
}
?>
<?php
if(isset($_POST['editing'])){
$up_id = $_POST['up_id'];
$cartegory = $_POST['cartegory'];
$heading = $_POST['heading'];
$story = $_POST['story'];
if(!empty($up_id)){
$sql_staff=(" UPDATE uploads SET HEADING = '$heading', CATEGORIES = '$cartegory', STORY = '$story' WHERE UP_ID = '$up_id' ");
$work = mysqli_query($con, $sql_staff);
if($work){
$alert='<div class = "alert alert-success alert-dismissable">
  <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
  &times;
</button>Success! You have edited details.</div>';
}else{
$alert='<div class = "alert alert-danger alert-dismissable"><button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">&times;</button>Error ! Details could not be edited!</div>';
}
}else{
$alert='<div class = "alert alert-danger alert-dismissable"><button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">&times;</button>Error ! Some fields cannot be empty!</div>';
}
}
?>
<script language="javascript">
setTimeout(function(){
window.location.reload(1);
}, 30000);
</script>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="card">        
        <div class="container">
          <h4>&nbsp;&nbsp;Links</h4>
          <a href="mainfunction.php"><i class="fas fa-arrow-circle-up"> Upload</i></a><br>
          <a href="posts.php"><i class="fas fa-list"> List to Publish</i></a><br>
          <a href="adduser.php"><i class="fas fa-user-plus"> Add Users</i></a><br>
          <a href="report.php"><i class="fas fa-sticky-note"> Show Report</i></a><br>
          <a href="view.php"><i class="fas fa-users"> Show Users</i></a><br>
        </div>
      </div>
      <p><br></p>
    </div>
    <div class="col-sm-8">
      <div class="card">
        <div class="panel panel-default">
          <div class="panel-heading"><span class="fa fa-edit"></span>&nbsp;<b>EDIT NEWS</b></div>
          <div><?php echo $alert;?></div>
          <div class="card">
            <div class="staff-wrap">
              <form class="form-vertical" enctype="multipart/form-data" method="POST" action="">
                <div class="form-group">
                  <h5>Heading</h5>
                  <input type="text" class="form-control" name="heading" value="<?php echo $data['HEADING'];?>" required="true"/>
                </div>
                <div class="form-group">
                  <select class="form-control" required="true" name="cartegory" id="exampleFormControlSelect1">
                    <option>Choose Cartegories</option>
                    <option value="News">Top News</option>
                    <option value="Business">Business</option>
                    <option value="Sports">Sports</option>
                    <option value="Entertainment">Entertainment</option>
                  </select>
                </div>
                <div class="form-group">
                  <h5>Story</h5>
                  <textarea class="form-control" name="story" value="<?php echo $data['STORY'];?>" required="true"></textarea>
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" name="up_id" value="<?php echo $data['UP_ID'];?>" readonly="true"/>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" name="editing" class="btn btn-primary">Update</button>
              </form>
            </div>
          </div></div>
          
          <?php
          include ('includes/footer.php');
          ?>