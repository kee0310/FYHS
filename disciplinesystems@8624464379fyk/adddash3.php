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
			$item=$_POST['item'];
			$item_detail=$_POST['item_detail'];
			$paid_tf=$_POST['paid_tf'];
			$paid_total=$_POST['paid_total'];
			$date_paid=$_POST['date_paid'];
			$date_buy=$_POST['date_buy'];


$sql = "INSERT INTO ddis3 (dis3_student_number,dis3_student_name,dis3_student_class,dis3_student_seat,dis3_item,dis3_item_detail,dis3_paid_tf,dis3_paid_total,dis3_date_paid,dis3_date_buy)
VALUES (N'$student_number',N'$student_name',N'$student_class',N'$student_seat',N'$item',N'$item_detail',N'$paid_tf',N'$paid_total',N'$date_paid',N'$date_buy')";

if (mysqli_query($conn, $sql)) {
	
	
	

	header("location: prints3.php?id=$student_number");
			exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>