<?php
	@require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html>
	<body>
		<?php
		session_unset();
		session_destroy();
		header('location:../index');
		?>
	</body>
</html>