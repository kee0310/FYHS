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

			<!--<div class="col-lg-12">
					<form action = "<?php $_PHP_SELF ?>" method = "GET">
					<label for="birthday">开始日期:</label>
					<input type="date" name="a">
					<label for="birthday">结束日期:</label>
					<input type="date" name="b">
					<input type="submit">
					</form>
					</div>-->

			<div class="col-lg-12">
				<div style="height: 20px"></div>
			</div>



			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; height:auto">
						Week Numbers 2023
					</div>
					<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 14pt;line-height: 1.4;">

						<table data-toggle="table" data-select-item-name="toolbar1">
							<thead>
								<tr>
									<th>Week #</th>
									<th>From Date</th>
									<th>To Date</th>


								</tr>
							</thead>
							<tbody>
								<tr>
									<td><a href="report_dashboard05.php?a=1&b=January-2-2023&c=January-8-2023" target="_blank">Week 1</a>
									</td>
									<td>January-2-2023</td>
									<td>January-8-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=2&b=January-9-2023&c=January-15-2023" target="_blank">Week 2</a>
									</td>
									<td>January-9-2023</td>
									<td>January-15-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=3&b=January-16-2023&c=January-22-2023" target="_blank">Week
											3</a></td>
									<td>January-16-2023</td>
									<td>January-22-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=4&b=January-23-2023&c=January-29-2023" target="_blank">Week
											4</a></td>
									<td>January-23-2023</td>
									<td>January-29-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=5&b=January-30-2023&c=February-5-2023" target="_blank">Week
											5</a></td>
									<td>January-30-2023</td>
									<td>February-5-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=6&b=February-6-2023&c=February-12-2023" target="_blank">Week
											6</a></td>
									<td>February-6-2023</td>
									<td>February-12-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=7&b=February-13-2023&c=February-19-2023" target="_blank">Week
											7</a></td>
									<td>February-13-2023</td>
									<td>February-19-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=8&b=February-20-2023&c=February-26-2023" target="_blank">Week
											8</a></td>
									<td>February-20-2023</td>
									<td>February-26-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=9&b=February-27-2023&c=March-5-2023" target="_blank">Week 9</a>
									</td>
									<td>February-27-2023</td>
									<td>March-5-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=10&b=March-6-2023&c=March-12-2023" target="_blank">Week 10</a>
									</td>
									<td>March-6-2023</td>
									<td>March-12-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=11&b=March-13-2023&c=March-19-2023" target="_blank">Week 11</a>
									</td>
									<td>March-13-2023</td>
									<td>March-19-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=12&b=March-20-2023&c=March-26-2023" target="_blank">Week 12</a>
									</td>
									<td>March-20-2023</td>
									<td>March-26-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=13&b=March-27-2023&c=April-2-2023" target="_blank">Week 13</a>
									</td>
									<td>March-27-2023</td>
									<td>April-2-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=14&b=April-3-2023&c=April-9-2023" target="_blank">Week 14</a>
									</td>
									<td>April-3-2023</td>
									<td>April-9-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=15&b=April-10-2023&c=April-16-2023" target="_blank">Week 15</a>
									</td>
									<td>April-10-2023</td>
									<td>April-16-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=16&b=April-17-2023&c=April-23-2023" target="_blank">Week 16</a>
									</td>
									<td>April-17-2023</td>
									<td>April-23-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=17&b=April-24-2023&c=April-30-2023" target="_blank">Week 17</a>
									</td>
									<td>April-24-2023</td>
									<td>April-30-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=18&b=May-1-2023&c=May-7-2023" target="_blank">Week 18</a></td>
									<td>May-1-2023</td>
									<td>May-7-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=19&b=May-8-2023&c=May-14-2023" target="_blank">Week 19</a></td>
									<td>May-8-2023</td>
									<td>May-14-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=20&b=May-15-2023&c=May-21-2023" target="_blank">Week 20</a></td>
									<td>May-15-2023</td>
									<td>May-21-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=21&b=May-22-2023&c=May-28-2023" target="_blank">Week 21</a></td>
									<td>May-22-2023</td>
									<td>May-28-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=22&b=May-29-2023&c=June-4-2023" target="_blank">Week 22</a></td>
									<td>May-29-2023</td>
									<td>June-4-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=23&b=June-5-2023&c=June-11-2023" target="_blank">Week 23</a>
									</td>
									<td>June-5-2023</td>
									<td>June-11-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=24&b=June-12-2023&c=June-18-2023" target="_blank">Week 24</a>
									</td>
									<td>June-12-2023</td>
									<td>June-18-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=25&b=June-19-2023&c=June-25-2023" target="_blank">Week 25</a>
									</td>
									<td>June-19-2023</td>
									<td>June-25-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=26&b=June-26-2023&c=July-2-2023" target="_blank">Week 26</a>
									</td>
									<td>June-26-2023</td>
									<td>July-2-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=27&b=July-3-2023&c=July-9-2023" target="_blank">Week 27</a></td>
									<td>July-3-2023</td>
									<td>July-9-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=28&b=July-10-2023&c=July-16-2023" target="_blank">Week 28</a>
									</td>
									<td>July-10-2023</td>
									<td>July-16-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=29&b=July-17-2023&c=July-23-2023" target="_blank">Week 29</a>
									</td>
									<td>July-17-2023</td>
									<td>July-23-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=30&b=July-24-2023&c=July-30-2023" target="_blank">Week 30</a>
									</td>
									<td>July-24-2023</td>
									<td>July-30-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=31&b=July-31-2023&c=August-6-2023" target="_blank">Week 31</a>
									</td>
									<td>July-31-2023</td>
									<td>August-6-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=32&b=August-7-2023&c=August-13-2023" target="_blank">Week 32</a>
									</td>
									<td>August-7-2023</td>
									<td>August-13-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=33&b=August-14-2023&c=August-20-2023" target="_blank">Week
											33</a></td>
									<td>August-14-2023</td>
									<td>August-20-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=34&b=August-21-2023&c=August-27-2023" target="_blank">Week
											34</a></td>
									<td>August-21-2023</td>
									<td>August-27-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=35&b=August-28-2023&c=September-3-2023" target="_blank">Week
											35</a></td>
									<td>August-28-2023</td>
									<td>September-3-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=36&b=September-4-2023&c=September-10-2023" target="_blank">Week
											36</a></td>
									<td>September-4-2023</td>
									<td>September-10-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=37&b=September-11-2023&c=September-17-2023" target="_blank">Week
											37</a></td>
									<td>September-11-2023</td>
									<td>September-17-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=38&b=September-18-2023&c=September-24-2023" target="_blank">Week
											38</a></td>
									<td>September-18-2023</td>
									<td>September-24-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=39&b=September-25-2023&c=October-1-2023" target="_blank">Week
											39</a></td>
									<td>September-25-2023</td>
									<td>October-1-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=40&b=October-2-2023&c=October-8-2023" target="_blank">Week
											40</a></td>
									<td>October-2-2023</td>
									<td>October-8-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=41&b=October-9-2023&c=October-15-2023" target="_blank">Week
											41</a></td>
									<td>October-9-2023</td>
									<td>October-15-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=42&b=October-16-2023&c=October-22-2023" target="_blank">Week
											42</a></td>
									<td>October-16-2023</td>
									<td>October-22-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=43&b=October-23-2023&c=October-29-2023" target="_blank">Week
											43</a></td>
									<td>October-23-2023</td>
									<td>October-29-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=44&b=October-30-2023&c=November-5-2023" target="_blank">Week
											44</a></td>
									<td>October-30-2023</td>
									<td>November-5-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=45&b=November-6-2023&c=November-12-2023" target="_blank">Week
											45</a></td>
									<td>November-6-2023</td>
									<td>November-12-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=46&b=November-13-2023&c=November-19-2023" target="_blank">Week
											46</a></td>
									<td>November-13-2023</td>
									<td>November-19-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=47&b=November-20-2023&c=November-26-2023" target="_blank">Week
											47</a></td>
									<td>November-20-2023</td>
									<td>November-26-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=48&b=November-27-2023&c=December-3-2023" target="_blank">Week
											48</a></td>
									<td>November-27-2023</td>
									<td>December-3-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=49&b=December-4-2023&c=December-10-2023" target="_blank">Week
											49</a></td>
									<td>December-4-2023</td>
									<td>December-10-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=50&b=December-11-2023&c=December-17-2023" target="_blank">Week
											50</a></td>
									<td>December-11-2023</td>
									<td>December-17-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=51&b=December-18-2023&c=December-24-2023" target="_blank">Week
											51</a></td>
									<td>December-18-2023</td>
									<td>December-24-2023</td>
								</tr>
								<tr>
									<td><a href="report_dashboard05.php?a=52&b=December-25-2023&c=December-31-2023" target="_blank">Week
											52</a></td>
									<td>December-25-2023</td>
									<td>December-31-2023</td>
								</tr>



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