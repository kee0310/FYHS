<?php
session_start();
include('../connect.php');

$id = $_SESSION['id'];
$result = mysqli_query($conn, "SELECT admin_survey_onoff from admin_detail");
$data = mysqli_fetch_assoc($result);

$surveyonoff = $data['admin_survey_onoff'];

if ($surveyonoff == 1) {

  $id = $_SESSION['id'];
  $result = mysqli_query($conn, "SELECT count(*) as total from course_survey where student_id='$id'");
  $data = mysqli_fetch_assoc($result);

  $totalsurvey = $data['total'];

  if ($totalsurvey == 0) {
    echo "<meta http-equiv=REFRESH CONTENT=1;url=student_course_survey_form.php>";
    echo '<script type="text/javascript">

				window.onload = function () { alert("在进行查询或选修课程之前，请完成选修课满意度调查表"); }

				</script>';
    exit();
  }
}
