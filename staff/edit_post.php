<?php
@require_once 'includes/config.php';
include ('includes/header.php');
?>
<script language="javascript">
if ( window.history.replaceState ) {
window.history.replaceState( null, null, window.location.href );
}
</script>
<?php
$alert="";
/*Capture GET Values*/
if(isset($_GET['actione'])=="edit"){
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
$video = $_POST['heading'];
$story = $_POST['story'];
if(!empty($up_id)){
$sql_staff=(" UPDATE uploads SET HEADING = '$heading', VIDEO = '$video', CATEGORIES = '$cartegory', STORY = '$story' WHERE UP_ID = '$up_id' ");
$work = mysqli_query($con, $sql_staff);
if($work){
echo '<script>alert("Success! Updated a posted successfully")</script>';
}else{
echo '<script>alert("Error! Details could not be edited!")</script>';
}
}else{
echo '<script>alert("Error! Some fields cannot be empty!")</script>';
}
}
?>
<script language="javascript">
setTimeout(function(){
window.location.reload(1);
}, 30000);
</script>
<div class="container"><br>
  <div class="card">
    <h5 class="card-header"><i class="bx bx-edit"></i> Edit News</h5>
    <div class="card-body">
      <?php echo $alert;?>
      <form class="form-vertical" enctype="multipart/form-data" method="POST" action="">
        <div class="form-group">
          <label>Edit News Cartegory</label>
          <select class="form-control" required="true" name="cartegory" id="exampleFormControlSelect1">
            <option><?php echo $data['CATEGORIES'];?></option>
            <option value="Business">Business</option>
            <option value="Sports">Sports</option>
            <option value="Agriculture">Agriculture</option>
            <option value="Technology">Technology</option>
            <option value="Entrepreneurship">Entrepreneurship</option>
          </select>
        </div>
        <div class="form-group">
          <label>Edit Heading</label>
          <input type="text" class="form-control" name="heading" value="<?php echo $data['HEADING'];?>" required="true"/>
        </div>
        <div class="form-group">
          <label>Edit Video</label>
          <input type="text" class="form-control" name="heading" value="<?php echo $data['VIDEO'];?>" required="true"/>
        </div>
        <div class="form-group">
          <label>Story</label>
          <textarea class="form-control" name="story" value="<?php echo $data['STORY'];?>"></textarea>
        </div>
        <div class="form-group">
          <input type="hidden" class="form-control" name="up_id" value="<?php echo $data['UP_ID'];?>" readonly="true"/><br>
        </div>
        <div class="form-group">
          <button type="submit" name="editing" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="ckeditor\ckeditor.js"></script>
<script>
  CKEDITOR.replace('story');
</script>
<?php
include ('includes/footer.php');
?>