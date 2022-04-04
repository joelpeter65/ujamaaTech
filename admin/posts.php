<?php
	@require_once 'includes/config.php';
	include ('includes/masterheaderpost.php');
?>
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<div class="card">
				<div class="container">
					<h4>&nbsp;&nbsp;Links</h4>
					<a href="mainfunction.php"><i class="fas fa-arrow-circle-up"> Upload</i></a><br>
					<a href="posts.php"><i class="fas fa-list"> List to Publish</i></a><br>
					<a href="adduser.php"><i class="fas fa-user-plus"> Add Users</i></a><br>
					<a href="report.php"><i class="fas fa-sticky-note"> Show Report</i></a><br>
					<a href="view.php"><i class="fas fa-users"> Show Users</i></a><br>
					<a href="chat.php"><i class="fas fa-envelope"> Message</i></a><br>
					<a href="discution.php"><i class="fas fa-commenting"> Discuss</i></a><br>
				</div>
			</div>
			<p><br></p>
		</div>
		<div class="col-sm-9">
			<div class="card">
				<?php
				/*Code to delete staff*/
				$delete_alert="";
				if(isset($_GET['action'])=="Delete"){
				$staff_id=urldecode(base64_decode($_GET['id']));
				$sql_staff=mysqli_query($con, "UPDATE uploads SET APPROVE = 'BLOCKED' WHERE UP_ID='$staff_id'");
				if($sql_staff && !empty($_SESSION['Username'])){
				echo '<script>alert("Success! Deleted successfully")</script>';
				}else{
				echo '<script>alert("Error! Something has gone wrong")</script>';
				}
				}
				?>
				<div class="panel panel-default" id="tbls">
					<div class="panel-heading"><i class="fa fa-users"></i>&nbsp;<b>VIEW POSTS</b></div>
					<div class="panel-body">
						<p>Here you can view all posts in the system.</p>
						<?php
						if (isset($_POST['searchmaster'])) {
							$hint = $_POST['date'];
							$sql_staff=mysqli_query($con, "SELECT * FROM uploads where UPLOAD_DATE = '$hint' AND APPROVE = 'PENDING' ORDER BY UP_ID DESC");
						$count=mysqli_num_rows($sql_staff);
						if($count > 0){
						$k=1;
						?>
						<span style="width:100%;text-align:center;"><?php echo $delete_alert;?></span>
						<div class="table-responsive">
							<table class="table table-bordered table-condensed table-striped">
								<thead>
									<th>S/N</th>
									<th>Date</th>
									<th>Heading</th>
									<th>Cartegory</th>
									<th>Action</th>
								</thead>
								<?php
								while($data=mysqli_fetch_assoc($sql_staff)){
								?>
								<tr>
									<td><?php echo $k;?>.</td>
									<td><?php echo $data['UPLOAD_DATE'];?></td>
									<td><?php echo $data['HEADING'];?></td>
									<td><?php echo $data['CATEGORIES'];?></td>
									<td><a href="posts.php?id=<?php echo urlencode(base64_encode($data['UP_ID']));?>&action=delete" data-toggle = "tooltip" data-placement = "top" title = "Delete"><span class="fa fa-trash"></span></a>
									&nbsp;&nbsp;
									<a href="verify.php?id=<?php echo urlencode(base64_encode($data['UP_ID']));?>&action=view" data-toggle = "tooltip" data-placement = "top" title = "Verify Posts"><span class="fa fa-check-square"></span></a>
									&nbsp;&nbsp;
									<a href="edit_post.php?id=<?php echo urlencode(base64_encode($data['UP_ID']));?>&action=edit" data-toggle = "tooltip" data-placement = "top" title = "Edit Details"><span class="fa fa-edit"></span></a>
								</td>
							</tr>
							<?php
							$k=$k+1;
							}
							?>
						</table>
					</div>
					<?php
					}else{
					echo '<div class = "alert alert-info alert-dismissable">
									<button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
					&times;</button>Info! There is no news uploaded yet.</div>';
					}
						}else{
						$sql_staff=mysqli_query($con, "SELECT * FROM uploads WHERE APPROVE = 'PENDING' ORDER BY UP_ID DESC");
						$count=mysqli_num_rows($sql_staff);
						if($count > 0){
						$k=1;
					?>
					<span style="width:100%;text-align:center;"><?php echo $delete_alert;?></span>
					<div class="table-responsive">
						<table class="table table-bordered table-condensed table-striped">
							<thead>
								<th>S/N</th>
								<th>Date</th>
								<th>Heading</th>
								<th>Cartegory</th>
								<th>Action</th>
							</thead>
							<?php
							while($data=mysqli_fetch_assoc($sql_staff)){
							?>
							<tr>
								<td><?php echo $k;?>.</td>
								<td><?php echo $data['UPLOAD_DATE'];?></td>
								<td><?php echo $data['HEADING'];?></td>
								<td><?php echo $data['CATEGORIES'];?></td>
								<td style="width: 13%"><a href="posts.php?id=<?php echo urlencode(base64_encode($data['UP_ID']));?>&action=delete" data-toggle = "tooltip" data-placement = "top" title = "Delete"><span class="fa fa-trash"></span></a>
								&nbsp;
								<a href="verify.php?id=<?php echo urlencode(base64_encode($data['UP_ID']));?>&action=view" data-toggle = "tooltip" data-placement = "top" title = "Verify Posts"><span class="fa fa-check-square"></span></a>
								&nbsp;
								<a href="edit_post.php?id=<?php echo urlencode(base64_encode($data['UP_ID']));?>&action=edit" data-toggle = "tooltip" data-placement = "top" title = "Edit Details"><span class="fa fa-edit"></span></a>
							</td>
						</tr>
						<?php
						$k=$k+1;
						}
						?>
					</table>
				</div>
				<?php
				}else{
				echo '<div class = "alert alert-info alert-dismissable">
								<button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
				&times;</button>Info! There is no news uploaded yet.</div>';
				}
				}
				?>
			</div>
		</div>
	</div>
</div>
<?php
	include ('includes/footer.php');
?>