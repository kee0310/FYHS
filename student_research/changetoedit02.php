<?php
include('connect.php');;


$id = $_GET['id'];
$return = 1;

mysqli_query($conn, "UPDATE zgroup_research SET apply_allow_edit=N'$return' WHERE group_id='$id'");

header("location: admin_dashboard04.php");
