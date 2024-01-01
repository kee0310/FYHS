<?php
include("exe/connect.php");


$id = $_GET['id'];


mysql_query("DELETE FROM zgroup_detail WHERE group_code='$id' AND apply_allow_edit='1' ");

header("location: student_subject_all_list.php");
