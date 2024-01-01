<?php
include("exe/connect.php");


$id = $_GET['id'];
$return = 0;

mysql_query("UPDATE zgroup_budget SET budget_603=N'$return' WHERE budget_id='$id'");

header("location: ../admin_view_budget.php?id=$id");
