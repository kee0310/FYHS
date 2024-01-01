<?php

include("exe/connect.php");


$admin_time_select_start = $_POST['admin_time_select_start'];



mysql_query("UPDATE admin_detail SET admin_time_select_start=N'$admin_time_select_start'");



header("location: ../admin_set_data.php");
