<?php
include("connect.php");

$id = $_POST['announcement_id'];

mysqli_query($conn, "DELETE FROM wannouncement WHERE announcement_id='$id' ");

$result = mysqli_query($conn, "SELECT * FROM wannouncement_img where announcement_id='$id'");
while ($row = mysqli_fetch_array($result)) {
  unlink("../img/announcement/" . $row['img_name']);
}

mysqli_query($conn, "DELETE FROM wannouncement_img WHERE announcement_id='$id' ");

header("location: wannouncement.php");
?>