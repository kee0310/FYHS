<?php
include('../connect.php');

$id = $_GET['id'];
$table = $_GET['table'];
$status = $_GET['status'];

mysqli_query($conn, "UPDATE `$table` SET `status`=N'$status' WHERE `group_id`='$id'");

if ($table == 'zgroup_budget') {
  header("location: ../admin_view_budget.php?id=$id");
} elseif ($table == 'zgroup_research') {
  header("location: ../admin_researchApplication.php");
}
