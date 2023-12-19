<?php
include("connect.php");


	$id = $_GET['id'];
		
	
	mysql_query("DELETE FROM zgroup_budget WHERE group_code='$id' AND budget_allow_edit='1' ");
   
	header("location: student_subject_all_list.php");
?>