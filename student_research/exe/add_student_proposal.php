<?php
session_start();

include('../connect.php');
header('content-type:text/html;charset=utf-8');

if (isset($_POST['btn-upload'])) {
  $id = $_SESSION['id'];

  date_default_timezone_set("Asia/Kuala_Lumpur");
  $date = date('Y/m/d H:i:s', time());

  $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
  $new_file_name = strtolower($file);
  $final_file = str_replace(' ', '-', $new_file_name);

  $file_loc = $_FILES['file']['tmp_name'];
  $folder = "../pdf/proposal/";

  // if upload success
  if (move_uploaded_file($file_loc, $folder . $final_file)) {
    // insert to database
    $sql = "INSERT INTO zgroup_proposal(group_id,pdf_file,pdf_date,pdf_allow_edit)
                VALUES (N'$id',N'$final_file',N'$date',N'1')";

    if (mysqli_query($conn, $sql)) {
      header("location: ../student_research_proposal.php?success");
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
  } else {
?>
    <script>
      alert('error while uploading file');
      window.location.href = 'student_research_proposal.php?fail';
    </script>
<?php
  }
}
?>