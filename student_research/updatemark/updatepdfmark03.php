<?php
session_start();

include("../connect.php");
header('content-type:text/html;charset=utf-8');


date_default_timezone_set("Asia/Kuala_Lumpur");
$date = date('Y/m/d:His', time());

$id = $_SESSION['id'];

$group_id = $_GET['a'];
$pdf_mark03 = $_GET['b'];


$sql = "UPDATE zstudent_mark
		SET mark_pdf03 = N'$pdf_mark03'
		WHERE group_id='$group_id'";

if (mysqli_query($conn, $sql)) {

  header("location: ../admin_dashboard07.php");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
