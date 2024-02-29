<?php
include("../connect.php");

$pdf_report01 = $_POST['pdf_report01'];
$pdf_report02 = $_POST['pdf_report02'];
$pdf_report03 = $_POST['pdf_report03'];
$pdf_present01 = $_POST['pdf_present01'];
$pdf_present02 = $_POST['pdf_present02'];
$pdf_present03 = $_POST['pdf_present03'];

$group_id = $_POST['gid'];

mysqli_query(
  $conn,
  "UPDATE zgroup_report 
    SET pdf_report01=N'$pdf_report01',pdf_report02=N'$pdf_report02',pdf_report03=N'$pdf_report03',pdf_present01=N'$pdf_present01',pdf_present02=N'$pdf_present02',pdf_present03=N'$pdf_present03' 
    WHERE group_id='$group_id'
  "
);

mysqli_query(
  $conn,
  "UPDATE zstudent_mark
    SET mark_report01 = N'$pdf_report01',mark_report02 = N'$pdf_report02',mark_report03 = N'$pdf_report03',mark_present01 = N'$pdf_present01',mark_present02 = N'$pdf_present02',mark_present03 = N'$pdf_present03'
    WHERE group_id='$group_id'
  "
);

header("location: ../admin_researchReport.php");
