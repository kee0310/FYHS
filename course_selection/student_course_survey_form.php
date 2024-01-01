<?php
require('connect.php');
include("exe/auth.php");

include("auth_survey_block.php");
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

		textarea {
			resize: none;
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
			<div style="height: 20px"></div>
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">2023年度下学年高二高三学分选修课满意度调查表</div>
					<div class="panel-body">

						<h4>填写说明</h4>
						<ul>
							<li>请详读题目，并点选自身认同的满意度选项。</li>
							<li>校方只将对问卷结果做综合分析，绝不针对个别问卷内容做讨论，敬请放心填写。</li>
							<li>请留意第1题至第11题为必答题，第12题至第14题为选答题。</li>
							<li>问卷调查的分析结果，将是校方调整选修课方向的依据参考。</li>
						</ul>

					</div>
					<div class="panel-body">
						<?php
						include('connect.php');
						$id = $_SESSION['username'];
						$result = mysql_query("SELECT count(*) as total from course_survey where student_id='$id'");
						$data = mysql_fetch_assoc($result);

						$totalsurvey = $data['total'];

						if ($totalsurvey == 1) {

							$id = $_SESSION['username'];
							$result = mysql_query("SELECT * FROM course_survey where student_id='$id'");
							while ($row = mysql_fetch_array($result)) {
						?>
								<form role="form">
									<div class="col-md-6">
										<ol>
											<li>选修课的网上选课方式与选课流程是否足够简易明了？</li>
											<div class="form-group has-success">
												<input class="form-control" value="
<?php
								if ($row["course_survey_q1"] == 1) {
									echo "非常不认同";
								} else if ($row["course_survey_q1"] == 2) {
									echo "不认同";
								} else if ($row["course_survey_q1"] == 3) {
									echo "普通";
								} else if ($row["course_survey_q1"] == 4) {
									echo "认同";
								} else {
									echo "非常认同";
								}
?>" readonly>
											</div>


											<li>选修课所提供的各项课程选择是否够多元化?</li>
											<div class="form-group has-success">
												<input class="form-control" value="
<?php
								if ($row["course_survey_q2"] == 1) {
									echo "非常不认同";
								} else if ($row["course_survey_q2"] == 2) {
									echo "不认同";
								} else if ($row["course_survey_q2"] == 3) {
									echo "普通";
								} else if ($row["course_survey_q2"] == 4) {
									echo "认同";
								} else {
									echo "非常认同";
								}
?>" readonly>
											</div>
											<li>选修课是否有让你接触并学习到平日课程外的知识？</li>
											<div class="form-group has-success">
												<input class="form-control" value="
<?php
								if ($row["course_survey_q3"] == 1) {
									echo "非常不认同";
								} else if ($row["course_survey_q3"] == 2) {
									echo "不认同";
								} else if ($row["course_survey_q3"] == 3) {
									echo "普通";
								} else if ($row["course_survey_q3"] == 4) {
									echo "认同";
								} else {
									echo "非常认同";
								}
?>" readonly>
											</div>
											<li>选修课是否有助于提升你个人的主动学习意愿？</li>
											<div class="form-group has-success">
												<input class="form-control" value="
<?php
								if ($row["course_survey_q4"] == 1) {
									echo "非常不认同";
								} else if ($row["course_survey_q4"] == 2) {
									echo "不认同";
								} else if ($row["course_survey_q4"] == 3) {
									echo "普通";
								} else if ($row["course_survey_q4"] == 4) {
									echo "认同";
								} else {
									echo "非常认同";
								}
?>" readonly>
											</div>
											<li>你是否认同校方在高二高三年段进行选修课的课程安排？</li>
											<div class="form-group has-success">
												<input class="form-control" value="
<?php
								if ($row["course_survey_q5"] == 1) {
									echo "非常不认同";
								} else if ($row["course_survey_q5"] == 2) {
									echo "不认同";
								} else if ($row["course_survey_q5"] == 3) {
									echo "普通";
								} else if ($row["course_survey_q5"] == 4) {
									echo "认同";
								} else {
									echo "非常认同";
								}
?>" readonly>
											</div>
											<li><span style="color: red">星期三</span>课程的实际课程内容是否符合网上选课时所叙述的课程纲要？</li>
											<div class="form-group has-success">
												<input class="form-control" value="
<?php
								if ($row["course_survey_q6"] == 1) {
									echo "非常不认同";
								} else if ($row["course_survey_q6"] == 2) {
									echo "不认同";
								} else if ($row["course_survey_q6"] == 3) {
									echo "普通";
								} else if ($row["course_survey_q6"] == 4) {
									echo "认同";
								} else {
									echo "非常认同";
								}
?>" readonly>
											</div>
											<li><span style="color: red">星期三</span>课程的授课内容是否有助于你对相关课题或知识的了解？</li>
											<div class="form-group has-success">
												<input class="form-control" value="
<?php
								if ($row["course_survey_q7"] == 1) {
									echo "非常不认同";
								} else if ($row["course_survey_q7"] == 2) {
									echo "不认同";
								} else if ($row["course_survey_q7"] == 3) {
									echo "普通";
								} else if ($row["course_survey_q7"] == 4) {
									echo "认同";
								} else {
									echo "非常认同";
								}
?>" readonly>
											</div>
											<li><span style="color: red">星期三</span>课程的老师充分掌握课程内容，有效把握课堂时间教授知识？</li>
											<div class="form-group has-success">
												<input class="form-control" value="
<?php
								if ($row["course_survey_q8"] == 1) {
									echo "非常不认同";
								} else if ($row["course_survey_q8"] == 2) {
									echo "不认同";
								} else if ($row["course_survey_q8"] == 3) {
									echo "普通";
								} else if ($row["course_survey_q8"] == 4) {
									echo "认同";
								} else {
									echo "非常认同";
								}
?>" readonly>
											</div>
											<li><span style="color: blue">星期五</span>课程的实际课程内容是否符合网上选课时所叙述的课程纲要？</li>
											<div class="form-group has-success">
												<input class="form-control" value="
<?php
								if ($row["course_survey_q9"] == 1) {
									echo "非常不认同";
								} else if ($row["course_survey_q9"] == 2) {
									echo "不认同";
								} else if ($row["course_survey_q9"] == 3) {
									echo "普通";
								} else if ($row["course_survey_q9"] == 4) {
									echo "认同";
								} else {
									echo "非常认同";
								}
?>" readonly>
											</div>
											<li><span style="color: blue">星期五</span>课程的授课内容是否有助于你对相关课题或知识的了解？</li>
											<div class="form-group has-success">
												<input class="form-control" value="
<?php
								if ($row["course_survey_q10"] == 1) {
									echo "非常不认同";
								} else if ($row["course_survey_q10"] == 2) {
									echo "不认同";
								} else if ($row["course_survey_q10"] == 3) {
									echo "普通";
								} else if ($row["course_survey_q10"] == 4) {
									echo "认同";
								} else {
									echo "非常认同";
								}
?>" readonly>
											</div>
											<li><span style="color: blue">星期五</span>课程的老师充分掌握课程内容，有效把握课堂时间教授知识？</li>
											<div class="form-group has-success">
												<input class="form-control" value="
<?php
								if ($row["course_survey_q11"] == 1) {
									echo "非常不认同";
								} else if ($row["course_survey_q11"] == 2) {
									echo "不认同";
								} else if ($row["course_survey_q11"] == 3) {
									echo "普通";
								} else if ($row["course_survey_q11"] == 4) {
									echo "认同";
								} else {
									echo "非常认同";
								}
?>" readonly>
											</div>

										</ol>


									</div>
									<div class="col-md-6">
										<ol start="12">
											<li>想对<span style="color: red">星期三</span>课程老师说的话：</li>
											<textarea class="form-control" rows="8" readonly><?php echo $row["course_survey_q12"]; ?></textarea><br><br>
											<li>想对<span style="color: blue">星期五</span>课程老师说的话：</li>
											<textarea class="form-control" rows="8" readonly><?php echo $row["course_survey_q13"]; ?></textarea><br><br>
											<li>其他意见或建议：</li>
											<textarea class="form-control" rows="8" readonly><?php echo $row["course_survey_q14"]; ?></textarea><br><br>
											<li>问卷完成时间：</li>
											<input class="form-control" value="<?php echo $row["course_survey_time"]; ?>" readonly>
									</div>

									</ol>


					</div>
					</form>

				<?php
							}
						} else {
				?>


				<form role="form" action="add/student_course_survey_form_exe.php" method="post">
					<div class="col-md-6">
						<ol>
							<li>选修课的网上选课方式与选课流程是否足够简易明了？</li>
							<select class="form-control" name="q1">
								<option value="5">非常认同</option>
								<option value="4">认同</option>
								<option value="3">普通</option>
								<option value="2">不认同</option>
								<option value="1">非常不认同</option>
							</select><br><br>
							<li>选修课所提供的各项课程选择是否够多元化?</li>
							<select class="form-control" name="q2">
								<option value="5">非常认同</option>
								<option value="4">认同</option>
								<option value="3">普通</option>
								<option value="2">不认同</option>
								<option value="1">非常不认同</option>
							</select><br><br>
							<li>选修课是否有让你接触并学习到平日课程外的知识？</li>
							<select class="form-control" name="q3">
								<option value="5">非常认同</option>
								<option value="4">认同</option>
								<option value="3">普通</option>
								<option value="2">不认同</option>
								<option value="1">非常不认同</option>
							</select><br><br>
							<li>选修课是否有助于提升你个人的主动学习意愿？</li>
							<select class="form-control" name="q4">
								<option value="5">非常认同</option>
								<option value="4">认同</option>
								<option value="3">普通</option>
								<option value="2">不认同</option>
								<option value="1">非常不认同</option>
							</select><br><br>
							<li>你是否认同校方在高二高三年段进行选修课的课程安排？</li>
							<select class="form-control" name="q5">
								<option value="5">非常认同</option>
								<option value="4">认同</option>
								<option value="3">普通</option>
								<option value="2">不认同</option>
								<option value="1">非常不认同</option>
							</select><br><br>
							<li><span style="color: red">星期三</span>课程的实际课程内容是否符合网上选课时所叙述的课程纲要？</li>
							<select class="form-control" name="q6">
								<option value="5">非常认同</option>
								<option value="4">认同</option>
								<option value="3">普通</option>
								<option value="2">不认同</option>
								<option value="1">非常不认同</option>
							</select><br><br>
							<li><span style="color: red">星期三</span>课程的授课内容是否有助于你对相关课题或知识的了解？</li>
							<select class="form-control" name="q7">
								<option value="5">非常认同</option>
								<option value="4">认同</option>
								<option value="3">普通</option>
								<option value="2">不认同</option>
								<option value="1">非常不认同</option>
							</select><br><br>
							<li><span style="color: red">星期三</span>课程的老师充分掌握课程内容，有效把握课堂时间教授知识？</li>
							<select class="form-control" name="q8">
								<option value="5">非常认同</option>
								<option value="4">认同</option>
								<option value="3">普通</option>
								<option value="2">不认同</option>
								<option value="1">非常不认同</option>
							</select><br><br>
							<li><span style="color: blue">星期五</span>课程的实际课程内容是否符合网上选课时所叙述的课程纲要？</li>
							<select class="form-control" name="q9">
								<option value="5">非常认同</option>
								<option value="4">认同</option>
								<option value="3">普通</option>
								<option value="2">不认同</option>
								<option value="1">非常不认同</option>
							</select><br><br>
							<li><span style="color: blue">星期五</span>课程的授课内容是否有助于你对相关课题或知识的了解？</li>
							<select class="form-control" name="q10">
								<option value="5">非常认同</option>
								<option value="4">认同</option>
								<option value="3">普通</option>
								<option value="2">不认同</option>
								<option value="1">非常不认同</option>
							</select><br><br>
							<li><span style="color: blue">星期五</span>课程的老师充分掌握课程内容，有效把握课堂时间教授知识？</li>
							<select class="form-control" name="q11">
								<option value="5">非常认同</option>
								<option value="4">认同</option>
								<option value="3">普通</option>
								<option value="2">不认同</option>
								<option value="1">非常不认同</option>
							</select><br><br>

						</ol>


					</div>
					<div class="col-md-6">
						<ol start="12">
							<li>想对<span style="color: red">星期三</span>课程老师说的话：</li>
							<textarea class="form-control" rows="8" name="q12" pattern="[A-Za-z0-9]{1,20}"></textarea><br><br>
							<li>想对<span style="color: blue">星期五</span>课程老师说的话：</li>
							<textarea class="form-control" rows="8" name="q13" pattern="[A-Za-z0-9]{1,20}"></textarea><br><br>
							<li>其他意见或建议：</li>
							<textarea class="form-control" rows="8" name="q14" pattern="[A-Za-z0-9]{1,20}"></textarea><br><br>

						</ol>
						<input type="hidden" name="student_id" value="<?php echo $_SESSION['username']; ?>" readonly>
						<input type="hidden" name="course_survey_upperlower" value="2" readonly>
						<input type="hidden" name="course_survey_section" value="2023" readonly>
						<div align="center"><button type="submit" class="btn btn-primary" title="提交问卷">提交问卷</button></div>
					</div>
				</form>
			<?php
						}
			?>
				</div>
			</div>
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