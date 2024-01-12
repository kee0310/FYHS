<?php
$mysqli = new mysqli("db.fyk.edu.my", "fykedumy", "fykedumy66699", "fykedumy");
mysqli_set_charset($mysqli, "utf8");

/* check connection */
if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}

$db_host    = 'db.fyk.edu.my';
$db_user    = 'fykedumy';
$db_pass    = 'fykedumy66699';
$db_database  = 'fykedumy';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_database) or die('Unable to establish a DB connection');
