<?php



/* Database config */

$db_host		= 'db.fyk.edu.my';
$db_user		= 'fykedumy';
$db_pass		= 'fykedumy66699';
$db_database	= 'exam'; 

/* End config */



$link = mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_select_db($db_database,$link);
mysql_query("SET names UTF8");

?>