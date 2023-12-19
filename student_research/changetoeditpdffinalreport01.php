<?php
include("connect.php");


	$id = $_GET['id'];
	$return = 0 ;	
	
	mysql_query("UPDATE zgroup_pdf03 SET pdf_allow_edit=N'$return' WHERE pdf_id='$id'");
   
	header("location: admin_dashboard11.php");
?>

