<?php
session_start();
// Destroying All Sessions
if(session_destroy())
{
// Redirecting To Home Page
header("Location: reserve_admin_login.php");
}
?>