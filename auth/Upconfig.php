<?php
//connection
$host = 'localhost';
$user = 'ujamaatech_magazine';
$pass = '5enNYBQe';
$DB = 'ujamaatech_magazine';
$uploadans = '';
$ans = '';
$con = mysqli_connect($host,$user,$pass,$DB);
if ($con) {
echo '';
}else{
echo '<script>alert("Error! Check your connection and try again")</script>';
}
?>
<script language="javascript">
if ( window.history.replaceState ) {
window.history.replaceState( null, null, window.location.href );
}
</script>