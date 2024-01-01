<?php
include("exe/connect.php");


$pdf_mark02 = $_POST['pdf_mark02'];
$pdf_markname = $_POST['pdf_markname'];
$pdf_id = $_POST['pdf_id'];
$group_code = $_POST['group_code'];


mysql_query("UPDATE zgroup_pdf SET pdf_mark02=N'$pdf_mark02',pdf_markname02=N'$pdf_markname' WHERE pdf_id='$pdf_id'");

echo "<meta http-equiv=REFRESH CONTENT=1;url=updatepdfmark02.php?a=" . $group_code . "&b=" . $pdf_mark02 . ">";
