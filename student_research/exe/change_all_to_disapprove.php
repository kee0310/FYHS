<?php
include('../connect.php');

$id = $_GET['id'];
$table = $_GET['table'];

if ($table == 'zgroup_budget') {
  mysqli_query($conn, "UPDATE `$table` SET `status`=N'0' WHERE `group_id`='$id'");
  header("location: ../admin_view_budget.php?id=$id");
}
