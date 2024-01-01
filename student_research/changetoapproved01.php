<?php
include("exe/connect.php");


$id = $_GET['id'];
$return = 1;

mysql_query("UPDATE zgroup_detail SET apply_approved=N'$return' WHERE apply_id='$id'");

header("location: admin_dashboard04.php");
