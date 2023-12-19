<?php
include("connect.php");


	$id = $_GET['id'];
	$unreturn = 0 ;
	
	$date = date('0000-00-00', time());	
	
	mysql_query("UPDATE ddis1 SET
	
			dis1_return_tf=N'$unreturn',
			dis1_date_return=N'$date'
			
			WHERE dis1_id='$id' 
	
	");
   
	header("location: dashboard01.php");
?>