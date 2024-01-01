<?php
session_start();
require('exe/connect.php');

$id = $_SESSION['username'];
$result = mysqli_query($link, "SELECT group_leader from zstudent_group WHERE student_number = $id");
$data = mysqli_fetch_assoc($result);

$group_leader = $data['group_leader'];

if ($group_leader == 0) {
	echo "<meta http-equiv=REFRESH CONTENT=1;url=student_subject_all_list.php>";
	echo '<script type="text/javascript">

				window.onload = function () { alert("组员无法进行添加 / 修改"); }

				</script>';
	exit();
}
