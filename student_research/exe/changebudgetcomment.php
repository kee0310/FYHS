<?php
include("exe/connect.php");


$id = $_POST['id'];
$comment = $_POST['budget_comment'];

mysqli_query($link, "UPDATE zgroup_budget SET budget_comment=N'$comment' WHERE budget_id='$id'");

header("location: admin_dashboard06.php");
