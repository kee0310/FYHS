<?php
include('../connect.php');
header('Content-type:text/html; charset=utf-8');

$id = $_GET['id'];
$file = $_GET['file'];

$result = mysqli_query($conn, "SELECT * FROM zgroup_$file where group_id='$id' AND editable='1'");
while ($row = mysqli_fetch_array($result)) {
  if (unlink("../pdf/$file/" . $row['pdf_file'])) {
    mysqli_query($conn, "DELETE FROM zgroup_$file WHERE group_id='$id' AND editable='1'");
  } else {
    echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_research_$file.php>";
    echo '<script>alert("无法删除")</script>';
  }
}

header("location: ../student_index.php");
