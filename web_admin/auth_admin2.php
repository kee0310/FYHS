<meta charset="utf-8">
<?php
$admin = "123" ;
session_start();
if($_SESSION["username"] !== $admin){
	
session_destroy();
	
echo "<meta http-equiv=REFRESH CONTENT=1;url=index.php>";
echo '<script type="text/javascript">

          window.onload = function () { alert("Only Admin Account Can Access !"); }

</script>';
exit(); }

?>