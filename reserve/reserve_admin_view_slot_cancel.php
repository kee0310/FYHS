<?php
include("connect.php");


	$id = $_GET['id'];
		
	
	mysql_query("DELETE FROM reserve4_shop WHERE reserve4_id='$id'");
   
	header("location: reserve_admin_view_slot_list.php");
?>