<?php
include('../connect.php');

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM zgroup_proposal where group_id='$id' AND pdf_allow_edit='1'");
while ($row = mysqli_fetch_array($result)) {
  unlink("../pdf/proposal/" . $row['pdf_file']);
}

mysqli_query($conn, "DELETE FROM zgroup_proposal WHERE group_id='$id' AND pdf_allow_edit='1' ");

header("location: ../student_index.php");
