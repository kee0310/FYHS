<?php

	include("connect.php");

			$id = $_POST['student_number'];

	header("location:dashboard05.php?id=$id");
?>