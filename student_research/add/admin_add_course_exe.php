<?php


include("connect2.php");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


			$course_title=$_POST['course_title'];
			$course_teacher=$_POST['course_teacher'];
			$course_english_title=$_POST['course_english_title'];
			$course_class_year=$_POST['course_class_year'];
			$course_half_one=$_POST['course_half_one'];
			$course_class_day=$_POST['course_class_day'];
			$course_teacher_studylevel=$_POST['course_teacher_studylevel'];
			$course_teacher_exp=$_POST['course_teacher_exp'];
			$course_teacher_subject=$_POST['course_teacher_subject'];
			$course_place=$_POST['course_place'];
			$course_type=$_POST['course_type'];
			$course_require=$_POST['course_require'];			
			$course_intro=$_POST['course_intro'];
			$course_content=$_POST['course_content'];
			$course_material=$_POST['course_material'];
			$course_mark=$_POST['course_mark'];
			$course_class_upperlower=$_POST['course_class_upperlower'];
			$course_student_limit=$_POST['course_student_limit'];
			$course_form=$_POST['course_form'];	

$sql = "INSERT INTO course_detail (course_title,course_teacher,course_english_title,course_class_year,course_half_one,course_class_day,course_teacher_studylevel,course_teacher_exp,course_teacher_subject,course_place,course_type,course_require,course_intro,course_content,course_material,course_mark,course_class_upperlower,course_student_limit,course_form)
VALUES (N'$course_title',N'$course_teacher',N'$course_english_title',N'$course_class_year',N'$course_half_one',N'$course_class_day',N'$course_teacher_studylevel',N'$course_teacher_exp',N'$course_teacher_subject',N'$course_place',N'$course_type',N'$course_require',N'$course_intro',N'$course_content',N'$course_material',N'$course_mark',N'$course_class_upperlower',N'$course_student_limit',N'$course_form')";

if (mysqli_query($conn, $sql)) {

	header("location: ../admin_subject_all_list.php");
			exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>			
