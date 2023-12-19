<?php
include("connect.php");


	$id = $_GET['id'];
	$unreturn = 0 ;
	
	$date = date('0000-00-00', time());	
	
	mysql_query("UPDATE ddis2 SET
	
			dis2_return_tf=N'$unreturn',
			dis2_date_return=N'$date'
			
			WHERE dis2_id='$id' 
	
	");
   
	header("location: dashboard02.php");
?>