<?php
include("exe/connect.php");


$id = $_GET['id'];
$return = 0;

mysql_query("UPDATE zgroup_pdf SET pdf_allow_edit=N'$return' WHERE pdf_id='$id'");

header("location: admin_dashboard07.php");
