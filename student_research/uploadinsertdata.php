<?php
session_start();

include("exe/connect.php");
header('content-type:text/html;charset=utf-8');
// Create connection
$conn = mysqli_connect("db.fyk.edu.my", "fykedumy", "fykedumy66699", "fykedumy");
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

date_default_timezone_set("Asia/Kuala_Lumpur");
$date = date('Y/m/d:His', time());

$id = $_SESSION['username'];

$final_file = $_GET['a'];
$file_type = $_GET['b'];
$new_size = $_GET['c'];

$pdf_allow_edit = $_GET['d'];


$sql = "INSERT INTO zgroup_pdf(group_code,pdf_file,pdf_type,pdf_size,pdf_date,pdf_allow_edit)
VALUES (N'$id',N'$final_file',N'$file_type',N'$new_size',N'$date',N'$pdf_allow_edit')";

if (mysqli_query($conn, $sql)) {

	header("location: student_upload_pdf.php?success");
	exit();
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
