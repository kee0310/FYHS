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
$pdf_mark02 = $_GET['b'];


$sql = "UPDATE zstudent_mark
		SET mark_pdf02 = N'$pdf_mark02'
		WHERE group_id='$group_id'";

if (mysqli_query($conn, $sql)) {

  header("location: ../admin_researchProposal.php");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
