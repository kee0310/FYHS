<?php
$mysqli = new mysqli("db.fyk.edu.my", "fykedumy", "fykedumy66699", "fykedumy");
mysqli_set_charset($mysqli, "utf8");

/* check connection */
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}
