<?php
include("connect.php");


	$id = $_POST['id'];
	$date = $_POST['date_paid'];
	$paid = 1 ;
		
	
	mysql_query("UPDATE ddis3 SET
	
			dis3_paid_tf=N'$paid',
			dis3_date_paid=N'$date'
			
			WHERE dis3_id='$id' 
	
	");
   
	header("location: dashboard03unpaid.php");
?>