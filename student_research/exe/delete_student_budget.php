<?php
include('../connect.php');

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM zgroup_budget WHERE group_id='$id' AND budget_allow_edit='1' ");

header("location: ../student_index.php");
