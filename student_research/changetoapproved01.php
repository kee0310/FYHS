<?php
include('connect.php');;


$id = $_GET['id'];
$return = 1;

mysqli_query($conn, "UPDATE zgroup_research SET research_status=N'$return' WHERE group_id='$id'");

header("location: admin_dashboard04.php");
