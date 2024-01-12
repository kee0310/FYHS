<?php
include("../connect.php");


$pdf_mark01 = $_POST['pdf_mark01'];
$pdf_markname = $_POST['pdf_markname'];
$pdf_id = $_POST['pdf_id'];
$group_id = $_POST['group_id'];


mysqli_query($conn, "UPDATE zgroup_proposal SET pdf_mark01=N'$pdf_mark01',pdf_markname01=N'$pdf_markname' WHERE pdf_id='$pdf_id'");

echo "<meta http-equiv=REFRESH CONTENT=1;url=updatepdfmark01.php?a=" . $group_id . "&b=" . $pdf_mark01 . ">";
