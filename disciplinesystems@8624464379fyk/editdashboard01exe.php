<?php

	include("connect.php");


			$id = $_POST['id'];
			$remark = $_POST['remark'];


	mysql_query("UPDATE ddis1 SET

			dis1_remark=N'$remark'
			
			WHERE dis1_id='$id' 
	
	");



	header("location:dashboard01.php");
?>