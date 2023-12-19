<?php
include("connect.php");


	$id = $_GET['id'];
		
	
	mysql_query("DELETE FROM zgroup_pdf WHERE group_code='$id' AND pdf_allow_edit='1' ");
   
	header("location: student_upload_pdf.php");
?>