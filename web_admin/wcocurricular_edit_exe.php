<?php
include("connect.php");

$id = $_POST['co_id'];
$co_categories = $_POST['co_categories'];
$co_logo = $_POST['co_logo'];
$co_logodesp = $_POST['co_logodesp'];
$co_chname = $_POST['co_chname'];
$co_engname = $_POST['co_engname'];
$co_pplamount = $_POST['co_pplamount'];
$co_description = $_POST['co_description'];
$co_history = $_POST['co_history'];

mysqli_query(
  $conn,
  "UPDATE wcocurricular 
    SET co_categories=N'$co_categories',
        co_logo=N'$co_logo',
        co_logodesp=N'$co_logodesp',
        co_chname=N'$co_chname',
        co_engname=N'$co_engname',
        co_pplamount=N'$co_pplamount',
        co_description=N'$co_description',
        co_history=N'$co_history'  
    WHERE co_id='$id'"
);

header("location: wcocurricular.php");
?>