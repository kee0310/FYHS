<?php

	include("connect.php");


			$id = $_POST['reserve4_id'];
			$reserve4_slot_number = $_POST['reserve4_slot_number'];
			$reserve4_slot_date = $_POST['reserve4_slot_date'];
			$reserve4_slot_time = $_POST['reserve4_slot_time'];
			$reserve4_slot_limit = $_POST['reserve4_slot_limit'];


	


	mysql_query("UPDATE reserve4_shop SET reserve4_slot_number=N'$reserve4_slot_number',reserve4_slot_date=N'$reserve4_slot_date',reserve4_slot_time=N'$reserve4_slot_time',reserve4_slot_limit=N'$reserve4_slot_limit'  WHERE reserve4_id='$id' ");



	header("location: reserve_admin_view_slot_list.php");
?>