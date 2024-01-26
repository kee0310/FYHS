<?php
include('../connect.php');

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM zgroup_budget WHERE budget_id='$id' AND editable='1' ");

header("location: ../student_index.php");
