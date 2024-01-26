<?php
include('connect.php');;


$id = $_GET['id'];
$return = null;

mysqli_query($conn, "UPDATE zgroup_research SET status=N'$return' WHERE group_id='$id'");

header("location: admin_dashboard04.php");
