<?php
include("connect.php");


	$id = $_GET['id'];
		
	
	mysql_query("DELETE FROM ddis4 WHERE dis4_id='$id'");
   
	header("location: dashboard04.php");
?>