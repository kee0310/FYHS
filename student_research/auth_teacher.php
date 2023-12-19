<?php
	include('connect.php');
	
	session_start();
	$id = $_SESSION['username'];

	$result = mysql_query("SELECT teacher_role from zteacher_detail where teacher_number='$id'");
	$data=mysql_fetch_assoc($result);

	$role = $data['teacher_role'];
	$admin = "teacher" ;

if($role !== $admin){
echo "<meta http-equiv=REFRESH CONTENT=1;url=index.php>";
echo '<script type="text/javascript">

          window.onload = function () { alert("Only Teacher Account Can Access !"); }

</script>';
exit(); }

?>