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
if (isset($_POST['Adduser'])) {
$Name = $_POST['name'];
$email = $_POST['email'];
$Username = $_POST['user'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$level = $_POST['Occupation'];
$Password = base64_encode(strtoupper($_POST['pass1']));
if ($pass1 == $pass2) {
if (!empty($Name) && !empty($email)  && !empty($level) && !empty($Username) && !empty($Password)) {
	$action = mysqli_query($con, "INSERT INTO users(Name, email, Username, Password, Level) VALUES('$Name', '$email', '$Username', '$Password', '$level' )");
if ($action) {
echo '<script>alert("Success! User Added successfully")</script>';
}else{
echo '<script>alert("Error! Something is wrong")</script>';
}
}else{
echo '<script>alert("Error! Fill all empty Fields")</script>';
}
}else{
echo '<script>alert("Error! Passwords do not match")</script>';
}
}
?>
<!--contents-->
<div class="container"><br>
	<div class="card">
		<div class="card-body">
			<form method="POST" action="#">
				<h5 ><i class="bx bx-user-plus"></i> Add a user</h5>
				<?php echo $ans;?>
				<div class="form-group">
					<label for="inputCity">Full Name</label>
					<input type="text" name="name" class="form-control" id="inputCity" required="true">
				</div>
				<div class="form-group">
					<label for="inputCity">E-mail</label>
					<input type="email" name="email" class="form-control" id="inputCity" required="true">
				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1">Occupation</label>
					<select class="form-control" name="Occupation" id="exampleFormControlSelect1">
						<option>Choose...</option>
						<option value="One">Uploader</option>
					</select>
				</div>
				<div class="form-group">
					<label for="inputCity">Username</label>
					<input type="text" name="user" class="form-control" id="inputCity" required="true">
				</div>
				<div class="row">
					<div class="col-lg-6">
						<label for="inputCity">Password</label>
						<input type="password" name="pass1" class="form-control" id="inputCity" required="true">
					</div>
					<div class="col-lg-6">
						<label for="inputCity">Re-enter Password</label>
						<input type="password" name="pass2" class="form-control" id="inputCity" required="true">
					</div>
				</div><br>
				<button type="submit" name="Adduser" class="btn btn-primary"><i class="bx bx-user-plus"></i>  Add User</button>
			</form>
		</div>
	</div>
</div>
<?php
	include ('includes/footer.php');
?>