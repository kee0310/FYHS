<?php
include("exe/connect.php");


$mark_individual = $_POST['mark_individual'];
$mark_id = $_POST['mark_id'];
$group_code = $_POST['group_code'];


mysql_query("UPDATE zstudent_mark SET mark_individual=N'$mark_individual' WHERE mark_id='$mark_id' AND group_code='$group_code'");

echo "<meta http-equiv=REFRESH CONTENT=1;url=../teacher_dashboard04.php>";
