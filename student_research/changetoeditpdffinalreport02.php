<?php
include('connect.php');;


$id = $_GET['id'];
$return = 1;

mysqli_query($conn, "UPDATE zgroup_finalreport SET pdf_allow_edit=N'$return' WHERE pdf_id='$id'");

header("location: admin_dashboard11.php");
