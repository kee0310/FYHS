<?php
include('../connect.php');

$group_id = $_POST['group_id'];

$budget_title = $_REQUEST['budget_title'];
$budget_amount = $_REQUEST['budget_amount'];

date_default_timezone_set("Asia/Kuala_Lumpur");
$date = date('Y/m/d H:i:s', time());

foreach ($budget_title as $index => $budget_title_temp) {
  mysqli_query(
    $conn,
    "INSERT INTO zgroup_budget
      VALUES (NULL, '$group_id', '1', '$budget_title_temp', '$budget_amount[$index]', '$date', NULL, NULL)"
  );
  echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_index.php>";
}
