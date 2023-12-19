<?php
include("connect.php");

$id = $_POST['news_id'];

mysqli_query($conn, "DELETE FROM wnews WHERE news_id='$id' ");

$result = mysqli_query($conn, "SELECT * FROM wnews_img where news_id='$id'");
while ($row = mysqli_fetch_array($result)) {
  unlink("../img/news/" . $row['img_name']);
}

mysqli_query($conn, "DELETE FROM wnews_img WHERE news_id='$id' ");

header("location: wnews.php");
?>