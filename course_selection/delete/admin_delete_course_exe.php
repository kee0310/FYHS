<?php
include("connect.php");


	$id = $_POST['course_id'];
		
	
	mysql_query("DELETE FROM course_detail WHERE course_id='$id'");
   
	header("location: ../admin_subject_all_list.php");
?>