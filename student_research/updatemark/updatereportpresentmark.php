<?php
session_start();

include("../connect.php");
header('content-type:text/html;charset=utf-8');
// Create connection
$conn = mysqli_connect("db.fyk.edu.my", "fykedumy", "fykedumy66699", "fykedumy");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

date_default_timezone_set("Asia/Kuala_Lumpur");
$date = date('Y/m/d:His', time());

$id = $_SESSION['id'];

$group_id = $_GET['a'];
$pdf_report01 = $_GET['b'];
$pdf_report02 = $_GET['c'];
$pdf_report03 = $_GET['d'];
$pdf_present01 = $_GET['e'];
$pdf_present02 = $_GET['f'];
$pdf_present03 = $_GET['g'];


$sql = "UPDATE zstudent_mark
		SET mark_report01 = N'$pdf_report01',mark_report02 = N'$pdf_report02',mark_report03 = N'$pdf_report03',mark_present01 = N'$pdf_present01',mark_present02 = N'$pdf_present02',mark_present03 = N'$pdf_present03'
		WHERE group_id='$group_id'";

if (mysqli_query($conn, $sql)) {

  header("location: ../admin_dashboard09.php");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
