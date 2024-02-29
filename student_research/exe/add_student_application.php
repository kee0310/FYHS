<?php
include('../connect.php');
header('Content-type:text/html; charset=utf-8');

$group_id = $_POST['group_id'];

date_default_timezone_set("Asia/Kuala_Lumpur");
$date = date('Y/m/d H:i:s', time());

$teacher_name = $_REQUEST['teacher_name'];

$research_topic = $_REQUEST['research_topic'];
$research_topic_en = $_REQUEST['research_topic_en'];

$research_direct = $_REQUEST['research_direct'];
$research_tag = implode(' | ', $_POST['research_tag']);
$research_tag = trim($research_tag, ' | ');
$research_desc = $_REQUEST['research_desc'];

$result = mysqli_query($conn, "SELECT * from zteacher_detail where teacher_name='$teacher_name' AND teacher_role = 'teacher'");
$num_rows = mysqli_num_rows($result);

if ($num_rows == 1) {
  mysqli_query(
    $conn,
    "INSERT INTO zgroup_research
      VALUES ('$group_id', '$teacher_name', '1', '$research_topic', '$research_topic_en', '$research_direct', '$research_tag', '$research_desc', '$date', null, null)"
  );
  header("location: ../student_index.php");
} else {
  echo '<script>alert("老师名字不正确")</script>';
  echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_research_application.php>";
}
