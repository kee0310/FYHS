<?php
require('connect.php');
include("auth_admin2.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>预订系统</title>

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

		table,
		tr th div {
			text-align: center;
		}

		table td {
			text-align: center;
			overflow: hidden;
			white-space: nowrap;
			max-width: 100px;
			text-overflow: ellipsis;
		}

		table br {
			display: none;
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
					<div class="panel-heading" style="width: 100%">联课团体</div>
					<div class="panel-body">

						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true"
							data-search="true" data-select-item-name="toolbar1" style="font-size:12px">
							<thead>
								<tr>
									<th style="width: 10%">类别</th>
									<th style="width: 15%">团徽</th>
									<th style="width: 15%">团徽简介</th>
									<th style="width: 10%">中文名字</th>
									<th style="width: 10%">英文名字</th>
									<th style="width: 15%">人数</th>
									<th style="width: 10%">简介</th>
									<th style="width: 10%">历史</th>
									<th style="width: 10%">查看</th>
									<th style="width: 10%">编辑</th>
									<th style="width: 10%">删除</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include('connect.php');
								$result = mysqli_query($conn, "SELECT *	FROM wcocurricular");
								while ($row = mysqli_fetch_array($result)) {
									?>

									<tr>
										<td>
											<?php echo $row['co_categories'] ?>
										</td>
										<td>
											<?php echo $row['co_logo'] ?>
										</td>
										<td>
											<?php echo $row['co_logodesp'] ?>
										</td>
										<td>
											<?php echo $row['co_chname'] ?>
										</td>
										<td>
											<?php echo $row['co_engname'] ?>
										</td>
										<td>
											<?php echo $row['co_pplamount'] ?>
										</td>
										<td>
											<?php echo $row['co_description'] ?>
										</td>
										<td>
											<?php echo $row['co_history'] ?>
										</td>
										<td>
											<div type="button" class="btn btn-primary"
												onclick="window.open('../co-curricular2@a38b.php?id=<?php echo $row['co_id'] ?>', '_self')">
												View
											</div>
										</td>
										<td>
											<a class="btn btn-primary" title="Edit"
												href="wcocurricular_edit.php?id=<?php echo $row['co_id'] ?>">Edit</a>
										</td>
										<td>
											<a class="btn btn-primary" title="Delete" href="">Delete</a>
										</td>
									</tr>

									<?php
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