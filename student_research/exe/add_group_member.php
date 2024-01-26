<!-- This is a execution file for student to add group member -->

<?php
include('../connect.php');

$student_id = $_POST['student_id'];
$group_id = $_POST['group_id'];

date_default_timezone_set("Asia/Kuala_Lumpur");
$date = date('Y/m/d H:i:s', time());

$result = mysqli_query($conn, "SELECT count(*) as total from zstudent_group where student_id='$student_id'");
$data = mysqli_fetch_assoc($result);

// check if group already 
if ($data['total'] > 1) {
  echo '<script language="javascript">alert("该成员已组队")</script>';

  echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_index.php>";
} else {
  $result = mysqli_query($conn, "SELECT * from zstudent_detail where student_id='$student_id'");
  $num_rows = mysqli_num_rows($result);

  // check if student id exist
  if ($num_rows == 1) {
    // insert to db
    mysqli_query($conn, "INSERT INTO zstudent_group VALUES ('$student_id', '$group_id', '0', '$date')");
    echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_index.php>";
  } else {
    // display student id not exist
    echo '<script language="javascript">alert("学号不存在")</script>';
    echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_index.php>";
  }
}
