<?php
include("connect.php");


	$id = $_POST['id'];
	$comment = $_POST['apply_comment'];	
	
	mysql_query("UPDATE zgroup_detail SET apply_comment=N'$comment' WHERE apply_id='$id'");
   
	header("location: admin_dashboard04.php");
?>

