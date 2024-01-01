<?php
session_start();
require('connect.php');
$md = $_REQUEST['id'];


include("exe/auth.php");
include("auth_survey_form.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>选修课系统</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--Icons-->
	<script src="js/lumino.glyphs.js"></script>

	<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="lib/jquery.js" type="text/javascript"></script>
	<script src="src/facebox.js" type="text/javascript"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('a[rel*=facebox]').facebox({
				loadingImage: 'src/loading.gif',
				closeImage: 'src/closelabel.png'
			})
		})
	</script>

	<style type="text/css">
		.material-icons.print {
			Font-size: 45px;
			color: #ffffff;
		}
	</style>

</head>

<body oncontextmenu="return false;">

	<?php

	$result = mysql_query("SELECT admin_survey_onoff from admin_detail");
	$data = mysql_fetch_assoc($result);

	$surveyonoff = $data['admin_survey_onoff'];

	if ($surveyonoff == 1) {

		$header_survey_on = file_get_contents('header_student_survey_on.php');
		echo $header_survey_on;
	} elseif ($surveyonoff == 0) {

		$header = file_get_contents('header_student.php');
		echo $header;
	}
	?>

	<?php
	include('connect.php');

	$id = $_SESSION['username'];
	$result = mysql_query("

			SELECT *
			FROM student_detail
			where student_detail.student_number='$id'
			
			
			");
	while ($row = mysql_fetch_array($result)) {

	?>



		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">


			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#"><svg class="glyph stroked home">
								<use xlink:href="#stroked-home"></use>
							</svg></a></li>
					<li class="active">Icons</li>
				</ol>
			</div><!--/.row-->



			<div class="row">
				<div style="height: 20px"></div>

				<div class="col-md-3">
					<div class="panel panel-info">
						<div class="panel-heading">
							学生个人资料
						</div>
						<div class="panel-body" style="height: 180px">
							<p style="font-size: 18px ; font-weight: 550"><?php echo $row['student_name']; ?></p>
							<p style="font-size: 18px ; font-weight: 550"><?php echo $row['student_class']; ?></p>
							<p style="font-size: 18px ; font-weight: 550 ; color: red">如显示的资料有错误，请告知教务处以便进行修改。</p>


						</div>
					</div>
				</div>
			<?php
		}
			?>

			<div class="col-md-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						2024 上学年已选修课程
					</div>
					<div class="panel-body" style="height: 180px">
						<?php
						include('connect.php');


						$id = $_SESSION['username'];
						$result = mysql_query("
			SELECT * FROM course_selection
			INNER JOIN course_detail
			ON course_selection.course_id = course_detail.course_id
			WHERE course_selection.student_number='$id'	AND	course_selection.course_class_upperlower=1 AND course_selection.course_class_year=2024
			ORDER BY course_selection.course_class_day ASC
			");

						while ($row = mysql_fetch_array($result)) {

						?>
							<p style="font-size: 18px ; font-weight: 550"><?php echo $row['course_title']; ?></p>

							<?php
							if ($row["course_class_day"] == 1) {

								echo "<p style='font-size: 18px ; font-weight: 550'>(星期三)</p>";
							} else {

								echo "<p style='font-size: 18px ; font-weight: 550'>(星期一)</p>";
							}
							?>

						<?php
						}
						?>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-success">
					<div class="panel-heading">
						2024 下学年已选修课程
					</div>
					<div class="panel-body" style="height: 180px">
						<?php
						include('connect.php');


						$id = $_SESSION['username'];
						$result = mysql_query("
			SELECT * FROM course_selection
			INNER JOIN course_detail
			ON course_selection.course_id = course_detail.course_id
			WHERE course_selection.student_number='$id'	AND	course_selection.course_class_upperlower=2 AND course_selection.course_class_year=2024
			ORDER BY course_selection.course_class_day ASC
			");

						while ($row = mysql_fetch_array($result)) {

						?>
							<p style="font-size: 18px ; font-weight: 550"><?php echo $row['course_title']; ?></p>

							<?php
							if ($row["course_class_day"] == 1) {

								echo "<p style='font-size: 18px ; font-weight: 550'>(星期三)</p>";
							} else {

								echo "<p style='font-size: 18px ; font-weight: 550'>(星期一)</p>";
							}
							?>

						<?php
						}
						?>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-success">
					<div class="panel-heading">
						学生选修状态
					</div>
					<div class="panel-body" style="height: 180px">
						<p style="font-size: 18px ; font-weight: 550">2024 上学年 课程选修</p>
						<?php
						include('connect.php');

						$id = $_SESSION['username'];
						$result = mysql_query("SELECT * FROM student_detail WHERE student_number='$id'");
						$row = mysql_fetch_assoc($result);
						$student_form = $row['student_form'];

						$id = $_SESSION['username'];
						$result = mysql_query("SELECT SUM(course_class_day) AS value_sum FROM course_selection WHERE student_number='$id' AND course_class_upperlower=1 AND course_class_year=2024");
						$row = mysql_fetch_assoc($result);
						$sum = $row['value_sum'];


						if ($sum == 3 && $student_form == 3) {

							echo "<p style='font-size: 18px ; font-weight: 550 ; color:green'>已完成</p>";
						} elseif ($sum == 3 && $student_form == 2) {

							echo "<p style='font-size: 18px ; font-weight: 550 ; color:green'>已完成</p>";
						} else {

							echo "<p style='font-size: 18px ; font-weight: 550 ; color:red'>未完成</p>";
						}

						?>



					</div>
				</div>
			</div>


			</div><!--/.row-->


			<?php
			include('connect.php');

			$id = $_SESSION['username'];
			$result = mysql_query("SELECT * FROM student_detail WHERE student_number='$id'");
			$row = mysql_fetch_assoc($result);
			$student_form = $row['student_form'];

			if ($student_form == 4) {
				echo "无查询与选课权限";
			} else {
			?>



				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading" style="height: auto">所有课程一览 <br>
								<!--<span style="color: red">通知：</span>-->
							</div>
							<div class="panel-body">


								<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
									<thead>
										<tr>

											<th>课程名称</th>
											<th>课程类型</th>
											<th>指导老师</th>
											<th>上学年 / 下学年</th>
											<th>星期一 / 星期三</th>
											<th>人数上限</th>
											<th>人数状态</th>
											<th>查看课程</th>
											<th>选修课程</th>

										</tr>
									</thead>
									<tbody>
										<?php
										include('connect.php');
										$result = mysql_query("SELECT admin_pick_season FROM admin_detail");
										$row = mysql_fetch_assoc($result);
										$admin_pick_season = $row['admin_pick_season'];
										$admin_pick_year = $row['admin_pick_year'];

										$id = $_SESSION['username'];
										$result = mysql_query("SELECT * FROM student_detail WHERE student_number='$id'");
										$row = mysql_fetch_assoc($result);
										$student_form = $row['student_form'];


										$id = $_SESSION['username'];
										$result = mysql_query("
							SELECT SUM(course_class_day) AS value_sum FROM course_selection WHERE student_number='$id' AND course_class_upperlower=1 AND course_class_year=2024");
										$row = mysql_fetch_assoc($result);
										$sum = $row['value_sum'];

										$result = mysql_query("
							
							SELECT count(b.course_id) AS abc, a.course_title, a.course_teacher, a.course_class_upperlower, a.course_class_day, a.course_id, a.course_form, a.course_id, a.course_type, a.course_half_one, a.course_student_limit, a.course_showhide, a.course_class_year
							FROM course_detail a 
							LEFT JOIN course_selection b
							ON a.course_id = b.course_id
							WHERE a.course_showhide = 1 AND a.course_class_year = 2024
							GROUP BY a.course_id
							ORDER BY a.course_id
							
							
							
							");
										while ($row = mysql_fetch_array($result)) {
											echo '<tr>';

											echo '<td>' . $row["course_title"] . '</td>';
											echo '<td>' . $row["course_type"] . '</td>';
											echo '<td>' . $row["course_teacher"] . '</td>';

											if ($row["course_class_upperlower"] == 1) {

												echo "<td>上学年</td>";
											} elseif ($row["course_class_upperlower"] == 2) {

												echo "<td>下学年</td>";
											} else {

												echo "<td>全年</td>";
											}

											if ($row["course_class_day"] == 1) {

												echo "<td>星期三</td>";
											} elseif ($row["course_class_day"] == 2) {

												echo "<td>星期一</td>";
											} else {

												echo "<td>全年</td>";
											}

											echo '<td>' . $row["course_student_limit"] . '</td>';

											if ($row["abc"] >= $row["course_student_limit"]) {

												echo '<td><span style="color:red">已满</span></td>';
											} else {

												echo '<td><span style="color:green">未满</span></td>';
											}




											echo '<td><a class="btn btn-primary" title="查看课程" href="student_view_course.php?id=' . $row['course_id'] . '&upperlower=' . $row['course_class_upperlower'] . '">查看课程</a></td>';


											if ($sum == 3 && $student_form == 3) {
												echo "<td>完成选修</td>";
											} elseif ($sum == 3 && $student_form == 2) {
												echo "<td>完成选修</td>";
											} elseif ($sum == $row["course_class_day"] && $student_form == 2) {
												echo '<td>当日选课已完成</td>';
											} elseif ($sum == $row["course_class_day"] && $student_form == 3) {
												echo '<td>当日选课已完成</td>';
											} elseif ($row["course_class_upperlower"] == $admin_pick_season && $admin_pick_season == 1) {
												echo '<td>上学年课程，不能选修</td>';
											} elseif ($row["course_class_upperlower"] == $admin_pick_season && $admin_pick_season == 2) {
												echo '<td>下学年课程，不能选修</td>';
											} elseif ($row["course_form"] == $student_form && $student_form == 2) {
												echo '<td><span style="color:red">年段限制：高二不能选修</span></td>';
											} elseif ($row["course_form"] == $student_form && $student_form == 3) {
												echo '<td><span style="color:red">年段限制：高三不能选修</span></td>';
											} elseif ($row["course_half_one"] == 2 && $admin_pick_season == 1) {
												echo '<td><span style="color:blue">全年课程：不能选修</span></td>';
											} else {

												echo '<td><a class="btn btn-primary" title="进行选修" href="student_select_course.php?id=' . $row['course_id'] . '&upperlower=' . $row['course_class_upperlower'] . '">进行选修</a></td>';
											}


											echo '</tr>';
										}
										?>
									</tbody>
								</table>



							</div>
						</div>
					</div>
				</div>


			<?php } ?>


		</div><!--/.main-->

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/chart.min.js"></script>
		<script src="js/chart-data.js"></script>
		<script src="js/easypiechart.js"></script>
		<script src="js/easypiechart-data.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/bootstrap-table.js"></script>
		<script>
			! function($) {
				$(document).on("click", "ul.nav li.parent > a > span.icon", function() {
					$(this).find('em:first').toggleClass("glyphicon-minus");
				});
				$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
			}(window.jQuery);

			$(window).on('resize', function() {
				if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
			})
			$(window).on('resize', function() {
				if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
			})
		</script>
</body>

</html>