<meta charset="utf-8">
<?php
$admin = "fy20k21" ;
session_start();
if($_SESSION["username"] !== $admin){
	
session_destroy();
	
echo "<meta http-equiv=REFRESH CONTENT=1;url=reserve_admin_login.php>";
echo '<script type="text/javascript">

          window.onload = function () { alert("Only Admin【贩卖部】Account Can Access !"); }

</script>';
exit(); }

?>