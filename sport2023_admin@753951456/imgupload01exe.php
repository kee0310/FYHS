<?php
session_start();

include("connect.php");
header('content-type:text/html;charset=utf-8');
// Create connection
$conn = mysqli_connect("db.fyk.edu.my", "fykedumy", "fykedumy66699", "fykedumy");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

			date_default_timezone_set("Asia/Kuala_Lumpur");
			$date = date('Y/m/d:His', time());
			
			$id = $_SESSION['username'];
			
			$final_file=$_GET['a'];
			$file_type=$_GET['b'];
			$new_size=$_GET['c'];
			
			$user_id=$_GET['d'];


$sql = "UPDATE qsport SET qimg=N'$final_file' WHERE user_id='$user_id'";

if (mysqli_query($conn, $sql)) {

	header("location: admin_dashboard01.php?success");
			exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>			
