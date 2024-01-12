<?php
include("../connect.php");


$pdf_mark03 = $_POST['pdf_mark03'];
$pdf_markname = $_POST['pdf_markname'];
$pdf_id = $_POST['pdf_id'];
$group_id = $_POST['group_id'];


mysqli_query($conn, "UPDATE zgroup_proposal SET pdf_mark03=N'$pdf_mark03',pdf_markname03=N'$pdf_markname' WHERE pdf_id='$pdf_id'");

echo "<meta http-equiv=REFRESH CONTENT=1;url=updatepdfmark03.php?a=" . $group_id . "&b=" . $pdf_mark03 . ">";
