<?php

	include("connect.php");


			$admin_time_select_end = $_POST['admin_time_select_end'];



	mysql_query("UPDATE admin_detail SET admin_time_select_end=N'$admin_time_select_end'");



	header("location: ../admin_set_data.php");
?>