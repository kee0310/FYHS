<?php


include("connect2.php");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


			$reserve7_slot_number=$_POST['reserve7_slot_number'];
			$reserve7_slot_date=$_POST['reserve7_slot_date'];
			$reserve7_slot_time=$_POST['reserve7_slot_time'];
			$reserve7_slot_limit=$_POST['reserve7_slot_limit'];
			$reserve7_slot_di=$_POST['reserve7_slot_di'];


$sql = "INSERT INTO reserve7_shop (reserve7_slot_number,reserve7_slot_date,reserve7_slot_time,reserve7_slot_limit,reserve7_slot_di)
VALUES (N'$reserve7_slot_number',N'$reserve7_slot_date',N'$reserve7_slot_time',N'$reserve7_slot_limit',N'$reserve7_slot_di')";

if (mysqli_query($conn, $sql)) {

	header("location: reserve_study_admin_view_slot_list.php");
			exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>