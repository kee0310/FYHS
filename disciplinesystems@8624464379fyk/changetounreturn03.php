<?php
include("connect.php");


	$id = $_GET['id'];
	$unpaid = 0 ;
	
	$date = date('0000-00-00', time());	
	
	mysql_query("UPDATE ddis3 SET
	
			dis3_paid_tf=N'$unpaid',
			dis3_date_paid=N'$date'
			
			WHERE dis3_id='$id' 
	
	");
   
	header("location: dashboard03.php");
?>