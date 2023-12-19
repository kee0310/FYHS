<?php
include("connect.php");


	$id = $_GET['id'];
		
	
	mysql_query("DELETE FROM zstudent_group WHERE group_id='$id'");
   
	header("location: student_subject_all_list.php");
?>