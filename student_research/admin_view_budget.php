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


			<!--/.budget-->
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; height:auto">
						实践活动预算案
					</div>


					<?php
					include('exe/connect.php');

					$id = $_GET['id'];
					$result = mysql_query("

			SELECT *
			FROM zgroup_budget
			where budget_id='$id'

			
			");
					while ($row = mysql_fetch_array($result)) {



					?>

						<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; border-bottom: 1px solid #000;">
							备注、回馈：<?php echo $row['budget_comment']; ?>
						</div>
						<div class="panel-body" style="height: auto">

							<table data-toggle="table" data-select-item-name="toolbar1" style="font-family: 楷体, KaiTi; font-size: 12pt;line-height: 1.4;">
								<thead>
									<tr>
										<th>序号</th>
										<th>项目</th>
										<th>数额（RM）</th>
										<th>审批</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td><?php echo $row['budget_101']; ?></td>
										<td><?php echo $row['budget_102']; ?>.00</td>

										<?php
										if ($row["budget_103"] == 1) {
											echo '<td><a href="budgetchangetoapproved/1032.php?id=' . $row["budget_id"] . '"><span style="color:green">批准</span></a></td>';
										} elseif ($row["budget_103"] == 0) {
											echo '<td><a href="budgetchangetoapproved/1033.php?id=' . $row["budget_id"] . '"><span style="color:red">不批准</span></a></td>';
										} elseif ($row["budget_103"] == 2) {
											echo '<td><a href="budgetchangetoapproved/1031.php?id=' . $row["budget_id"] . '"><span style="color:blue">未审查</span></a></td>';
										} else {
											echo '<td>Error</td>';
										}
										?>

									</tr>

									<tr>
										<td>2</td>
										<td><?php echo $row['budget_201']; ?></td>
										<td><?php echo $row['budget_202']; ?>.00</td>
										<?php
										if ($row["budget_203"] == 1) {
											echo '<td><a href="budgetchangetoapproved/2032.php?id=' . $row["budget_id"] . '"><span style="color:green">批准</span></a></td>';
										} elseif ($row["budget_203"] == 0) {
											echo '<td><a href="budgetchangetoapproved/2033.php?id=' . $row["budget_id"] . '"><span style="color:red">不批准</span></a></td>';
										} elseif ($row["budget_203"] == 2) {
											echo '<td><a href="budgetchangetoapproved/2031.php?id=' . $row["budget_id"] . '"><span style="color:blue">未审查</span></a></td>';
										} else {
											echo '<td>Error</td>';
										}
										?>
									</tr>

									<tr>
										<td>3</td>
										<td><?php echo $row['budget_301']; ?></td>
										<td><?php echo $row['budget_302']; ?>.00</td>
										<?php
										if ($row["budget_303"] == 1) {
											echo '<td><a href="budgetchangetoapproved/3032.php?id=' . $row["budget_id"] . '"><span style="color:green">批准</span></a></td>';
										} elseif ($row["budget_303"] == 0) {
											echo '<td><a href="budgetchangetoapproved/3033.php?id=' . $row["budget_id"] . '"><span style="color:red">不批准</span></a></td>';
										} elseif ($row["budget_303"] == 2) {
											echo '<td><a href="budgetchangetoapproved/3031.php?id=' . $row["budget_id"] . '"><span style="color:blue">未审查</span></a></td>';
										} else {
											echo '<td>Error</td>';
										}
										?>
									</tr>

									<tr>
										<td>4</td>
										<td><?php echo $row['budget_401']; ?></td>
										<td><?php echo $row['budget_402']; ?>.00</td>
										<?php
										if ($row["budget_403"] == 1) {
											echo '<td><a href="budgetchangetoapproved/4032.php?id=' . $row["budget_id"] . '"><span style="color:green">批准</span></a></td>';
										} elseif ($row["budget_403"] == 0) {
											echo '<td><a href="budgetchangetoapproved/4033.php?id=' . $row["budget_id"] . '"><span style="color:red">不批准</span></a></td>';
										} elseif ($row["budget_403"] == 2) {
											echo '<td><a href="budgetchangetoapproved/4031.php?id=' . $row["budget_id"] . '"><span style="color:blue">未审查</span></a></td>';
										} else {
											echo '<td>Error</td>';
										}
										?>
									</tr>

									<tr>
										<td>5</td>
										<td><?php echo $row['budget_501']; ?></td>
										<td><?php echo $row['budget_502']; ?>.00</td>
										<?php
										if ($row["budget_503"] == 1) {
											echo '<td><a href="budgetchangetoapproved/5032.php?id=' . $row["budget_id"] . '"><span style="color:green">批准</span></a></td>';
										} elseif ($row["budget_503"] == 0) {
											echo '<td><a href="budgetchangetoapproved/5033.php?id=' . $row["budget_id"] . '"><span style="color:red">不批准</span></a></td>';
										} elseif ($row["budget_503"] == 2) {
											echo '<td><a href="budgetchangetoapproved/5031.php?id=' . $row["budget_id"] . '"><span style="color:blue">未审查</span></a></td>';
										} else {
											echo '<td>Error</td>';
										}
										?>
									</tr>

									<tr>
										<td>6</td>
										<td><?php echo $row['budget_601']; ?></td>
										<td><?php echo $row['budget_602']; ?>.00</td>
										<?php
										if ($row["budget_603"] == 1) {
											echo '<td><a href="budgetchangetoapproved/6032.php?id=' . $row["budget_id"] . '"><span style="color:green">批准</span></a></td>';
										} elseif ($row["budget_603"] == 0) {
											echo '<td><a href="budgetchangetoapproved/6033.php?id=' . $row["budget_id"] . '"><span style="color:red">不批准</span></a></td>';
										} elseif ($row["budget_603"] == 2) {
											echo '<td><a href="budgetchangetoapproved/6031.php?id=' . $row["budget_id"] . '"><span style="color:blue">未审查</span></a></td>';
										} else {
											echo '<td>Error</td>';
										}
										?>
									</tr>

									<tr>
										<td>7</td>
										<td><?php echo $row['budget_701']; ?></td>
										<td><?php echo $row['budget_702']; ?>.00</td>
										<?php
										if ($row["budget_703"] == 1) {
											echo '<td><a href="budgetchangetoapproved/7032.php?id=' . $row["budget_id"] . '"><span style="color:green">批准</span></a></td>';
										} elseif ($row["budget_703"] == 0) {
											echo '<td><a href="budgetchangetoapproved/7033.php?id=' . $row["budget_id"] . '"><span style="color:red">不批准</span></a></td>';
										} elseif ($row["budget_703"] == 2) {
											echo '<td><a href="budgetchangetoapproved/7031.php?id=' . $row["budget_id"] . '"><span style="color:blue">未审查</span></a></td>';
										} else {
											echo '<td>Error</td>';
										}
										?>
									</tr>

									<tr>
										<td>8</td>
										<td><?php echo $row['budget_801']; ?></td>
										<td><?php echo $row['budget_802']; ?>.00</td>
										<?php
										if ($row["budget_803"] == 1) {
											echo '<td><a href="budgetchangetoapproved/8032.php?id=' . $row["budget_id"] . '"><span style="color:green">批准</span></a></td>';
										} elseif ($row["budget_803"] == 0) {
											echo '<td><a href="budgetchangetoapproved/8033.php?id=' . $row["budget_id"] . '"><span style="color:red">不批准</span></a></td>';
										} elseif ($row["budget_803"] == 2) {
											echo '<td><a href="budgetchangetoapproved/8031.php?id=' . $row["budget_id"] . '"><span style="color:blue">未审查</span></a></td>';
										} else {
											echo '<td>Error</td>';
										}
										?>
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td>
											<?php

											$totalbudget = $row['budget_102'] + $row['budget_202'] + $row['budget_302'] +
												$row['budget_402'] + $row['budget_502'] + $row['budget_602'] + $row['budget_702'] +
												$row['budget_802'];

											echo $totalbudget;

											?>.00
										</td>
										<td></td>
									</tr>
								</tbody>
							</table>
							<br>
							<div class="f">

								此计划书及预算案已获得小组成员全员认可并同意呈交。
								<?php
								if ($row['budget_policy01'] == 1) {
									echo "<span style='color:green'>同意</span>";
								} elseif ($row['budget_policy01'] == 0) {
									echo "<span style='color:red'>不同意</span>";
								} else {
									echo "Error";
								}
								?>
								<br>
								此计划书及预算案已获得指导老师审批并赞同呈交。
								<?php
								if ($row['budget_policy02'] == 1) {
									echo "<span style='color:green'>同意</span>";
								} elseif ($row['budget_policy02'] == 0) {
									echo "<span style='color:red'>不同意</span>";
								} else {
									echo "Error";
								}
								?>

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