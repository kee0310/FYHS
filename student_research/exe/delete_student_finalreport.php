<?php
include('../connect.php');


$id = $_GET['id'];


mysqli_query($conn, "DELETE FROM zgroup_finalreport WHERE group_id='$id' AND pdf_allow_edit='1' ");

$result = mysqli_query($conn, "SELECT * FROM zgroup_finalreport where group_id='$id' AND pdf_allow_edit='1'");
while ($row = mysqli_fetch_array($result)) {
  unlink("../pdf/finalreport/" . $row['pdf_file']);
}


header("location: ../student_research_finalreport.php");
