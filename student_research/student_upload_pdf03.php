<?php
session_start();
require('exe/connect.php');
$md = $_REQUEST['id'];


include("exe/auth.php");
include("exe/auth_student_leader.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>综合实践活动课程</title>

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
	<script src="ckeditor/ckeditor.js"></script>
</head>

<body oncontextmenu="return false;">

	<?php

	$result = mysql_query("SELECT admin_survey_onoff from zadmin_detail");
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
					<div class="panel-heading" align="center">综合实践活动课程-上载最终活动报告（修改后）</div>

					<div class="panel-body">

						<?php

						date_default_timezone_set("Asia/Kuala_Lumpur");
						$date = date('YmdHis', time());

						$start_time_view 	= 20230301000000;
						$end_time_view 		= 20231025235900;

						$id = $_SESSION['username'];
						$result = mysql_query("SELECT count(*) as total,pdf_allow_edit from zgroup_pdf03 where group_code='$id'");
						$data = mysql_fetch_assoc($result);

						$totalapply = $data['total'];
						$pdf_allow_edit = $data['pdf_allow_edit'];


						if ($start_time_view > $date) {
							echo "还未开放上载：-";
						} elseif ($end_time_view < $date) {
							echo "上载已经截止：-";
						} elseif ($totalapply >= 1) {

							if ($pdf_allow_edit == 1) {
								echo "已完成上载报告书。如需修改报告书，请将现有的报告书删除。";
								echo '<a href="student_upload_pdf_delete_exe03.php?id=' . $id . '" title="删除计划书">删除计划书</a>';
							} else {
								echo "已完成上载报告书。如需修改报告书，请将现有的报告书删除。";
								echo '<span style="color: red">无法删除计划书</span>';
							}
						} else {


						?>

							<div class="container" style="margin-top:30px">
								<div class="row">


									<form action="upload03.php" method="post" enctype="multipart/form-data">
										<div class="form-group">
											<input type="file" name="file" accept=".pdf" />
											<p class="help-block">请将最终的活动报告（修改后）存成 PDF 档案。<span style="color:red">档案命名</span>：组长学号+finalreport；例：162001finalreport<br><br>
												提交日期：2023年8月1日（星期二） 至 2023年9月23日（星期六）
											</p>
											<button type="submit" name="btn-upload">upload</button>
										</div>
									</form>

								</div>

							<?php

						}
							?>

							</div>



					</div>
				</div>
			</div>


			<!--

			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading" align="center">综合实践活动课程-填写最终项目名称</div>

					<div class="panel-body">
<div style="height: 50px"></div>
			<form role="form" action="updatemark/student_topic_rename_exe.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
				
<?php
include('exe/connect.php');

$id = $_SESSION['username'];
$result = mysql_query("

			SELECT *
			FROM zgroup_detail a
			where a.group_code='$id'
			
			");
while ($row = mysql_fetch_array($result)) {

?>				

					<input type="hidden" name="student_number" value="<?php $id = $_SESSION['username'];
																														echo $id; ?>">
					
					目前项目名称：
					<?php echo $row['apply_topic'];
					echo "&nbsp;&nbsp;";
					echo $row['apply_topiceg'];
					?>
					<br><br>
					最终项目名称：
					<?php echo $row['apply_topicnew'];
					echo "&nbsp;&nbsp;";
					echo $row['apply_topicegnew'];
					?>					
					
					<br><br>
					中文：<input type="text" name="apply_topic" value="" size="100"><br><br>
					英文：<input type="text" name="apply_topiceg" value="" size="100">
					
<?php
}
?>			
					<br><br>
					<p class="help-block" style="font-size:12pt">
					请各组组长针对项目名称进行修正，请留意<br>
					（1）名称将打印在成绩册，使用字眼请务必正确 / 准确。<br>
					（2）英文名称需与中文名称相符。<br>
					（3）如无法自行翻译英文名称，请向英文老师寻求协助。
					</p>

					<button type="submit" name="btn-upload">保存</button>
				</div>
			</form> 
			</div>
			</div>
			</div>
			
-->





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