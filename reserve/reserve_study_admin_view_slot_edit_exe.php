<?php

	include("connect.php");


			$id = $_POST['reserve7_id'];
			$reserve7_slot_number = $_POST['reserve7_slot_number'];
			$reserve7_slot_date = $_POST['reserve7_slot_date'];
			$reserve7_slot_time = $_POST['reserve7_slot_time'];
			$reserve7_slot_limit = $_POST['reserve7_slot_limit'];
			$reserve7_slot_di = $_POST['reserve7_slot_di'];

	


	mysql_query("UPDATE reserve7_shop SET reserve7_slot_number=N'$reserve7_slot_number',reserve7_slot_date=N'$reserve7_slot_date',reserve7_slot_time=N'$reserve7_slot_time',reserve7_slot_limit=N'$reserve7_slot_limit',reserve7_slot_di=N'$reserve7_slot_di'  WHERE reserve7_id='$id' ");



	header("location: reserve_study_admin_view_slot_list.php");
?>