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
			$date = date('YmdHis', time());

			$course_id=$_POST['course_id'];
			$course_class_day=$_POST['course_class_day'];
			$course_class_upperlower=$_POST['upperlower'];
			$course_half_one=$_POST['halfone'];
			$course_title=$_POST['course_title'];	
			$student_number=$_POST['student_number'];
			$course_class_year=$_POST['course_class_year'];
			$course_select_time=$date;
			$course_select_ip=$_SERVER['REMOTE_ADDR'];
			
				$sql = "INSERT INTO course_selection (course_id,course_class_day,course_class_upperlower,course_half_one,course_title,student_number,course_class_year,course_select_time,course_select_ip)
				VALUES (N'$course_id',N'$course_class_day',N'$course_class_upperlower',N'$course_half_one',N'$course_title',N'$student_number',N'$course_class_year',N'$course_select_time',N'$course_select_ip')";

				

if (mysqli_query($conn, $sql)) {
	echo "<meta http-equiv=REFRESH CONTENT=1;url=../admin_subject_all_list.php>";

			exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>