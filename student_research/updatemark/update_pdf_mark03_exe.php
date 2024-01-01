<?php
include("exe/connect.php");


$pdf_mark03 = $_POST['pdf_mark03'];
$pdf_markname = $_POST['pdf_markname'];
$pdf_id = $_POST['pdf_id'];
$group_code = $_POST['group_code'];


mysql_query("UPDATE zgroup_pdf SET pdf_mark03=N'$pdf_mark03',pdf_markname03=N'$pdf_markname' WHERE pdf_id='$pdf_id'");

echo "<meta http-equiv=REFRESH CONTENT=1;url=updatepdfmark03.php?a=" . $group_code . "&b=" . $pdf_mark03 . ">";
