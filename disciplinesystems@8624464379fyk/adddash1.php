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
			$date_borrow=$_POST['date_borrow'];
			$date_return=$_POST['date_return'];
			$date_estimate=$_POST['date_estimate'];
			$date_count=$_POST['date_count'];
			$return_tf=$_POST['return_tf'];
			$reason=$_POST['reason'];
			$remark=$_POST['remark'];
			$batch_number=$_POST['batch_number'];
			$batch_color=$_POST['batch_color'];

$sql = "INSERT INTO ddis1 (dis1_student_number,dis1_student_name,dis1_student_class,dis1_student_seat,dis1_date_borrow,dis1_date_return,dis1_date_estimate,dis1_date_count,dis1_return_tf,dis1_reason,dis1_remark,dis1_batch_number,dis1_batch_color)
VALUES (N'$student_number',N'$student_name',N'$student_class',N'$student_seat',N'$date_borrow',N'$date_return',N'$date_estimate',N'$date_count',N'$return_tf',N'$reason',N'$remark',N'$batch_number',N'$batch_color')";



if (mysqli_query($conn, $sql)) {

header("location: prints1.php?id=$student_number");			

			exit();


} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>