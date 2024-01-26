<?php
session_start();

include('../connect.php');
header('content-type:text/html;charset=utf-8');

if (isset($_POST['btn-upload'])) {
  $id = $_SESSION['id'];

  // set uploaded datetime
  date_default_timezone_set("Asia/Kuala_Lumpur");
  $date = date('Y/m/d H:i:s', time());

  // assign new file name
  $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
  $new_file_name = strtolower($file);
  $final_file = str_replace(' ', '-', $new_file_name);

  // get file location
  $file_loc = $_FILES['file']['tmp_name'];
  // set file location
  $folder = "../pdf/finalreport/";

  // get file extension
  $file_ext = pathinfo($final_file, PATHINFO_EXTENSION);

  // check if is pdf file 
  if ($file_ext == "pdf") {
    // if upload success
    if (move_uploaded_file($file_loc, $folder . $final_file)) {
      // insert to database
      mysqli_query($conn, "INSERT INTO zgroup_finalreport(group_id, pdf_allow_edit,pdf_file,pdf_date) VALUES (N'$id',N'1',N'$final_file',N'$date')");
      echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_index.php>";

      // alert if upload unsuccess
    } else {
      echo '<script>alert("无法上传");</script>';
      echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_research_finalreport.php?fail>";
    }

    // alert if file extension are not pdf
  } else {
    echo '<script>alert("需转换成pdf文件");</script>';
    echo "<meta http-equiv=REFRESH CONTENT=1;url=../student_research_finalreport.php?fail>";
  }
}
