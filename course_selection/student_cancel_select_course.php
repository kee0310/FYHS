<?php
require('connect.php');
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
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">已选课程</div>
					<div class="panel-body">


						<table data-toggle="table" data-select-item-name="toolbar1">
							<thead>
								<tr>

									<th>课程名称</th>
									<th>星期一 / 星期三</th>
									<th>退选课程</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include('connect.php');

								$result = mysql_query("SELECT admin_pick_season FROM admin_detail");
								$row = mysql_fetch_assoc($result);
								$admin_pick_season = $row['admin_pick_season'];

								$id = $_SESSION['username'];
								$result = mysql_query("SELECT * FROM course_selection where student_number='$id' AND course_class_year=2024");
								while ($row = mysql_fetch_array($result)) {
									echo '<tr>';

									echo '<td>' . $row["course_title"] . '</td>';

									if ($row["course_class_day"] == 1) {

										echo "<td>星期三</td>";
									} elseif ($row["course_class_day"] == 2) {

										echo "<td>星期一</td>";
									} else {

										echo "<td>全年</td>";
									}

									if ($row["course_class_upperlower"] == $admin_pick_season && $admin_pick_season == 1) {

										echo "<td>上学年课程，不能进行修改</td>";
									} elseif ($row["course_class_upperlower"] == 2 && $row["course_half_one"] == 2) {

										echo "<td>全年课程，不能进行修改</td>";
									} else {

										echo '<td><a class="btn btn-primary" href="student_cancel_confirm.php?id=' . $row['course_selection_id'] . '">进行退选</a></td>';
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

		<div class="row">
			<div style="height: 20px"></div>
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">已选课程记录</div>
					<div class="panel-body">


						<table data-toggle="table" data-select-item-name="toolbar1">
							<thead>
								<tr>
									<th>年份</th>
									<th>上学年 / 下学年</th>
									<th>星期一 / 星期三</th>
									<th>课程名称</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include('connect.php');


								$id = $_SESSION['username'];
								$result = mysql_query("SELECT * FROM course_selection where student_number='$id'");
								while ($row = mysql_fetch_array($result)) {
									echo '<tr>';

									echo '<td>' . $row["course_class_year"] . '</td>';

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

									echo '<td>' . $row["course_title"] . '</td>';

									echo '</tr>';
								}

								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>





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