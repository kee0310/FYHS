<?php

/* Database config */
$db_host = 'db.fyk.edu.my';
$db_user = 'fykedumy';
$db_pass = 'fykedumy66699';
$db_database = 'fykedumy';

$link = mysqli_connect($db_host, $db_user, $db_pass, $db_database) or die('Unable to establish a DB connection');

mysqli_select_db($link, $db_database);
mysqli_query($link, "SET names UTF8");
