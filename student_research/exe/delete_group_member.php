<?php
include('../connect.php');

session_start();

$student_id = $_GET['id'];

$id = $_SESSION['id'];
$group_id = $_SESSION['group_id'];

mysqli_query($conn, "DELETE FROM zstudent_group WHERE student_id='$student_id'");

if ($id == $group_id) {
  $_SESSION['group_id'] = "";
}
header("location: ../student_index.php");
