<?php
include("connect.php");


	$id = $_GET['id'];
	$return = 2 ;	
	
	mysql_query("UPDATE zgroup_budget SET budget_803=N'$return' WHERE budget_id='$id'");
   
	header("location: ../admin_view_budget.php?id=$id");
?>

