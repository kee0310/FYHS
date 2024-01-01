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

			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; height:auto">
						各组实践活动项目
					</div>


					<?php
					include('exe/connect.php');

					$id = $_SESSION['username'];
					$result = mysql_query("SELECT * FROM zteacher_detail WHERE teacher_number='$id'");
					$row = mysql_fetch_assoc($result);
					$teacher_name = $row['teacher_name'];


					$id = $_SESSION['username'];
					$result = mysql_query("

			SELECT *
			FROM zgroup_detail a
			JOIN zstudent_detail b ON a.group_code = b.student_number
			
			
			where a.apply_teacher='$teacher_name'
			
			ORDER BY a.group_code ASC

			");
					while ($row = mysql_fetch_array($result)) {



					?>
						<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">
							项目是否批准：
							<?php
							if ($row['apply_approved'] == 1) {
								echo "<span style='color:green'>批准</span>";
							} elseif ($row['apply_approved'] == 0) {
								echo "<span style='color:red'>不批准</span>";
							} elseif ($row['apply_approved'] == 2) {
								echo "<span style='color:blue'>未审查</span>";
							} else {
								echo "Error";
							}
							?>
						</div>
						<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">
							备注、回馈：<?php echo $row['apply_comment']; ?>
						</div>
						<div class="panel-body" style="height: auto">
							<p style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">

								组长：<?php echo $row['group_code']; ?>&nbsp;&nbsp;<?php echo $row['student_name']; ?>&nbsp;&nbsp;<?php echo $row['student_class']; ?><br>
								项目名称：<?php echo $row['apply_topic']; ?><br>
								学习方向：<?php
											if ($row['apply_d'] == 1) {
												echo "<span style='color:blue'>以研究为主：</span>";
											} elseif ($row['apply_d'] == 2) {
												echo "<span style='color:blue'>以社会实践或社区服务为主：</span>";
											} else {
												echo "<span style='color:blue'>以项目设计或技术实践为主：</span>";
											}
											?>
								<?php
								if ($row['apply_d'] == 1) {
									if ($row['apply_ds101'] == 1) {
										echo "制定方案 |";
									} else {
									}
									if ($row['apply_ds102'] == 1) {
										echo "调查 |";
									} else {
									}
									if ($row['apply_ds103'] == 1) {
										echo "访问 |";
									} else {
									}
									if ($row['apply_ds104'] == 1) {
										echo "观察 |";
									} else {
									}
									if ($row['apply_ds105'] == 1) {
										echo "实验 |";
									} else {
									}
									if ($row['apply_ds106'] == 1) {
										echo "统计 |";
									} else {
									}
									if ($row['apply_ds107'] == 1) {
										echo "信息收集与处理 |";
									} else {
									}
									if ($row['apply_ds108'] == 1) {
										echo "其他 |";
									} else {
									}
								} elseif ($row['apply_d'] == 2) {
									if ($row['apply_ds201'] == 1) {
										echo "参观 |";
									} else {
									}
									if ($row['apply_ds202'] == 1) {
										echo "考察 |";
									} else {
									}
									if ($row['apply_ds203'] == 1) {
										echo "服务 |";
									} else {
									}
									if ($row['apply_ds204'] == 1) {
										echo "宣传 |";
									} else {
									}
									if ($row['apply_ds205'] == 1) {
										echo "义务劳动 |";
									} else {
									}
									if ($row['apply_ds206'] == 1) {
										echo "经济活动 |";
									} else {
									}
									if ($row['apply_ds207'] == 1) {
										echo "其他 |";
									} else {
									}
								} else {
									if ($row['apply_ds301'] == 1) {
										echo "项目立项与研究 |";
									} else {
									}
									if ($row['apply_ds302'] == 1) {
										echo "设计 |";
									} else {
									}
									if ($row['apply_ds303'] == 1) {
										echo "制作 |";
									} else {
									}
									if ($row['apply_ds304'] == 1) {
										echo "研制 |";
									} else {
									}
									if ($row['apply_ds305'] == 1) {
										echo "种植 |";
									} else {
									}
									if ($row['apply_ds306'] == 1) {
										echo "养殖 |";
									} else {
									}
									if ($row['apply_ds307'] == 1) {
										echo "信息发布 |";
									} else {
									}
									if ($row['apply_ds308'] == 1) {
										echo "科技小发明 |";
									} else {
									}
									if ($row['apply_ds309'] == 1) {
										echo "小制作 |";
									} else {
									}
									if ($row['apply_ds310'] == 1) {
										echo "其他 |";
									} else {
									}
								}
								?><br>
								项目简介（简单叙述动机、目的、方法等等）：<br><?php echo $row['apply_desc']; ?>

							</p>
						</div>
						<div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;border-bottom: 1px solid #000;">

						</div>

					<?php

					}
					?>

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