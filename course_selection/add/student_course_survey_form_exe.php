<meta charset="utf-8">
<?php
include('connect.php');

include("connect2.php");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



			date_default_timezone_set("Asia/Kuala_Lumpur");
			$date = date('Y/m/d H:i:s', time());

			$student_id=$_POST['student_id'];
			$course_survey_upperlower=$_POST['course_survey_upperlower'];
			$course_survey_section=$_POST['course_survey_section'];
			$q1=$_POST['q1'];
			$q2=$_POST['q2'];
			$q3=$_POST['q3'];
			$q4=$_POST['q4'];
			$q5=$_POST['q5'];
			$q6=$_POST['q6'];
			$q7=$_POST['q7'];
			$q8=$_POST['q8'];
			$q9=$_POST['q9'];
			$q10=$_POST['q10'];
			$q11=$_POST['q11'];
			$q12=$_POST['q12'];
			$q13=$_POST['q13'];
			$q14=$_POST['q14'];

			$course_survey_time=$date;

			$sql = "INSERT INTO course_survey (student_id,course_survey_upperlower,course_survey_q1,course_survey_q2,course_survey_q3,course_survey_q4,course_survey_q5,course_survey_q6,course_survey_q7,course_survey_q8,course_survey_q9,course_survey_q10,course_survey_q11,course_survey_q12,course_survey_q13,course_survey_q14,course_survey_time,course_survey_section)
				VALUES (N'$student_id',N'$course_survey_upperlower',N'$q1',N'$q2',N'$q3',N'$q4',N'$q5',N'$q6',N'$q7',N'$q8',N'$q9',N'$q10',N'$q11',N'$q12',N'$q13',N'$q14',N'$course_survey_time',N'$course_survey_section')";

if (mysqli_query($conn, $sql)) {
	echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_subject_all_list.php>";
	
			exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}				



 
			mysqli_close($conn); ?>