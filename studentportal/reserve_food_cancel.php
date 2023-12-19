<?php
include("connect.php");


	$id = $_POST['fd3id'];
		
	
	mysql_query("DELETE FROM reserve_fd3 WHERE reserve_fd3_id='$id'");
   
	header("location: dashboard.php");
?>