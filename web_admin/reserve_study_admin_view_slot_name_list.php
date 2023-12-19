<?php
require('connect.php');
include("auth_admin2.php");
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>预约表</title>
</head>

<body onload="window.print()">

	<table style="width: 100%; border-collapse: collapse;" border="0">
		<tbody>
			<?php
			include('connect.php');

			$id = $_GET['id'];
			$result = mysqli_query($conn, "
							SELECT * FROM reserve7_shop	WHERE reserve7_slot_number = $id				
							");

			if ($result === FALSE) {
				die(mysqli_error()); // TODO: better error handling
			}

			while ($row = mysqli_fetch_array($result)) {
				echo '<tr>';
				echo '<td align="center" style="font-size:11px;line-height: 1.2; width: 3%">' . $row["reserve7_slot_number"] . ':</td>';
				echo '<td align="left" style="font-size:11px;line-height: 1.2; width: 50%">' . $row["reserve7_slot_date"] . '</td>';
				echo '<td align="right" style="font-size:11px;line-height: 1.2; width: 47%">' . $row["reserve7_slot_time"] . '</td>';
				echo '</tr>';
			}

			?>
		</tbody>
	</table>
	<div style="height:10px"></div>
	<table style="width: 100%; border-collapse: collapse;" border="1">
		<thead>
			<tr>
				<th style="font-size:12px; line-height: 1.4;width: 10%">学号</th>
				<th style="font-size:12px; line-height: 1.4;width: 20%">班级</th>
				<th style="font-size:12px; line-height: 1.4;width: 10%">座号</th>
				<th style="font-size:12px; line-height: 1.4;width: 30%">姓名</th>
				<th style="font-size:12px; line-height: 1.4;width: 30%">备注</th>
			</tr>
		</thead>


		<tbody>
			<?php
			include('connect.php');

			$id = $_GET['id'];
			$result = mysqli_query($conn, "
							SELECT *
							FROM reserve6_shop
							INNER JOIN reserve5_shop
							ON reserve6_shop.reserve6_student_number = reserve5_shop.reserve5_name
							WHERE reserve6_shop.reserve6_slot = $id
							ORDER BY reserve6_shop.reserve6_id ASC;
													
							");

			if ($result === FALSE) {
				die(mysqli_error()); // TODO: better error handling
			}

			while ($row = mysqli_fetch_array($result)) {

				echo '<tr>';

				echo '<td align="center" style="font-size:11px;line-height: 1.2;">' . $row["reserve6_student_number"] . '</td>';
				echo '<td align="center" style="font-size:11px;line-height: 1.2;">' . $row["student_class"] . '</td>';
				echo '<td align="center" style="font-size:11px;line-height: 1.2;">' . $row["student_seat"] . '</td>';
				echo '<td align="center" style="font-size:11px;line-height: 1.2;">' . $row["student_name"] . '</td>';
				echo '<td align="center" style="font-size:11px;line-height: 1.2;">' . $row["reserve6_status"] . '</td>';

				echo '</tr>';
			}

			?>
		</tbody>
	</table>

</body>

</html>