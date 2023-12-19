<?php
include("connect.php");


	$id = $_POST['id'];
	$date = $_POST['date_return'];
	$return = 1 ;
		
	
	mysql_query("UPDATE ddis2 SET
	
			dis2_return_tf=N'$return',
			dis2_date_return=N'$date'
			
			WHERE dis2_id='$id' 
	
	");
   
	header("location: dashboard02unreturn.php");
?>