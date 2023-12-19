<?php
include("connect.php");


	$student_number = $_POST['student_number'];
	$apply_topic = $_POST['apply_topic'];
	$apply_topiceg = $_POST['apply_topiceg'];

	
	mysql_query("UPDATE zgroup_detail SET apply_topicnew=N'$apply_topic',apply_topicegnew=N'$apply_topiceg' WHERE group_code='$student_number'");
   
	echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_upload_pdf03.php>";
?>

