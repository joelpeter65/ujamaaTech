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
if (isset($_POST['Adduser'])) {
	$Name = $_POST['name'];
	$email = $_POST['email'];
	$Username = $_POST['user'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	$Password = base64_encode(strtoupper($_POST['pass1']));
	if ($pass1 == $pass2) {
			if (!empty($Name) && !empty($email)  && !empty($Username) && !empty($Password)) {
		$query = "INSERT INTO users(Name, email, Username, Password) VALUES('$Name', '$email', '$Username', '$Password')";
		$action = mysqli_query($con, $query);
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
<br><br>
<div class="container">
	<div class="contents">
		<div class="row">
			<div class="col-sm-3">
				
			</div>
			<div class="col-sm-6">
				<div class="container">
					<div class="card">
						<form method="POST" action="#">
							<h5><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Create a new account</h5>
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
								<label for="inputCity">Username</label>
								<input type="text" name="user" class="form-control" id="inputCity" required="true">
							</div>
							<div class="form-row">
								<div class="form-group col-sm-6">
									<label for="inputCity">Password</label>
									<input type="password" name="pass1" class="form-control" id="inputCity" required="true">
								</div>
								<div class="form-group col-sm-6">
									<label for="inputCity">Re-Password</label>
									<input type="password" name="pass2" class="form-control" id="inputCity" required="true">
								</div>
							</div>
							<button type="submit" name="Adduser" class="btn btn-primary"><i class="fa fa-user-plus"> Add User</i></button><br>
							Already have an acount<a href="login.php"> login</a>
						</form>
					</div>
				</div>
				<p><br></p>
			</div>
			<div class="col-sm-3">
			</div>
		</div>
	</div><br><br>
	<?php
		include ('includes/footer.php');
	?>