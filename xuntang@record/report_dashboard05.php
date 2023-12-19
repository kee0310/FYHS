<?php
require('connect.php');
include("auth.php");
include("auth_admin.php");
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>行政主任巡堂记录表</title>

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
		jQuery(document).ready(function ($) {
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
	<script src="ckeditor/ckeditor.js"></script>
</head>

<body>
	<?php

	include('connect.php');

	$id = $_SESSION['username'];
	$result = mysql_query("SELECT * FROM xuser WHERE user_email='$id'");
	$row = mysql_fetch_assoc($result);
	$user_role = $row['user_role'];

	if ($user_role == 'admin') {
		$header_admin = file_get_contents('header_admin.php');
		echo $header_admin;
	} else {
		$header = file_get_contents('header_report.php');
		echo $header;
	}

	?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">


		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">
					<?php
					include('connect.php');

					$id = $_SESSION['username'];
					$result = mysql_query("SELECT * FROM xuser WHERE user_email='$id'");
					$row = mysql_fetch_assoc($result);
					$user_name = $row['user_name'];

					echo $id;
					echo "：";
					echo $user_name;
					?>
				</li>
			</ol>
		</div><!--/.row-->



		<div class="row">
			<div class="col-lg-12">
				<div style="height: 20px"></div>
			</div>

			<div class="col-md-3">
				<div class="panel panel-info">
					<div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; height:auto">
						巡堂次数：<br>

						<?php
						include('connect.php');

						$start = $_GET['b'];
						$end = $_GET['c'];

						echo $start;
						echo ' 至 ';
						echo $end;


						?>
					</div>
					<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 14pt;line-height: 1.4;">

						<table data-toggle="table" data-select-item-name="toolbar1">
							<thead>
								<tr>
									<th>序号</th>
									<th>姓名</th>
									<th>次数</th>



								</tr>
							</thead>
							<tbody>
								<?php

								include('connect.php');

								$week = $_GET['a'];
								$result = mysql_query("



							SELECT 
							count(case when b.record_week = '$week' then 0 else NULL end) AS weeknumber, 
							a.user_id, a.user_name
							
							FROM xuser a 
							LEFT JOIN xrecord b 
							ON a.user_name = b.record_name

							GROUP BY a.user_name
							ORDER BY a.user_id ASC




							");
								while ($row = mysql_fetch_array($result)) {
									echo '<tr>';
									echo '<td>' . $row["user_id"] . '</td>';
									echo '<td>' . $row["user_name"] . '</td>';

									echo '<td>' . $row["weeknumber"] . '</td>';



									echo '</tr>';
								}

								?>
							</tbody>
						</table>



					</div>
				</div>
			</div>



			<div class="col-md-9">
				<div class="panel panel-info">
					<div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; height:auto">
						巡堂记录
					</div>
					<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 14pt;line-height: 1.4;">

						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true"
							data-search="true" data-select-item-name="toolbar1">
							<thead>
								<tr>
									<th>姓名<br>日期时间</th>
									<th>内容</th>


								</tr>
							</thead>
							<tbody>
								<?php
								include('connect.php');

								$week = $_GET['a'];

								$result = mysql_query("

							SELECT 
							a.user_id, a.user_name,b.record_date,b.record_time,b.record_class,b.record_teacher,b.record_other,b.record_solution
							
							FROM xuser a 
							LEFT JOIN xrecord b ON a.user_name = b.record_name
							WHERE b.record_week = '$week'

							ORDER BY a.user_id ASC
							");
								while ($row = mysql_fetch_array($result)) {


									echo '<tr>';

									echo '<td>' . $row["user_name"] . '<br>' . $row["record_date"] . '<br>' . $row["record_time"] . '</td>';
									echo '<td>状况：' . $row["record_class"] . '<br>上课老师状况：' . $row["record_teacher"] . '<br>其他：
								' . $row["record_other"] . '<br>现场处理方法：' . $row["record_solution"] . '</td>';


									echo '</tr>';
								}

								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

		</div><!--/.row-->





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
		!function ($) {
			$(document).on("click", "ul.nav li.parent > a > span.icon", function () {
				$(this).find('em:first').toggleClass("glyphicon-minus");
			});
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
			if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
			if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
</body>

</html>