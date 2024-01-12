<?php
session_start();
include('../connect.php');
date_default_timezone_set("Asia/Kuala_Lumpur");
$date = date('YmdHis', time());


$result = mysqli_query($conn, "SELECT * FROM admin_detail");
while ($row = mysqli_fetch_array($result)) {

  $start_time = $row['admin_time_select_start'];
  $end_time = $row['admin_time_select_end'];
}


if ($start_time > $date && $end_time > $date) {
  echo "<meta http-equiv=REFRESH CONTENT=1;url=student_index.php>";
  echo '<script type="text/javascript">

          window.onload = function () { alert("选课还未开放，无法进行选课。"); }

</script>';
  exit();
}

if ($start_time < $date && $end_time < $date) {
  echo "<meta http-equiv=REFRESH CONTENT=1;url=student_index.php>";
  echo '<script type="text/javascript">

          window.onload = function () { alert("选课时间已结束，无法进行选课。"); }

</script>';
  exit();
}
