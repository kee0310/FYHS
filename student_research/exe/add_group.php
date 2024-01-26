<?php
include('../connect.php');

$student_id = $_POST['student_id'];
$group_id = $_POST['group_id'];

date_default_timezone_set("Asia/Kuala_Lumpur");
$date = date('Y/m/d H:i:s', time());

mysqli_query($conn, "INSERT INTO zstudent_group VALUES ('$student_id', '$group_id', '1', '$date')");

echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_index.php>";
