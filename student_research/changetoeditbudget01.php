<?php
include('connect.php');;


$id = $_GET['id'];
$return = 0;

mysqli_query($conn, "UPDATE zgroup_budget SET budget_allow_edit=N'$return' WHERE budget_id='$id'");

header("location: admin_dashboard06.php");
