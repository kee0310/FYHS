<?php
require('connect.php');
include("auth.php");
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


			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; height:auto">
						更换密码
					</div>
					<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 14pt;line-height: 1.4;">

						<form role="form" action="changepassword_exe.php" method="post">
							<div class="col-md-12">
								<input type="hidden" name="record_name" value="<?php echo $user_name; ?>">
								密码：<input type="text" name="password">
								新密码：<input type="text" name="newpassword">
								<button type="submit" class="btn btn-primary" title="更换密码">更换密码</button>
							</div>
						</form>




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