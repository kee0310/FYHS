<meta charset="utf-8">
<?php
$admin = "fy20@21" ;
session_start();
if($_SESSION["username"] !== $admin){
	
session_destroy();
	
echo "<meta http-equiv=REFRESH CONTENT=1;url=reserve_admin_login.php>";
echo '<script type="text/javascript">

          window.onload = function () { alert("Only Admin【升学辅导处】Account Can Access !"); }

</script>';
exit(); }

?>