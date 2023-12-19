<?php
include("connect.php");

$id = $_POST['news_id'];
$news_date = $_POST['news_date'];
$news_dept = $_POST['news_dept'];
$news_title = $_POST['news_title'];
$news_content = $_POST['news_content'];

mysqli_query(
  $conn,
  "UPDATE wnews 
    SET news_title=N'$news_title',
        news_content=N'$news_content', 
        news_date=N'$news_date',
        news_dept=N'$news_dept' 
    WHERE news_id='$id'"
);

header("location: wnews.php");
?>