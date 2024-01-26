<?php
include('../connect.php');

$id = $_GET['id'];
$table = $_GET['table'];
$status = $_GET['status'];

if ($table == 'zgroup_budget') {
  $group_id = $_GET['gid'];
  if ($status == '0') {
    mysqli_query($conn, "UPDATE `$table` SET `status`=N'1' WHERE `budget_id`='$id'");
  } elseif ($status == "1") {
    mysqli_query($conn, "UPDATE `$table` SET `status`=N'2' WHERE `budget_id`='$id'");
  } elseif ($status == "2") {
    mysqli_query($conn, "UPDATE `$table` SET `status`=N'0' WHERE `budget_id`='$id'");
  } else {
    mysqli_query($conn, "UPDATE `$table` SET `status`=N'1' WHERE `budget_id`='$id'");
  }
  header("location: ../admin_view_budget.php?id=$group_id");
}

if ($table == 'zgroup_research') {
  if ($status == '0') {
    mysqli_query($conn, "UPDATE `$table` SET `status`=N'1' WHERE `group_id`='$id'");
  } elseif ($status == "1") {
    mysqli_query($conn, "UPDATE `$table` SET `status`=N'2' WHERE `group_id`='$id'");
  } elseif ($status == "2") {
    mysqli_query($conn, "UPDATE `$table` SET `status`=N'0' WHERE `group_id`='$id'");
  } else {
    mysqli_query($conn, "UPDATE `$table` SET `status`=N'1' WHERE `group_id`='$id'");
  }
  header("location: ../admin_dashboard04.php");
}
