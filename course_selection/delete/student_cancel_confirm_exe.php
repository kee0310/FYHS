<?php
include("connect.php");

	$user_id = $_SESSION['username'];
	$id = $_POST['course_selection_id'];	
	

	mysql_query("DELETE FROM course_selection WHERE course_selection_id='$id' AND student_number='$user_id'");

	header("location: ../student_subject_all_list.php");
?>