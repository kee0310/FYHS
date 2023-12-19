<?php
session_start();

if(!isset($_SESSION["id"])){
echo "<meta http-equiv=REFRESH CONTENT=1;url=index.php>";
exit(); }
?>