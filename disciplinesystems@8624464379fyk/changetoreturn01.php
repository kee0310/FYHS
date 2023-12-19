<?php
include("connect.php");


	$id = $_POST['id'];
	$date = $_POST['date_return'];
	$return = 1 ;
		
	
	mysql_query("UPDATE ddis1 SET
	
			dis1_return_tf=N'$return',
			dis1_date_return=N'$date'
			
			WHERE dis1_id='$id' 
	
	");
   
	header("location: dashboard01unreturn.php");
?>