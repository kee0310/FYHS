<?php
include("connect.php");

$announcement_id = $_REQUEST['announcement_id'];
$announcement_date = $_REQUEST['announcement_date'];
$announcement_title = $_REQUEST['announcement_title'];
$announcement_content = $_REQUEST['announcement_content'];
$announcement_dept = $_REQUEST['announcement_dept'];


mysqli_query(
  $conn,
  "INSERT INTO wannouncement
    VALUES ('$announcement_id', '$announcement_title', '$announcement_content', '$announcement_date', '$announcement_dept')"
);

/////////////////// SAVE IMAGE ///////////////////////

$error = array();
$extension = array("jpeg", "jpg", "png", "gif");
foreach ($_FILES["file"]["tmp_name"] as $key => $tmp_name) {
  $file_name = $_FILES["file"]["name"][$key];
  $file_tmp = $_FILES["file"]["tmp_name"][$key];
  $ext = pathinfo($file_name, PATHINFO_EXTENSION);

  if (in_array($ext, $extension)) {
    if (!file_exists("../img/announcement/" . $file_name)) {
      move_uploaded_file($file_tmp = $_FILES["file"]["tmp_name"][$key], "../img/announcement/" . $file_name);
      mysqli_query(
        $conn,
        "INSERT INTO wannouncement_img
          VALUES (NULL, '$file_name', '$announcement_id')"
      );
    } else {
      $filename = basename($file_name, $ext);
      $newFileName = $filename . time() . "." . $ext;
      move_uploaded_file($file_tmp = $_FILES["file"]["tmp_name"][$key], "../img/announcement/" . $newFileName);
      mysqli_query(
        $conn,
        "INSERT INTO wannouncement_img 
          VALUES (NULL, '$newFileName', '$announcement_id')"
      );
    }
  } else {
    array_push($error, "$file_name, ");
  }
}

header("location: wannouncement.php");
?>