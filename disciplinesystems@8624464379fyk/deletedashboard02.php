<?php
include("connect.php");


	$id = $_GET['id'];
		
	
	mysql_query("DELETE FROM ddis2 WHERE dis2_id='$id'");
   
	header("location: dashboard02.php");
?>