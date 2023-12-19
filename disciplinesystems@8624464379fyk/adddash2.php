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
			$item=$_POST['item'];
			$item_detail=$_POST['item_detail'];


$sql = "INSERT INTO ddis2 (dis2_student_number,dis2_student_name,dis2_student_class,dis2_student_seat,dis2_date_borrow,dis2_date_return,dis2_date_estimate,dis2_date_count,dis2_return_tf,dis2_reason,dis2_remark,dis2_item,dis2_item_detail)
VALUES (N'$student_number',N'$student_name',N'$student_class',N'$student_seat',N'$date_borrow',N'$date_return',N'$date_estimate',N'$date_count',N'$return_tf',N'$reason',N'$remark',N'$item',N'$item_detail')";

if (mysqli_query($conn, $sql)) {

	header("location: prints2.php?id=$student_number");
			exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>