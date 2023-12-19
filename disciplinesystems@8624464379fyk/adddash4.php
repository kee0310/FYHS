<?php


include("connect2.php");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


			$student_number=$_POST['student_number'];
			$student_name=$_POST['student_name'];
			$student_class=$_POST['student_class'];
			$student_seat=$_POST['student_seat'];
			$reason=$_POST['reason'];
			$remark=$_POST['remark'];
			$date=$_POST['date'];


$sql = "INSERT INTO ddis4 (dis4_student_number,dis4_student_name,dis4_student_class,dis4_student_seat,dis4_reason,dis4_remark,dis4_date)
VALUES (N'$student_number',N'$student_name',N'$student_class',N'$student_seat',N'$reason',N'$remark',N'$date')";

if (mysqli_query($conn, $sql)) {

	header("location: dash4.php");
			exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>