<?php
session_start();
require('exe/connect.php');

$id = $_SESSION['username'];
$result = mysqli_query($link, "SELECT admin_survey_onoff from admin_detail");
$data = mysqli_fetch_assoc($result);

$surveyonoff = $data['admin_survey_onoff'];

if ($surveyonoff == 0) {


	echo "<meta http-equiv=REFRESH CONTENT=1;url=student_subject_all_list.php>";
	echo '<script type="text/javascript">

				window.onload = function () { alert("选修课满意度调查表还未开放"); }

				</script>';
	exit();
}
