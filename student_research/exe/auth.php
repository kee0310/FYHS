<!-- 

 This is a authentication file for student.
 
 - It will print a alert message
 - Kill all session 
 - Redirect to student login page

 If the student not exist in database.
 
-->
<?php
include('../connect.php');

$id = $_SESSION['id'];
$result = mysqli_query($conn, "SELECT * from zstudent_detail where student_id='$id'");
$num_rows = mysqli_num_rows($result);

if ($num_rows != 1) {
  echo '<script>alert("请重新登入")</script>';
  echo '<meta http-equiv=REFRESH CONTENT=1;url=exe/logout.php>';

  exit();
}
?>