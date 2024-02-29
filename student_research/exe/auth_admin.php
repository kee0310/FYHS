<?php
include('../connect.php');
header('Content-type:text/html; charset=utf-8');

session_start();
$id = $_SESSION['id'];

$result = mysqli_query($conn, "SELECT admin_role from zadmin_detail where admin_id='$id'");
$data = mysqli_fetch_assoc($result);

$role = $data['admin_role'];
$admin = "admin";

if ($role !== $admin) {
  echo "<meta http-equiv=REFRESH CONTENT=1;url=index.php>";
  echo '<script type="text/javascript"> window.onload = function () { alert("Only Admin Account Can Access !"); }</script>';

  session_destroy();
  exit();
}
