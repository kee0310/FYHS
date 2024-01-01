<?php
require('connect.php');
include("exe/auth.php");
include("auth_survey_form.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>选修课系统</title>

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

	$result = mysql_query("SELECT admin_survey_onoff from admin_detail");
	$data = mysql_fetch_assoc($result);

	$surveyonoff = $data['admin_survey_onoff'];

	if ($surveyonoff == 1) {

		$header_survey_on = file_get_contents('header_student_survey_on.php');
		echo $header_survey_on;
	} elseif ($surveyonoff == 0) {

		$header = file_get_contents('header_student.php');
		echo $header;
	}
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



		</div>

		<?php


		include('connect.php');


		$id = $_GET['id'];
		$result = mysql_query("SELECT * FROM course_detail where course_id='$id'");
		while ($row = mysql_fetch_array($result)) {

		?>


			<div class="col-md-12">
				<div class="panel panel-success">
					<div class="panel-heading">
						课程资料
					</div>
					<div class="panel-body">
						<table border="1" cellspacing="1" cellpadding="10px" style="width: 100%; font-weight: 550; font-size: 18px; line-height: 35px; ">
							<tbody>



								<tr>
									<td style="width: 25%" align="center">开课老师</td>
									<td style="width: 75%; padding-left: 15px;" align="left"><?php echo $row['course_teacher']; ?></td>
								</tr>
								<tr>
									<td style="width: 25%" align="center">于本校所曾执教学科/年段</td>
									<td style="width: 75%; padding-left: 15px;" align="left">
										<?php echo $row['course_teacher_exp11']; ?> <?php echo $row['course_teacher_exp12']; ?><br>
										<?php echo $row['course_teacher_exp21']; ?> <?php echo $row['course_teacher_exp22']; ?><br>
										<?php echo $row['course_teacher_exp31']; ?> <?php echo $row['course_teacher_exp32']; ?>
									</td>
								</tr>
								<tr>
									<td style="width: 25%" align="center">课程中文名</td>
									<td style="width: 75%; padding-left: 15px;" align="left"><?php echo $row['course_title']; ?></td>
								</tr>

								<tr>
									<td align="center">课程英文名</td>
									<td align="left" style="padding-left: 15px;"><?php echo $row['course_english_title']; ?></td>
								</tr>

								<tr>
									<td align="center">课程类型</td>
									<td align="left" style="padding-left: 15px;"><?php echo $row['course_type']; ?></td>
								</tr>

								<tr>
									<td align="center">上半年 / 下半年</td>
									<td align="left" style="padding-left: 15px;">

										<?php

										if ($row["course_class_upperlower"] == 1) {

											echo "上半年";
										} elseif ($row["course_class_upperlower"] == 2) {

											echo "下半年";
										} else {

											echo "全年";
										}

										?>
									</td>
								</tr>
								<tr>
									<td align="center">星期一 / 星期三</td>
									<td align="left" style="padding-left: 15px;">

										<?php

										if ($row["course_class_day"] == 1) {

											echo "星期三";
										} elseif ($row["course_class_day"] == 2) {

											echo "星期一";
										} else {

											echo "全年";
										}

										?>
									</td>
								</tr>
								<tr>
									<td align="center">所需设备/场地<br>(如投影机﹑实验室)</td>
									<td align="left" style="padding-left: 15px;"><?php echo $row['course_place']; ?></td>
								</tr>

								<tr>
									<td align="center">学生选修<br>必备条件</td>
									<td align="left" style="padding-left: 15px;">
										<?php echo $row['course_require']; ?>
									</td>
								</tr>

								<tr>
									<td align="center">课程简介</td>
									<td align="left" style="padding-left: 15px;"><?php echo $row['course_intro']; ?></td>
								</tr>

								<tr>
									<td align="center">课程内容(节数)</td>
									<td align="left" style="padding: 15px;">

										<table style="width: 100%; border: 1px solid black;">
											<tbody>
												<tr>
													<td style="width: 80%; border-bottom: 1px solid black;" align="center">课程内容</td>
													<td style="width: 20%; border-bottom: 1px solid black;" align="center">节数</td>
												</tr>
												<tr>
													<td style="width: 80%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content11']; ?></td>
													<td style="width: 20%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content12']; ?></td>
												</tr>
												<tr>
													<td style="width: 80%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content21']; ?></td>
													<td style="width: 20; border-bottom: 1px solid black;%" align="center"><?php echo $row['course_content22']; ?></td>
												</tr>
												<tr>
													<td style="width: 80%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content31']; ?></td>
													<td style="width: 20%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content32']; ?></td>
												</tr>
												<tr>
													<td style="width: 80%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content41']; ?></td>
													<td style="width: 20; border-bottom: 1px solid black;%" align="center"><?php echo $row['course_content42']; ?></td>
												</tr>
												<tr>
													<td style="width: 80%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content51']; ?></td>
													<td style="width: 20%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content52']; ?></td>
												</tr>
												<tr>
													<td style="width: 80%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content61']; ?></td>
													<td style="width: 20; border-bottom: 1px solid black;%" align="center"><?php echo $row['course_content62']; ?></td>
												</tr>
												<tr>
													<td style="width: 80%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content71']; ?></td>
													<td style="width: 20%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content72']; ?></td>
												</tr>
												<tr>
													<td style="width: 80%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content81']; ?></td>
													<td style="width: 20; border-bottom: 1px solid black;%" align="center"><?php echo $row['course_content82']; ?></td>
												</tr>
												<tr>
													<td style="width: 80%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content91']; ?></td>
													<td style="width: 20%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content92']; ?></td>
												</tr>
												<tr>
													<td style="width: 80%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content101']; ?></td>
													<td style="width: 20; border-bottom: 1px solid black;%" align="center"><?php echo $row['course_content102']; ?></td>
												</tr>
												<tr>
													<td style="width: 80%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content111']; ?></td>
													<td style="width: 20%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content112']; ?></td>
												</tr>
												<tr>
													<td style="width: 80%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content121']; ?></td>
													<td style="width: 20; border-bottom: 1px solid black;%" align="center"><?php echo $row['course_content122']; ?></td>
												</tr>
												<tr>
													<td style="width: 80%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content131']; ?></td>
													<td style="width: 20%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content132']; ?></td>
												</tr>
												<tr>
													<td style="width: 80%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content141']; ?></td>
													<td style="width: 20; border-bottom: 1px solid black;%" align="center"><?php echo $row['course_content142']; ?></td>
												</tr>
												<tr>
													<td style="width: 80%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content151']; ?></td>
													<td style="width: 20%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content152']; ?></td>
												</tr>
												<tr>
													<td style="width: 80%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content161']; ?></td>
													<td style="width: 20; border-bottom: 1px solid black;%" align="center"><?php echo $row['course_content162']; ?></td>
												</tr>
												<tr>
													<td style="width: 80%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content171']; ?></td>
													<td style="width: 20%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content172']; ?></td>
												</tr>
												<tr>
													<td style="width: 80%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content181']; ?></td>
													<td style="width: 20; border-bottom: 1px solid black;%" align="center"><?php echo $row['course_content182']; ?></td>
												</tr>
												<tr>
													<td style="width: 80%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content191']; ?></td>
													<td style="width: 20%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content192']; ?></td>
												</tr>
												<tr>
													<td style="width: 80%; border-bottom: 1px solid black;" align="center"><?php echo $row['course_content201']; ?></td>
													<td style="width: 20; border-bottom: 1px solid black;%" align="center"><?php echo $row['course_content202']; ?></td>
												</tr>
											</tbody>
										</table>



									</td>
								</tr>

								<tr>
									<td align="center">所用教材或参考书目</td>
									<td align="left" style="padding-left: 15px;"><?php echo $row['course_material']; ?></td>
								</tr>

								<tr>
									<td align="center">评分标准&nbsp;</td>
									<td align="left" style="padding-left: 15px;">
										<table>
											<tbody>
												<tr>
													<td><?php echo $row['course_mark11']; ?></td>
													<td style="padding-left: 15px;"><?php echo $row['course_mark1']; ?></td>
												</tr>
												<tr>
													<td><?php echo $row['course_mark21']; ?></td>
													<td style="padding-left: 15px;"><?php echo $row['course_mark2']; ?></td>
												</tr>
												<tr>
													<td><?php echo $row['course_mark31']; ?></td>
													<td style="padding-left: 15px;"><?php echo $row['course_mark3']; ?></td>
												</tr>
												<tr>
													<td><?php echo $row['course_mark41']; ?></td>
													<td style="padding-left: 15px;"><?php echo $row['course_mark4']; ?></td>
												</tr>
												<tr>
													<td><?php echo $row['course_mark51']; ?></td>
													<td style="padding-left: 15px;"><?php echo $row['course_mark5']; ?></td>
												</tr>
												<tr>
													<td><?php echo $row['course_mark61']; ?></td>
													<td style="padding-left: 15px;"><?php echo $row['course_mark6']; ?></td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>

							</tbody>
						</table>
					<?php

				}

					?>


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