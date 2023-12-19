<?php
$admin = "co63tell@96" ;
session_start();
if($_SESSION["username"] !== $admin){
echo "<meta http-equiv=REFRESH CONTENT=1;url=index.php>";
echo '<script type="text/javascript">

          window.onload = function () { alert("Only Admin Account Can Access !"); }

</script>';
exit(); }

?>