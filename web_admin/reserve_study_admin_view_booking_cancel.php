<?php
include("connect.php");


$id = $_GET['id'];


mysqli_query($conn, "DELETE FROM reserve6_shop WHERE reserve6_id='$id'");

header("location: reserve_study_admin_view_booking_list.php");
?>