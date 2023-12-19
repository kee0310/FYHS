<?php


include("connect2.php");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


			$student_number=$_POST['student_number'];
			$student_name=$_POST['student_name'];
			$student_class=$_POST['student_class'];
			$student_form=$_POST['student_form'];
			$student_login_number=$_POST['student_login_number'];
			$student_password=$_POST['student_password'];
			$student_tf=$_POST['student_tf'];
			$student_login_count=$_POST['student_login_count'];
			$student_password_new=$_POST['student_password_new'];

$sql = "INSERT INTO student_detail (student_number,student_name,student_tf,student_class,student_form,student_login_number,student_password,student_login_count,student_password_new)
VALUES (N'$student_number',N'$student_name',N'$student_tf',N'$student_class',N'$student_form',N'$student_login_number',N'$student_password',N'$student_login_count',N'$student_password_new')";

if (mysqli_query($conn, $sql)) {

	header("location: ../admin_set_password.php");
			exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>