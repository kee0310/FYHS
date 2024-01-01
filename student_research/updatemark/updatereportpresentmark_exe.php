<?php
include("exe/connect.php");


$pdf_report01 = $_POST['pdf_report01'];
$pdf_report02 = $_POST['pdf_report02'];
$pdf_report03 = $_POST['pdf_report03'];
$pdf_present01 = $_POST['pdf_present01'];
$pdf_present02 = $_POST['pdf_present02'];
$pdf_present03 = $_POST['pdf_present03'];

$pdf_id = $_POST['pdf_id'];
$group_code = $_POST['code'];


mysql_query("UPDATE zgroup_pdf02 SET pdf_report01=N'$pdf_report01',pdf_report02=N'$pdf_report02',pdf_report03=N'$pdf_report03',pdf_present01=N'$pdf_present01',pdf_present02=N'$pdf_present02',pdf_present03=N'$pdf_present03' WHERE pdf_id='$pdf_id'");

echo "<meta http-equiv=REFRESH CONTENT=1;url=updatereportpresentmark.php?a=" . $group_code . "&b=" . $pdf_report01 . "&c=" . $pdf_report02 . "&d=" . $pdf_report03 . "&e=" . $pdf_present01 . "&f=" . $pdf_present02 . "&g=" . $pdf_present03 . ">";
