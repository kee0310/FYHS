<?php
include("connect.php");


	$id = $_GET['id'];
		
	
	mysql_query("DELETE FROM reserve2_shop WHERE reserve2_id='$id'");
   
	header("location: reserve_admin_view_booking_list.php");
?>