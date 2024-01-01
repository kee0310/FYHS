<meta charset="utf-8">
<?php
include('exe/connect.php');

include("connect2.php");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}



date_default_timezone_set("Asia/Kuala_Lumpur");
$date = date('Y/m/d H:i:s', time());

$student_number = $_POST['student_number'];
$group_code = $_POST['group_code'];
$group_leader = $_POST['group_leader'];


$group_time = $date;

$sql = "INSERT INTO zstudent_group (student_number,group_code,group_leader,group_time)
				VALUES (N'$student_number',N'$group_code',N'$group_leader',N'$group_time')";

if (mysqli_query($conn, $sql)) {

	$id = $_POST['student_number'];

	$result = mysql_query("SELECT count(*) as total from zstudent_group where student_number='$id'");
	$data = mysql_fetch_assoc($result); {
		if ($data['total'] > 1) {

			$student_number = $_POST['student_number'];
			$group_code = $_POST['group_code'];
			mysql_query("DELETE FROM zstudent_group WHERE group_code='$group_code' and student_number='$student_number' ORDER BY group_id DESC LIMIT 1;");

			echo '<script language="javascript">';
			echo 'alert("无法添加该成员")';
			echo '</script>';

			echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_subject_all_list.php>";
		} else {

			echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_subject_all_list.php>";
			exit();
		}
	}
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




mysqli_close($conn); ?>