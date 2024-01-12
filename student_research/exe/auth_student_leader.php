<!-- 

 This is a authentication file for student leader.
 
 - It will print a alert message
 - Kill all session 
 - Redirect to student login page

 If the student are not leader.
 
-->
<?php
include('../connect.php');

$id = $_SESSION['id'];
$result = mysqli_query($conn, "SELECT * from zstudent_group where student_id='$id' and group_leader='1'");
$num_rows = mysqli_num_rows($result);

if ($num_rows != 1) {
  echo '<meta http-equiv=REFRESH CONTENT=1;url=student_index.php>';
  echo '<script>alert("组员无法进行添加 / 修改")</script>';

  exit();
}
?>