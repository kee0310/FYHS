<!-- 

 This is a authentication file for teacher page.
 It will print a alert message, kill all session and redirect to main index page.

-->
<?php
include('exe/connect.php');

session_start();

$username = $_SESSION['username'];
$result = mysqli_query($link, "SELECT teacher_role from zteacher_detail where teacher_number='$username'");
$num_rows = mysqli_num_rows($result);

if ($num_rows != 1) {
	echo "<meta http-equiv=REFRESH CONTENT=1;url=index.php>";
	echo '<script>alert("Only Teacher Account Can Access !")</script>';

	session_destroy();
	exit();
}
?>