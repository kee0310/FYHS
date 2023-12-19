<?php
header('content-type:text/html;charset=utf-8');
// Create connection
$conn = mysqli_connect("db.fyk.edu.my", "fykedumy", "fykedumy66699", "fykedumy");
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{

if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="pdf02/";
 
 $report_approved = $_POST['report_approved'];
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
	echo "<meta http-equiv=REFRESH CONTENT=1;url=uploadinsertdata02.php?a=".$final_file."&b=".$file_type."&c=".$new_size."&d=1&e=".$report_approved.">";

 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='student_upload_pdf02.php?fail';
        </script>
  <?php
 }
}


}
?>