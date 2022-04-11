<?php
	@require_once 'includes/config.php';
	include ('includes/header.php');
?>
<div class="container"><br>
	<div class="card">
		<h5 class="card-header"><i class="bx bx-detail"></i> Unpublished News</h5>
		<div class="card-body">
			<?php
			/*Code to delete staff*/
			$delete_alert="";
			if(isset($_GET['actiond'])=="Delete"){
			$staff_id=urldecode(base64_decode($_GET['id']));
			$sql_staff=mysqli_query($con, "UPDATE uploads SET APPROVE = 'BLOCKED' WHERE UP_ID='$staff_id'");
			if($sql_staff && !empty($_SESSION['Username'])){
			echo '<script>alert("Success! Deleted successfully")</script>';
			}else{
			echo '<script>alert("Error! Something has gone wrong")</script>';
			}
			}
			?>
			<p>Here you can view all posts that are not yet publishes.</p>
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
				<table class="table table-bordered table-condensed table-responsive table-striped">
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
						<td><a href="posts.php?id=<?php echo urlencode(base64_encode($data['UP_ID']));?>&action=delete" data-toggle = "tooltip" data-placement = "top" title = "Delete"><span class="bx bx-trash"></span></a>
						&nbsp;&nbsp;
						<a href="verify.php?id=<?php echo urlencode(base64_encode($data['UP_ID']));?>&action=view" data-toggle = "tooltip" data-placement = "top" title = "Verify Posts"><span class="bx bx-check-square"></span></a>
						&nbsp;&nbsp;
						<a href="edit_post.php?id=<?php echo urlencode(base64_encode($data['UP_ID']));?>&action=edit" data-toggle = "tooltip" data-placement = "top" title = "Edit Details"><span class="bx bx-edit"></span></a>
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
		echo '<div class = "alert alert-info alert-dismissable">There is no news uploaded yet.</div>';
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
					<td style="width: 13%"><a href="posts.php?id=<?php echo urlencode(base64_encode($data['UP_ID']));?>&actiond=delete" data-toggle = "tooltip" data-placement = "top" title = "Delete"><span class="bx bx-trash"></span></a>
					&nbsp;
					<a href="verify.php?id=<?php echo urlencode(base64_encode($data['UP_ID']));?>&actionv=view" data-toggle = "tooltip" data-placement = "top" title = "Verify Posts"><span class="bx bx-check-square"></span></a>
					&nbsp;
					<a href="edit_post.php?id=<?php echo urlencode(base64_encode($data['UP_ID']));?>&actione=edit" data-toggle = "tooltip" data-placement = "top" title = "Edit Details"><span class="bx bx-edit"></span></a>
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
	echo '<div class = "alert alert-info alert-dismissable">Info! There is no news uploaded yet.</div>';
	}
	}
	?>
</div>
</div>
</div>
<?php
	include ('includes/footer.php');
?>