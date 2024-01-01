<?php
require('exe/connect.php');
require('connect2.php');
include("../exe/auth_admin.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<title>选修课问卷调查回馈表</title>
</head>

<body onload="window.print()">
	<table style="width: 100%">
		<tbody>
			<tr>
				<td align="center"><img src="../img/fylogo1.jpg" style="width: 25%;height:auto">
				</td>
			</tr>
			<tr>
				<td align="center">
					<p style="line-height: 1.3;">选修课问卷调查回馈表</p>
				</td>
			</tr>
		</tbody>
	</table>

	<?php

	include('exe/connect.php');

	$id = $_GET['id'];
	$result = mysql_query("
			
									SELECT *
									FROM course_detail
									WHERE course_id='$id'

									;

									");
	while ($row = mysql_fetch_array($result)) {

		echo '<table style="width: 100%; border-collapse: collapse;" border="0" >';
		echo '<tbody>';
		echo '<tr>';
		echo '<td align="center" ><p>年份：</p></td>';
		echo '<td align="center" ><p>' . $row["course_class_year"] . '</p></td>';
		echo '<td align="center" ><p>课程名称：</p></td>';
		echo '<td align="center" ><p>' . $row["course_title"] . '</p></td>';
		echo '<td align="center" ><p>授课老师：</p></td>';
		echo '<td align="center" ><p>' . $row["course_teacher"] . '</p></td>';
		echo '<td align="center" ></td>';
		if ($row["course_class_upperlower"] == 1) {

			echo '<td>上半年</td>';
		} elseif ($row["course_class_upperlower"] == 2) {

			echo '<td>下半年</td>';
		} else {

			echo '<td>全年</td>';
		}

		if ($row["course_class_day"] == 1) {

			echo '<td>星期三</td>';
		} elseif ($row["course_class_day"] == 2) {

			echo '<td>星期五</td>';
		} else {

			echo '<td>全年</td>';
		}

		echo '</tr>';
	}

	?>
	</tbody>
	</table>


	<?php

	$classday = $_GET['classday'];

	if ($classday == 1) {


		include('exe/connect.php');

		$id = $_GET['id'];
		$classday = $_GET['classday'];
		$upperlower = $_GET['upperlower'];
		$section = $_GET['year'];
		$result = mysql_query("
			
									SELECT O.student_number,I.student_name,P.course_survey_q1,P.course_survey_q2,P.course_survey_q3,P.course_survey_q4,P.course_survey_q5,P.course_survey_q6,P.course_survey_q7,P.course_survey_q8,P.course_survey_q9,P.course_survey_q10,P.course_survey_q11,P.course_survey_q12,P.course_survey_q13,P.course_survey_q14,P.course_survey_time
									FROM course_selection O 
									JOIN student_detail I ON O.student_number = I.student_number 
									JOIN course_survey P ON P.student_id = I.student_number
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section'
									;
		
			");
		while ($row = mysql_fetch_array($result)) {


			echo '<table style="width: 100%; border-collapse: collapse;" border="0" >';
			echo '<tbody>';
			echo '<tr>';
			echo '<td align="left" style="font-size:11px;line-height: 1.3; width: 30%">姓名：' . $row["student_name"] . '</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td align="left" style="font-size:11px;line-height: 1.3; width: 30%">学号：' . $row["student_number"] . '</td>';
			echo '</tr>';
			echo '</tbody>';
			echo '</table>';

			echo '<table style="width: 100%; border-collapse: collapse;" border="0" >';
			echo '<tbody>';
			echo '<tr>';
			echo '<td align="left" style="font-size:12px;line-height: 1.5;">';
	?>
			<ol>

				<li style="border-bottom: 1px solid #A9A9A9;"><span style="color: red">星期三</span>课程的实际课程内容是否符合网上选课时所叙述的课程纲要？
					<span style="float:right;"><?php
																			if ($row["course_survey_q6"] == 1) {
																				echo "非常不认同";
																			} else if ($row["course_survey_q6"] == 2) {
																				echo "不认同";
																			} else if ($row["course_survey_q6"] == 3) {
																				echo "普通";
																			} else if ($row["course_survey_q6"] == 4) {
																				echo "认同";
																			} else {
																				echo "非常认同";
																			}
																			?> </span>
				</li>
				<li style="border-bottom: 1px solid #A9A9A9;"><span style="color: red">星期三</span>课程的授课内容是否有助于你对相关课题或知识的了解？
					<span style="float:right;"><?php
																			if ($row["course_survey_q7"] == 1) {
																				echo "非常不认同";
																			} else if ($row["course_survey_q7"] == 2) {
																				echo "不认同";
																			} else if ($row["course_survey_q7"] == 3) {
																				echo "普通";
																			} else if ($row["course_survey_q7"] == 4) {
																				echo "认同";
																			} else {
																				echo "非常认同";
																			}
																			?> </span>
				</li>
				<li style="border-bottom: 1px solid #A9A9A9;"><span style="color: red">星期三</span>课程的老师充分掌握课程内容，有效把握课堂时间教授知识？
					<span style="float:right;"><?php
																			if ($row["course_survey_q8"] == 1) {
																				echo "非常不认同";
																			} else if ($row["course_survey_q8"] == 2) {
																				echo "不认同";
																			} else if ($row["course_survey_q8"] == 3) {
																				echo "普通";
																			} else if ($row["course_survey_q8"] == 4) {
																				echo "认同";
																			} else {
																				echo "非常认同";
																			}
																			?> </span>
				</li>

				<li>想对<span style="color: red">星期三</span>课程老师说的话：</li>
				<div style="border-bottom: 1px solid #A9A9A9; width:100%"><?php echo $row["course_survey_q12"]; ?></div>
				<li>问卷完成时间：</li>
				<div style="border-bottom: 1px solid #A9A9A9; width:100%"><?php echo $row["course_survey_time"]; ?></div>
			</ol>

		<?php
			echo '</td>';
			echo '</tr>';

			echo '</tbody>';
			echo '</table>';
		}
	} else {


		include('exe/connect.php');

		$id = $_GET['id'];
		$classday = $_GET['classday'];
		$upperlower = $_GET['upperlower'];
		$section = $_GET['section'];
		$result = mysql_query("
			
									SELECT O.student_number,I.student_name,P.course_survey_q1,P.course_survey_q2,P.course_survey_q3,P.course_survey_q4,P.course_survey_q5,P.course_survey_q6,P.course_survey_q7,P.course_survey_q8,P.course_survey_q9,P.course_survey_q10,P.course_survey_q11,P.course_survey_q12,P.course_survey_q13,P.course_survey_q14,P.course_survey_time
									FROM course_selection O 
									JOIN student_detail I ON O.student_number = I.student_number 
									JOIN course_survey P ON P.student_id = I.student_number
									WHERE O.course_id='$id' AND O.course_class_day='$classday' AND P.course_survey_upperlower='$upperlower' AND P.course_survey_section='$section'
									;			
			");
		while ($row = mysql_fetch_array($result)) {


			echo '<table style="width: 100%; border-collapse: collapse;" border="0" >';
			echo '<tbody>';
			echo '<tr>';
			echo '<td align="left" style="font-size:11px;line-height: 1.3; width: 30%">姓名：' . $row["student_name"] . '</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td align="left" style="font-size:11px;line-height: 1.3; width: 30%">学号：' . $row["student_number"] . '</td>';
			echo '</tr>';
			echo '</tbody>';
			echo '</table>';

			echo '<table style="width: 100%; border-collapse: collapse;" border="0" >';
			echo '<tbody>';
			echo '<tr>';
			echo '<td align="left" style="font-size:12px;line-height: 1.5;">';
		?>
			<ol>

				<li style="border-bottom: 1px solid #A9A9A9;"><span style="color: blue">星期五</span>课程的实际课程内容是否符合网上选课时所叙述的课程纲要？
					<span style="float:right;"><?php
																			if ($row["course_survey_q9"] == 1) {
																				echo "非常不认同";
																			} else if ($row["course_survey_q9"] == 2) {
																				echo "不认同";
																			} else if ($row["course_survey_q9"] == 3) {
																				echo "普通";
																			} else if ($row["course_survey_q9"] == 4) {
																				echo "认同";
																			} else {
																				echo "非常认同";
																			}
																			?> </span>
				</li>
				<li style="border-bottom: 1px solid #A9A9A9;"><span style="color: blue">星期五</span>课程的授课内容是否有助于你对相关课题或知识的了解？
					<span style="float:right;"><?php
																			if ($row["course_survey_q10"] == 1) {
																				echo "非常不认同";
																			} else if ($row["course_survey_q10"] == 2) {
																				echo "不认同";
																			} else if ($row["course_survey_q10"] == 3) {
																				echo "普通";
																			} else if ($row["course_survey_q10"] == 4) {
																				echo "认同";
																			} else {
																				echo "非常认同";
																			}
																			?> </span>
				</li>
				<li style="border-bottom: 1px solid #A9A9A9;"><span style="color: blue">星期五</span>课程的老师充分掌握课程内容，有效把握课堂时间教授知识？
					<span style="float:right;"><?php
																			if ($row["course_survey_q11"] == 1) {
																				echo "非常不认同";
																			} else if ($row["course_survey_q11"] == 2) {
																				echo "不认同";
																			} else if ($row["course_survey_q11"] == 3) {
																				echo "普通";
																			} else if ($row["course_survey_q11"] == 4) {
																				echo "认同";
																			} else {
																				echo "非常认同";
																			}
																			?> </span>
				</li>
				<li>想对<span style="color: blue">星期五</span>课程老师说的话：（如没有课程，请填写“无”或者“没有”）</li>
				<div style="border-bottom: 1px solid #A9A9A9; width:100%"><?php echo $row["course_survey_q13"]; ?></div>
				<li>问卷完成时间：</li>
				<div style="border-bottom: 1px solid #A9A9A9; width:100%"><?php echo $row["course_survey_time"]; ?></div>
			</ol>

	<?php
			echo '</td>';
			echo '</tr>';

			echo '</tbody>';
			echo '</table>';
		}
	}


	?>







</body>

</html>