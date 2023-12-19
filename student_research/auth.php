<?php
session_start();

if(!isset($_SESSION["username"])){
echo "<meta http-equiv=REFRESH CONTENT=2;url=index.php>";
exit(); }
?>