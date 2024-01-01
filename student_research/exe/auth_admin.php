<?php
include('exe/connect.php');

session_start();
$id = $_SESSION['username'];

$result = mysqli_query($link, "SELECT admin_role from zadmin_detail where admin_number='$id'");
$data = mysqli_fetch_assoc($result);

$role = $data['admin_role'];
$admin = "admin";

if ($role !== $admin) {
	echo "<meta http-equiv=REFRESH CONTENT=1;url=index.php>";
	echo '<script type="text/javascript">

          window.onload = function () { alert("Only Admin Account Can Access !"); }

</script>';
	exit();
}
