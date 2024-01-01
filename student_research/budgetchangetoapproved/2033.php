<?php
include("exe/connect.php");


$id = $_GET['id'];
$return = 2;

mysql_query("UPDATE zgroup_budget SET budget_203=N'$return' WHERE budget_id='$id'");

header("location: ../admin_view_budget.php?id=$id");
