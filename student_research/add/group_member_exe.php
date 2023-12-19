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

			$student_number=$_POST['student_number'];
			$group_code=$_POST['group_code'];
			$group_leader=$_POST['group_leader'];


			$group_time=$date;

			$sql = "INSERT INTO zstudent_group (student_number,group_code,group_leader,group_time)
				VALUES (N'$student_number',N'$group_code',N'$group_leader',N'$group_time')";

if (mysqli_query($conn, $sql)) {
	echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_subject_all_list.php>";
	
			exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}				



 
			mysqli_close($conn); ?>