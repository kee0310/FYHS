<?php
include('connect.php');;


$id = $_GET['id'];
$return = 0;

mysqli_query($conn, "UPDATE zgroup_proposal SET pdf_allow_edit=N'$return' WHERE pdf_id='$id'");

header("location: admin_dashboard07.php");
