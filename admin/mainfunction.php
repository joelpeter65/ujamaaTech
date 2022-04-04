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
if (isset($_POST['image'])) {
$file = $_POST['image'];
$heading = $_POST['headings'];
$cartegory = $_POST['cartegory'];
$story = $_POST['story'];
$usernamez = $_SESSION['Username'];
$date = date("Y-m-d");
$extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
if (!empty($usernamez)) {
			if($extension=='png' || $extension=='jpeg' || $extension=='jpg' || $extension=='gif'){
$sql = "INSERT INTO uploads (UPLOAD_DATE,IMAGES,CATEGORIES, HEADING, STORY, ST_by) VALUES ('$date', '$file', '$cartegory', '$heading', '$story', '$usernamez')";
$action = mysqli_query($con, $sql);
if ($action) {
move_uploaded_file($_FILES['file']['tmp_name'], "assets/img/post/$file");
move_uploaded_file($_FILES['file']['tmp_name'], "assets/img/gallery/$thumb");
echo '<script>alert("Success! Posted successfully")</script>';
}else{
echo '<script>alert("Error! Something has gone wrong post not posted")</script>';
}
}else{
echo '<script>alert("Sorry! That is not an image")</script>';
}
}else{
echo '<script>alert("Error! Please logout and login to solve this error else your are not authoriezed to upload any thing here!")</script>';
}
}
?>
<div class="container">
	<div class="row">
		<div class="col-sm-3 d-none d-sm-block">
			<div class="card">
				<?php
					$query = "SELECT * from users";
					$activate_query = mysqli_query($con, $query);
					$check = mysqli_num_rows($activate_query);
					if ($check) {
						echo '<div class="fas fa-user-circle" id="users"> Number of users: '.$check.'</div>';
					}
				?>
				<br>
				<?php echo $_SESSION['Username']; ?>
			</div>
			<p><br></p>
		</div>
		<div class="col-sm-6">
			<div class="card">
				<div class="card-body">
					<?php echo $uploadans; ?>
					<h4 class="fas fa-cloud-upload-alt"> Upload Here</h4>&nbsp;
					<form action="mainfunction.php" method="POST" enctype="multipart/form-data">
						<input type="text" class="form-control" id="inputCity" required="true" name="headings" placeholder="Heading"><br>
						<select class="form-control" required="true" name="cartegory" id="exampleFormControlSelect1">
							<option>Choose Cartegories</option>
							<option value="News">Top News</option>
							<option value="Business">Business</option>
							<option value="Sports">Sports</option>
							<option value="Entertainment">Entertainment</option>
						</select>
						<br>
						<textarea name="story" required="true" class="form-control" id="inputCity" placeholder="Story"></textarea><br>
						<label for="upload_image">
							Upload
							<div class="overlay">
								<div class="text">Click to Change Profile Image</div>
							</div>
							<input type="file" name="image" class="image" id="upload_image" style="display:none" />
						</label>
					</form>
					<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Crop Image Before Upload</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="img-container">
										<div class="row">
											<div class="col-md-8">
												<img src="" id="sample_image" />
											</div>
											<div class="col-md-4">
												<div class="preview"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" id="crop" class="genric-btn default-border">Crop</button>
									<button type="button" class="genric-btn danger-border" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<p><br></p>
		</div>
		<div class="col-sm-3">
			
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
var $modal = $('#modal');
var image = document.getElementById('sample_image');
var cropper;
$('#upload_image').change(function(event){
var files = event.target.files;
var done = function(url){
image.src = url;
$modal.modal('show');
};
if(files && files.length > 0)
{
reader = new FileReader();
reader.onload = function(event)
{
done(reader.result);
};
reader.readAsDataURL(files[0]);
}
});
$modal.on('shown.bs.modal', function() {
cropper = new Cropper(image, {
aspectRatio: 2,
viewMode: 3,
preview:'.preview'
});
}).on('hidden.bs.modal', function(){
cropper.destroy();
cropper = null;
});
$('#crop').click(function(){
canvas = cropper.getCroppedCanvas({
width:700,
height:567
});
canvas.toBlob(function(blob){
url = URL.createObjectURL(blob);
var reader = new FileReader();
reader.readAsDataURL(blob);
reader.onloadend = function(){
var base64data = reader.result;
$.ajax({
url:'mainfunction.php',
method:'POST',
data:{image:base64data},
success:function(data)
{
$modal.modal('hide');
$('#uploaded_image').attr('src', data);
}
});
};
});
});
});
</script>
<?php
	include ('includes/footer.php');
?>