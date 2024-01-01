<?php
include("exe/connect.php");


$id = $_GET['id'];
$return = 1;

mysql_query("UPDATE zgroup_pdf02 SET pdf_allow_edit=N'$return' WHERE pdf_id='$id'");

header("location: admin_dashboard09.php");
