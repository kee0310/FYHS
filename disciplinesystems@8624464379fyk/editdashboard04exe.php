<?php

	include("connect.php");


			$id = $_POST['id'];
			$remark = $_POST['remark'];


	mysql_query("UPDATE ddis4 SET
	
			dis4_remark=N'$remark'
			
			WHERE dis4_id='$id' 
	
	");



	header("location:dashboard04.php");
?>