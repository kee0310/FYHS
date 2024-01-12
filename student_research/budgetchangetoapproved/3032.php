<?php
include("../../connect.php");


$id = $_GET['id'];
$return = 0;

mysqli_query($conn, "UPDATE zgroup_budget SET budget_303=N'$return' WHERE budget_id='$id'");

header("location: ../admin_view_budget.php?id=$id");
