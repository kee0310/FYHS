<?php
include("connect.php");

$news_id = $_REQUEST['news_id'];
$news_date = $_REQUEST['news_date'];
$news_dept = $_REQUEST['news_dept'];
$news_title = $_REQUEST['news_title'];
$news_content = $_REQUEST['news_content'];

mysqli_query(
  $conn,
  "INSERT INTO wnews 
    VALUES ('$news_id', '$news_title', '$news_content', '$news_date', '$news_dept')"
);

/////////////////// SAVE IMAGE ///////////////////////

$error = array();
$extension = array("jpeg", "jpg", "png", "gif");
foreach ($_FILES["file"]["tmp_name"] as $key => $tmp_name) {
  $file_name = $_FILES["file"]["name"][$key];
  $file_tmp = $_FILES["file"]["tmp_name"][$key];
  $ext = pathinfo($file_name, PATHINFO_EXTENSION);

  if (in_array($ext, $extension)) {
    if (!file_exists("../img/news/" . $file_name)) {
      move_uploaded_file($file_tmp = $_FILES["file"]["tmp_name"][$key], "../img/news/" . $file_name);
      mysqli_query(
        $conn,
        "INSERT INTO wnews_img
          VALUES (NULL, '$file_name', '$news_id')"
      );
    } else {
      $filename = basename($file_name, $ext);
      $newFileName = $filename . time() . "." . $ext;
      move_uploaded_file($file_tmp = $_FILES["file"]["tmp_name"][$key], "../img/news/" . $newFileName);
      mysqli_query(
        $conn,
        "INSERT INTO wnews_img 
          VALUES (NULL, '$newFileName', '$news_id')"
      );
    }
  } else {
    array_push($error, "$file_name, ");
  }
}

header("location: wnews.php");
?>