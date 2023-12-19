<?php
include("connect.php");

	$id = $_POST['student_id'];
		
	
	mysql_query("DELETE FROM student_detail WHERE student_id='$id'");
   
	header("location: ../admin_set_password.php");
?>