<?php
include('../connect.php');

$student_id = $_POST['student_id'];
$group_id = $_POST['group_id'];

date_default_timezone_set("Asia/Kuala_Lumpur");
$date = date('Y/m/d H:i:s', time());

$sql = "INSERT INTO zstudent_group (student_id,group_id,group_leader,group_time)
				VALUES (N'$student_id',N'$group_id',N'1',N'$date')";

if (mysqli_query($conn, $sql)) {
  echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_index.php>";

  exit();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
