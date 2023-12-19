<?php
session_start();
require('connect.php');

			$id = $_SESSION['username'];
			$result = mysql_query("SELECT admin_survey_onoff from admin_detail");
			$data=mysql_fetch_assoc($result);
			
			$surveyonoff=$data['admin_survey_onoff'];

			if($surveyonoff == 1){

				$id = $_SESSION['username'];
				$result = mysql_query("SELECT count(*) as total from course_survey where student_id='$id'");
				$data=mysql_fetch_assoc($result);
			
				$totalsurvey=$data['total'];
				
				if($totalsurvey == 0){
				echo "<meta http-equiv=REFRESH CONTENT=1;url=student_course_survey_form.php>";
				echo '<script type="text/javascript">

				window.onload = function () { alert("在进行查询或选修课程之前，请完成选修课满意度调查表"); }

				</script>';
				exit(); }
			

			}

				



?>