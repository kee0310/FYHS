<?php
include("connect.php");


	$id = $_GET['id'];
		
	
	mysql_query("DELETE FROM ddis1 WHERE dis1_id='$id'");
   
	header("location: dashboard01.php");
?>