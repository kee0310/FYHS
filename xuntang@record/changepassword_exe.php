<?php
include("connect.php");
session_start();

$record_name = $_POST['record_name'];
$password = $_POST['password'];
$newpassword = $_POST['newpassword'];

$id = $_SESSION['username'];
$result = mysql_query("SELECT * FROM xuser WHERE user_email='$id'");
$row = mysql_fetch_assoc($result);
$user_password = $row['user_password'];

if ($user_password == $password) {

	mysql_query("UPDATE xuser SET user_password=N'$newpassword', user_new='FALSE' WHERE user_email='$id' and user_name='$record_name'");

	header("location: report_logout.php");

} else {
	header("location: report_dashboard04.php?original_password_incorrect");
}



?>