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
$date = date('Y/m/d', time());
$time = date('H:i:s', time());
$day = date('l', time());
$week = date('W', time());

$record_name = $_POST['record_name'];
$record_class = $_POST['record_class'];
$record_teacher = $_POST['record_teacher'];
$record_other = $_POST['record_other'];
$record_solution = $_POST['record_solution'];
$record_remark = $_POST['record_remark'];
$record_img01 = $_POST['record_img01'];
$record_img02 = $_POST['record_img02'];


$sql = "INSERT INTO xrecord (
			record_name,record_date,record_time,record_day,record_week,record_class,record_teacher,record_other,record_solution,record_remark,record_img01,record_img02
			)
			VALUES (
			N'$record_name',N'$date',N'$time',N'$day',N'$week',N'$record_class',N'$record_teacher',N'$record_other',N'$record_solution',N'$record_remark',N'$record_img01',N'$record_img02'
			)";

if (mysqli_query($conn, $sql)) {
	echo "<meta http-equiv=REFRESH CONTENT=1;url=report_dashboard01.php>";

	exit();
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




mysqli_close($conn); ?>