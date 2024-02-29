<?php
include('../connect.php');


$id = $_GET['id'];
$gid = $_GET['gid'];
$comment = $_POST['budget_comment'];

mysqli_query($conn, "UPDATE zgroup_budget SET budget_comment=N'$comment' WHERE budget_id='$id'");

header("location: ../admin_view_budget.php?id=$gid");
