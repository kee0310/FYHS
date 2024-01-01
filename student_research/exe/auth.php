<!-- 

 This is a authentication file for student page.
 It will print a alert message, kill all session and redirect to student login page.

-->
<?php
include('exe/connect.php');

session_start();

$username = $_SESSION['username'];
$result = mysqli_query($link, "SELECT student_number from zstudent_detail where student_number='$username'");
$num_rows = mysqli_num_rows($result);

if ($num_rows != 1) {
  echo '<meta http-equiv=REFRESH CONTENT=1;url=student_login.php>';
  echo '<script>alert("请重新登入!")</script>';

  session_destroy();
  exit();
}
?>