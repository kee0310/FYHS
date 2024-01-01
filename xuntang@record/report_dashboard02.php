<?php
require('connect.php');
include("auth.php");
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
	<script src="ckeditor/ckeditor.js"></script>
</head>

<body>
	<?php

	include('connect.php');

	$id = $_SESSION['username'];
	$result = mysqli_query($link, "SELECT * FROM xuser WHERE user_email='$id'");
	$row = mysqli_fetch_assoc($result);
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
					$result = mysqli_query($link, "SELECT * FROM xuser WHERE user_email='$id'");
					$row = mysqli_fetch_assoc($result);
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

			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; height:auto">
						巡堂记录表
					</div>
					<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">
						<table data-toggle="table" data-search="true" data-select-item-name="toolbar1" style="font-family: 楷体, KaiTi; font-size: 12pt;line-height: 1.4;">
							<thead>
								<tr>
									<th>填写日期</th>
									<th>备注</th>
									<th>填写者</th>
									<th>状况（卫生，整洁，秩序等）</th>
									<th>上课老师状况</th>
									<th>其他</th>
									<th>现场处理方法</th>
									<th>图片1</th>
									<th>图片2</th>
								</tr>
							</thead>
							<tbody>


								<?php
								include('connect.php');

								$id = $_SESSION['username'];
								$result = mysqli_query($link, "SELECT * FROM xuser WHERE user_email='$id'");
								$row = mysqli_fetch_assoc($result);
								$user_name = $row['user_name'];
								$user_role = $row['user_role'];


								$result = mysqli_query(
									$link,
									"SELECT *
									FROM xrecord
									ORDER BY record_date DESC,record_time DESC"
								);

								while ($row = mysqli_fetch_array($result)) {

								?>

									<tr>
										<td>
											<?php echo $row['record_date']; ?><br>
											<?php echo $row['record_time']; ?><br>
											<?php echo $row['record_day']; ?>
										</td>
										<td>
											<?php echo $row['record_remark']; ?>
										</td>
										<td>
											<?php echo $row['record_name']; ?>
										</td>
										<td>
											<?php echo $row['record_class']; ?>
										</td>
										<td>
											<?php echo $row['record_teacher']; ?>
										</td>
										<td>
											<?php echo $row['record_other']; ?>
										</td>
										<td>
											<?php echo $row['record_solution']; ?>
										</td>
										<td><a href="http://www1.fyk.edu.my/xuntang@record/imgrecord/<?php echo $row['record_img01']; ?>" target="_blank" title="<?php echo $row['record_img01']; ?>">
												<img src="imgrecord/<?php echo $row['record_img01']; ?>" style="width: 120px; height: auto"></a><br><br>

											<?php
											if ($row['record_name'] == $user_name) {
											?>
												<form action="imgupload01.php" method="post" enctype="multipart/form-data">
													<div class="form-group">
														<input type="hidden" name="record_id" value="<?php echo $row['record_id']; ?>">
														<input type="hidden" name="record_name" value="<?php echo $row['record_name']; ?>">
														<input type="file" name="file" accept="image/*" style="width: 120px" multiple>
														<button type="submit" name="btn-upload">Upload</button>
													</div>
												</form>

											<?php } else {
												echo "";
											}
											?>

										</td>
										<td><a href="http://www1.fyk.edu.my/xuntang@record/imgrecord/<?php echo $row['record_img02']; ?>" target="_blank" title="<?php echo $row['record_img02']; ?>">
												<img src="imgrecord/<?php echo $row['record_img02']; ?>" style="width: 120px; height: auto"></a><br><br>

											<?php
											if ($row['record_name'] == $user_name) {
											?>
												<form action="imgupload02.php" method="post" enctype="multipart/form-data">
													<div class="form-group">
														<input type="hidden" name="record_id" value="<?php echo $row['record_id']; ?>">
														<input type="hidden" name="record_name" value="<?php echo $row['record_name']; ?>">
														<input type="file" name="file" accept="image/*" / style="width: 120px">
														<button type="submit" name="btn-upload">Upload</button>
													</div>
												</form>
											<?php } else {
												echo "";
											}
											?>

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