<?php
include("connect.php");

$id = $_POST['announcement_id'];
$announcement_date = $_POST['announcement_date'];
$announcement_dept = $_POST['announcement_dept'];
$announcement_title = $_POST['announcement_title'];
$announcement_content = $_POST['announcement_content'];

mysqli_query(
  $conn,
  "UPDATE wannouncement 
    SET announcement_title=N'$announcement_title',
        announcement_content=N'$announcement_content', 
        announcement_date=N'$announcement_date' ,
        announcement_dept=N'$announcement_dept' 
    WHERE announcement_id='$id'"
);

header("location: wannouncement.php");
?>