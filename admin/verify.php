<?php
@require_once 'includes/config.php';
include ('includes/header.php');
?>
<?php
$alert="";
/*Capture GET Values*/
if(isset($_GET['actionv'])=="view"){
$staff_id=urldecode(base64_decode($_GET['id']));
$sql_st=mysqli_query($con, "SELECT * FROM uploads WHERE UP_ID='$staff_id'");
$data=mysqli_fetch_assoc($sql_st);
?>
<?php
if(isset($_POST['verify'])){
$up_id = $_POST['up_id'];
$username = $_SESSION['Username'];
if(!empty($up_id) && !empty($username)){
$sql_staff=(" UPDATE uploads SET APPROVE = 'OK', APPROVED_BY = '$username' WHERE UP_ID = '$up_id' ");
$work = mysqli_query($con, $sql_staff);
if($work){
echo '<script>alert("Success! Published successfully")</script>';
}else{
echo '<script>alert("Error! Something has gone wrong")</script>';
}
}else{
echo '<script>alert("Error! Logout and login to solve this error!")</script>';
}
}
?>
<div class="container"><br>
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-sm-6">
					<h5 class="card-title"><span class="fa fa-check-circle"></span>&nbsp;Verfiy Post</h5>
				</div>
				<div class="col-sm-6">
					<form action="" method="POST">
						<input type="hidden" value='<?php echo $staff_id ?>' name='up_id'>
						<button type="submit" name="verify" class="btn btn-primary" id="right" title="Verfiy Post"><i class="bx bx-check-circle"></i> Publish</button>
					</form>
				</div>
			</div>
			<br>
			<?php
			echo '<center><h4><b>'.$data['HEADING'].'</b></h4></center><br><img src="../assets/img/post/'.$data['IMAGES'].'" style="border-radius: 5px;" width="100%" class="img-thumnail"/><br><i>Story written by&nbsp;'.$data['ST_by'].'</i><p class="displaytext">'.$data['STORY'].'</p><div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="'.$data['VIDEO'].'" allowfullscreen></iframe>
		</div><i class="date">Published on&nbsp;'.$data['UPLOAD_DATE'].'</i>';
		}?>
	</div>
</div>
</div>
<?php
include ('includes/footer.php');
?>