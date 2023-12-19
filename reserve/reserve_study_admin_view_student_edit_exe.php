<?php

	include("connect.php");


			$id = $_POST['reserve5_id'];
			$reserve5_name = $_POST['reserve5_name'];
			$student_name = $_POST['student_name'];
			$student_class = $_POST['student_class'];
			$student_seat = $_POST['student_seat'];
			$student_password = $_POST['student_password'];
			$reserve5_tf = $_POST['reserve5_tf'];
			$reserve5_tf2 = $_POST['reserve5_tf2'];
			$reserve5_tf3 = $_POST['reserve5_tf3'];

	


	mysql_query("UPDATE reserve5_shop SET reserve5_name=N'$reserve5_name',student_name=N'$student_name',student_class=N'$student_class',student_seat=N'$student_seat',student_password=N'$student_password',reserve5_tf=N'$reserve5_tf',reserve5_tf2=N'$reserve5_tf2',reserve5_tf3=N'$reserve5_tf3'  WHERE reserve5_id='$id' ");



	header("location: reserve_study_admin_view_student_list.php");
?>