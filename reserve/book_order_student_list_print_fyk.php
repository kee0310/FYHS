<?php
require('connect.php');
require('connect2.php');
include("exe/auth.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<title>2022初二至高三年段网上订书</title>
</head>

<body onload="window.print()">
	<p>2022初二至高三年段网上订书 - 学生订购单</p>

	<?php


	include('connect.php');


	$id = $_GET['id'];
	$result = mysql_query("
							
							SELECT *
							FROM reserve_bk4
							WHERE reserve_name = '$id'
							");
	while ($row = mysql_fetch_array($result)) {
		echo $row['reserve_name'];
		echo '&nbsp;&nbsp;';
		echo $row['student_name'];
		echo '&nbsp;&nbsp;';
		echo $row['student_class'];
	}
	?>

	<?php
	include('connect.php');
	$id = $_GET['id'];

	$result = mysql_query(" 
							SELECT SUM(b.reserve_bk5_price) as sum_price
							FROM reserve_bk6 a
							JOIN reserve_bk5 b ON b.reserve_bk5_id = a.reserve_bk6_book_id
							WHERE a.reserve_bk6_student_number ='$id'
							");
	$row = mysql_fetch_assoc($result);
	$sum_price = $row['sum_price'];

	echo '<div style="font-size: 18px;font-weight: 300;">总数：RM ' . $sum_price . '</div>';
	?>

	<table style="width: 100%">
		<tbody>



			<tr>
				<td style="width: 100%;vertical-align: top;">


					<table style="width: 100%; border-collapse: collapse;" border="1">
						<thead>
							<tr>
								<th style="font-size:12px; line-height: 1.4;width: 5%">序</th>
								<th style="font-size:12px; line-height: 1.4;width: 20%">书名</th>
								<th style="font-size:12px; line-height: 1.4;width: 15%">出版社</th>
								<th style="font-size:12px; line-height: 1.4;width: 15%">编者</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">年份</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">金额</th>
								<th style="font-size:12px; line-height: 1.4;width: 10%">尺码</th>
								<th style="font-size:12px; line-height: 1.4;width: 15%">备注</th>
							</tr>
						</thead>
						<tbody>
							<?php

							include('connect.php');


							$id = $_GET['id'];

							$result = mysql_query(" 
							SELECT a.reserve_bk6_id,a.reserve_bk6_bookname,a.reserve_bk6_size,b.reserve_bk5_publishing,b.reserve_bk5_editor,b.reserve_bk5_year,b.reserve_bk5_price,
	RANK () OVER ( 
		ORDER BY a.reserve_bk6_book_id ASC
	) book_rank							
							
							FROM reserve_bk6 a
							JOIN reserve_bk5 b ON b.reserve_bk5_id = a.reserve_bk6_book_id
							WHERE a.reserve_bk6_student_number ='$id'
							");

							while ($row = mysql_fetch_array($result)) {



								echo '<tr>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">' . $row["book_rank"] . '</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">' . $row["reserve_bk6_bookname"] . '</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">' . $row["reserve_bk5_publishing"] . '</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">' . $row["reserve_bk5_editor"] . '</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">' . $row["reserve_bk5_year"] . '</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">' . $row["reserve_bk5_price"] . '</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;">' . $row["reserve_bk6_size"] . '</td>';
								echo '<td align="center" style="font-size:11px;line-height: 1.3;"></td>';
								echo '</tr>';
							}

							?>
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table>

</body>

</html>