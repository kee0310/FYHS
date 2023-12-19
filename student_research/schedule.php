<?php
require('connect.php');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">

	<title>综合实践活动课程 | 答辩时间表</title>

</head>

<body>
	<?php
	$header = file_get_contents('header.php');
	echo $header;
	?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><i class="fa fa-home"></i></a></li>
				<li><a href="">答辩时间表</a></li>
			</ol>
		</div><!--/.row-->


		<div class="panel panel-default">
			<div class="panel-heading">
				答辩时间表
			</div>
			<div class="panel-body">

				<!--
						<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSpOn95ntgygCw7Owk6CHCpXU6tZeUoaX81l2gOVrLKXES0GY5vzDCmGmF4oCUFy8Bkw4OP9_olHKma/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false" style="width: 100%; height: 900px;"></iframe>
						-->

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