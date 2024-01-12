<?php
include("../connect.php");


$mark_individual = $_POST['mark_individual'];
$mark_id = $_POST['mark_id'];
$group_id = $_POST['group_id'];


mysqli_query($conn, "UPDATE zstudent_mark SET mark_individual=N'$mark_individual' WHERE mark_id='$mark_id' AND group_id='$group_id'");

echo "<meta http-equiv=REFRESH CONTENT=1;url=../teacher_dashboard04.php>";
