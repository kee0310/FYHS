<?php

	include("connect.php");


			$id = $_POST['id'];
			$remark = $_POST['remark'];


	mysql_query("UPDATE ddis2 SET
	
			dis2_remark=N'$remark'
			
			WHERE dis2_id='$id' 
	
	");



	header("location:dashboard02.php");
?>