<?php



/* Database config */

$db_host    = 'db.fyk.edu.my';
$db_user    = 'fykedumy';
$db_pass    = 'fykedumy66699';
$db_database  = 'fykedumy';

/* End config */


$conn = mysql_connect($db_host, $db_user, $db_pass, $db_database) or die('Unable to establish a DB connection');

mysql_select_db($db_database, $conn);
mysqli_query($conn, "SET names UTF8");
