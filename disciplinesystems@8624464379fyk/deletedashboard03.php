<?php
include("connect.php");


	$id = $_GET['id'];
		
	
	mysql_query("DELETE FROM ddis3 WHERE dis3_id='$id'");
   
	header("location: dashboard03.php");
?>