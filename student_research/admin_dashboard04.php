<?php
require('exe/connect.php');
include("exe/auth_admin.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>学生课外实践活动</title>

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

<body>
	<?php
	$header = file_get_contents('header_admin.php');
	echo $header;
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
			<div class="col-lg-12">
				<div style="height: 20px"></div>
			</div>
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">各项实践计划申请表</div>
					<div class="panel-body">


						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
							<thead>
								<tr>
									<th>序号</th>
									<th>Group Code</th>
									<th>项目名称</th>
									<th>学习方向</th>
									<th>指导老师</th>
									<th>审核</th>
									<th>填写日期</th>
									<th>允许删除</th>
									<th>评语</th>

								</tr>
							</thead>
							<tbody>
								<?php
								include('exe/connect.php');
								$result = mysql_query("
							
							SELECT a.apply_id,a.group_code,a.apply_topic,a.apply_d,a.apply_teacher,a.apply_approved,a.apply_date,a.apply_comment,
							a.apply_allow_edit,
							
								RANK () OVER ( 
								PARTITION BY a.apply_approved
								ORDER BY a.apply_id ASC,a.apply_id ASC
								) group_rank
							
							FROM zgroup_detail a
							


							");
								while ($row = mysql_fetch_array($result)) {


									echo '<tr>';
									echo '<td>' . $row["group_rank"] . '</td>';
									echo '<td>' . $row["group_code"] . '</td>';
									echo '<td><a href="admin_view_topic.php?id=' . $row["apply_id"] . '" target="_blank">' . $row["apply_topic"] . '</a></td>';
									if ($row["apply_d"] == 1) {
										echo '<td><span style="color:red">以研究为主</span></td>';
									} elseif ($row["apply_d"] == 2) {
										echo '<td><span style="color:blue">以社会实践或社区服务为主</span></td>';
									} elseif ($row["apply_d"] == 3) {
										echo '<td><span style="color:green">以项目设计或技术实践为主</span></td>';
									} else {
										echo '<td>Error</td>';
									}

									echo '<td>' . $row["apply_teacher"] . '</td>';

									if ($row["apply_approved"] == 1) {
										echo '<td><a href="changetoapproved02.php?id=' . $row["apply_id"] . '"><span style="color:green">批准</span></a></td>';
									} elseif ($row["apply_approved"] == 0) {
										echo '<td><a href="changetoapproved03.php?id=' . $row["apply_id"] . '"><span style="color:red">不批准</span></a></td>';
									} elseif ($row["apply_approved"] == 2) {
										echo '<td><a href="changetoapproved01.php?id=' . $row["apply_id"] . '"><span style="color:blue">未审查</span></a></td>';
									} else {
										echo '<td>Error</td>';
									}

									echo '<td>' . $row["apply_date"] . '</td>';

									if ($row["apply_allow_edit"] == 1) {
										echo '<td><a href="changetoedit01.php?id=' . $row["apply_id"] . '"><span style="color:green">能够</span></a></td>';
									} elseif ($row["apply_allow_edit"] == 0) {
										echo '<td><a href="changetoedit02.php?id=' . $row["apply_id"] . '"><span style="color:red">不能够</span></a></td>';
									} else {
										echo '<td>Error</td>';
									}

									echo '<td><form action="changecomment01.php" method="post" name="login">';
									echo '<input class="form-control" type="hidden" name="id" value="' . $row["apply_id"] . '" />';
									echo '<textarea class="form-control" rows="4" cols="80" name="apply_comment" />' . $row["apply_comment"] . '</textarea>';
									echo '<button type="submit">保存</button></form></td>';

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