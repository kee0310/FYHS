<?php
require('exe/connect.php');
include("exe/auth_teacher.php");
session_start();
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
	$header = file_get_contents('header_teacher.php');
	echo $header;
	?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">


		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">
					<?php
					include('exe/connect.php');

					$id = $_SESSION['username'];
					$result = mysql_query("SELECT * FROM zteacher_detail WHERE teacher_number='$id'");
					$row = mysql_fetch_assoc($result);
					$teacher_name = $row['teacher_name'];

					echo $id;
					echo "：";
					echo $teacher_name;
					?>
				</li>
			</ol>
		</div><!--/.row-->



		<div class="row">
			<div class="col-lg-12">
				<div style="height: 20px"></div>
			</div>

			<!--/.budget-->
			<div class="col-lg-12">
				<div class="panel panel-info">
					<div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; height:auto">
						实践活动计划书
					</div>


					<?php
					include('exe/connect.php');

					$id = $_SESSION['username'];
					$result = mysql_query("SELECT * FROM zteacher_detail WHERE teacher_number='$id'");
					$row = mysql_fetch_assoc($result);
					$teacher_name = $row['teacher_name'];


					$id = $_SESSION['username'];
					$result = mysql_query("

			SELECT a.apply_topic,a.group_code,b.pdf_file,b.pdf_date
			FROM zgroup_detail a
			JOIN zgroup_pdf b ON a.group_code = b.group_code
			
			
			where a.apply_teacher='$teacher_name'

			ORDER BY a.group_code ASC
			
			");
					while ($row = mysql_fetch_array($result)) {



					?>

						<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">
							<br>组长：<?php echo $row['group_code']; ?>&nbsp;&nbsp;项目名称：<?php echo $row['apply_topic']; ?>
						</div>
						<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">
							活动计划书：<a href="pdf/<?php echo $row['pdf_file']; ?>" target="_blank" title="<?php echo $row['pdf_file']; ?>"><?php echo $row['pdf_file']; ?></a>
							&nbsp;&nbsp;
							提交日期：<?php echo $row['pdf_date']; ?>
						</div>
						<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;border-bottom: 1px solid #000;">

						</div>

					<?php

					}
					?>

				</div>

			</div>


		</div><!--/.row-->



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