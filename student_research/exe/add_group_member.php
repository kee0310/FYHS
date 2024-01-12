<?php
include('../connect.php');


$student_id = $_POST['student_id'];
$group_id = $_POST['group_id'];

date_default_timezone_set("Asia/Kuala_Lumpur");
$date = date('Y/m/d H:i:s', time());

$sql = "INSERT INTO zstudent_group (student_id,group_id,group_leader,group_time)
				VALUES (N'$student_id',N'$group_id',N'0',N'$date')";


if (mysqli_query($conn, $sql)) {


  $result = mysqli_query($conn, "SELECT count(*) as total from zstudent_group where student_id='$student_id'");
  $data = mysqli_fetch_assoc($result); {
    if ($data['total'] > 1) {

      mysqli_query($conn, "DELETE FROM zstudent_group WHERE group_id='$group_id' and student_id='$student_id' ORDER BY group_id DESC LIMIT 1;");

      echo '<script language="javascript">';
      echo 'alert("无法添加该成员")';
      echo '</script>';

      echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_index.php>";
    } else {
      echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_index.php>";

      exit();
    }
  }
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




mysqli_close($conn);
