<?php
include("connect.php");


	$id = $_POST['course_selection_id'];
	$hidden_id = $_POST['student_number'];	
	
	mysql_query("DELETE FROM course_selection WHERE course_selection_id='$id' AND student_number='$hidden_id'");
   
	header("location: ../admin_view_student_list.php");
?>