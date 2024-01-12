<?php
include("../connect.php");


$pdf_mark02 = $_POST['pdf_mark02'];
$pdf_markname = $_POST['pdf_markname'];
$pdf_id = $_POST['pdf_id'];
$group_id = $_POST['group_id'];


mysqli_query($conn, "UPDATE zgroup_proposal SET pdf_mark02=N'$pdf_mark02',pdf_markname02=N'$pdf_markname' WHERE pdf_id='$pdf_id'");

echo "<meta http-equiv=REFRESH CONTENT=1;url=updatepdfmark02.php?a=" . $group_id . "&b=" . $pdf_mark02 . ">";
