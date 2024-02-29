<?php
include('connect.php');;


$id = $_POST['id'];
$teacher_comment = $_POST['teacher_comment'];

mysqli_query($conn, "UPDATE zgroup_research SET teacher_comment=N'$teacher_comment' WHERE group_id='$id'");

header("location: admin_researchApplication.php");
