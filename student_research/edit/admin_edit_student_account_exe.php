<?php

include("exe/connect.php");


$id = $_POST['student_id'];
$student_number = $_POST['student_number'];
$student_name = $_POST['student_name'];
$student_class = $_POST['student_class'];
$student_form = $_POST['student_form'];
$student_login_number = $_POST['student_login_number'];
$student_password = $_POST['student_password'];
$student_password_new = $_POST['student_password_new'];
$student_tf = $_POST['student_tf'];



mysql_query("UPDATE student_detail SET student_number=N'$student_number',student_name=N'$student_name',student_class=N'$student_class',student_form=N'$student_form',student_login_number=N'$student_login_number',student_password=N'$student_password',student_password_new=N'$student_password_new',student_tf=N'$student_tf'  WHERE student_id='$id' ");



header("location: ../admin_set_password.php");
