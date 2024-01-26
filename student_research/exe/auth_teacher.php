<!-- 

 This is a authentication file for teacher page.

 - It will print a alert message
 - Kill all session 
 - Redirect to main index  page
 
-->
<?php
include('../connect.php');

$id = $_SESSION['id'];

$result = mysqli_query($conn, "SELECT * from zteacher_detail where teacher_id='$id'");
$num_rows = mysqli_num_rows($result);

if ($num_rows != 1) {
  echo '<script>alert("Only Teacher Account Can Access !")</script>';
}
?>