<?php
include("connect.php");


$id = $_GET['id'];


mysqli_query($conn, "DELETE FROM reserve7_shop WHERE reserve7_id='$id'");

header("location: reserve_study_admin_view_slot_list.php");
?>