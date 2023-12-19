<?php
$db_host = 'db.fyk.edu.my';
$db_user = 'fykedumy';
$db_pass = 'fykedumy66699';
$db_database = 'fykedumy';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
mysqli_set_charset($conn, "utf8");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>