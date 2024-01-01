<?php
include("exe/connect.php");


$pdf_mark01 = $_POST['pdf_mark01'];
$pdf_markname = $_POST['pdf_markname'];
$pdf_id = $_POST['pdf_id'];
$group_code = $_POST['group_code'];


mysql_query("UPDATE zgroup_pdf SET pdf_mark01=N'$pdf_mark01',pdf_markname01=N'$pdf_markname' WHERE pdf_id='$pdf_id'");

echo "<meta http-equiv=REFRESH CONTENT=1;url=updatepdfmark01.php?a=" . $group_code . "&b=" . $pdf_mark01 . ">";
