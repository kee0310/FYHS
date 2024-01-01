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

		.f {
			font-family: 楷体, KaiTi;
			font-size: 16pt;
			line-height: 1.6;
		}
	</style>
	<script src="ckeditor/ckeditor.js"></script>
</head>

<body oncontextmenu="return false;">

	<?php

	$header = file_get_contents('header_student.php');
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
			<div style="height: 20px"></div>
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading" align="center">综合实践活动课程-预算案</div>
					<div class="panel-body">

						<?php

						date_default_timezone_set("Asia/Kuala_Lumpur");
						$date = date('YmdHis', time());

						$start_time_view 	= 20230301000000;
						$end_time_view 		= 20230425235900;

						$id = $_SESSION['username'];
						$result = mysql_query("SELECT count(*) as total,budget_allow_edit from zgroup_budget where group_code='$id'");
						$data = mysql_fetch_assoc($result);

						$totalapply = $data['total'];
						$budget_allow_edit = $data['budget_allow_edit'];


						if ($start_time_view > $date) {
							echo "还未开放填写：2023年3月01日（星期三） 至 2023年3月25日（星期六）";
						} elseif ($end_time_view < $date) {
							echo "填写已经截止：2023年3月01日（星期三） 至 2023年3月25日（星期六）";
						} elseif ($totalapply >= 1) {

							if ($budget_allow_edit == 1) {
								echo "已完成填写预算案。如需修改，请将现有的预算案删除。";
								echo '<a href="student_budget_form_delete_exe.php?id=' . $id . '" title="删除预算案">删除预算案</a>';
							} else {
								echo "已完成填写预算案。如需修改，请将现有的预算案删除。";
								echo '<span style="color: red">无法删除申请表</span>';
							}
						} else {


						?>
							<form role="form" action="add/student_budget_form_exe.php" method="post">
								<div class="col-md-12">
									<input type="hidden" name="group_code" value="<?php $id = $_SESSION['username'];
																																echo $id; ?>">
									<input type="hidden" name="budget_allow_edit" value="1">
									<input type="hidden" name="budget_approved" value="2">
									<input type="hidden" name="budget_103" value="2">
									<input type="hidden" name="budget_203" value="2">
									<input type="hidden" name="budget_303" value="2">
									<input type="hidden" name="budget_403" value="2">
									<input type="hidden" name="budget_503" value="2">
									<input type="hidden" name="budget_603" value="2">
									<input type="hidden" name="budget_703" value="2">
									<input type="hidden" name="budget_803" value="2">

								</div>

								<p class="f">
									备注：<br>
									请在填写预算时，以<span style="color: red">整数</span>进行填写。
								</p>

								<br><br>
								<div class="form-group">
									<label class="col-md-1 control-label" for="name">项目1：</label>
									<div class="col-md-8">
										<input id="name" name="budget_101" type="text" placeholder="项目" class="form-control">
									</div>
									<div class="col-md-3">
										<input id="name" name="budget_102" type="number" value="0" oninput="this.value = Math.round(this.value);" placeholder="预算（RM）" class="form-control">
									</div>
								</div>
								<br><br>
								<div class="form-group">
									<label class="col-md-1 control-label" for="name">项目2：</label>
									<div class="col-md-8">
										<input id="name" name="budget_201" type="text" placeholder="项目" class="form-control">
									</div>
									<div class="col-md-3">
										<input id="name" name="budget_202" type="number" value="0" oninput="this.value = Math.round(this.value);" placeholder="预算（RM）" class="form-control">
									</div>
								</div>
								<br><br>
								<div class="form-group">
									<label class="col-md-1 control-label" for="name">项目3：</label>
									<div class="col-md-8">
										<input id="name" name="budget_301" type="text" placeholder="项目" class="form-control">
									</div>
									<div class="col-md-3">
										<input id="name" name="budget_302" type="number" value="0" oninput="this.value = Math.round(this.value);" placeholder="预算（RM）" class="form-control">
									</div>
								</div>
								<br><br>
								<div class="form-group">
									<label class="col-md-1 control-label" for="name">项目4：</label>
									<div class="col-md-8">
										<input id="name" name="budget_401" type="text" placeholder="项目" class="form-control">
									</div>
									<div class="col-md-3">
										<input id="name" name="budget_402" type="number" value="0" oninput="this.value = Math.round(this.value);" placeholder="预算（RM）" class="form-control">
									</div>
								</div>
								<br><br>
								<div class="form-group">
									<label class="col-md-1 control-label" for="name">项目5：</label>
									<div class="col-md-8">
										<input id="name" name="budget_501" type="text" placeholder="项目" class="form-control">
									</div>
									<div class="col-md-3">
										<input id="name" name="budget_502" type="number" value="0" oninput="this.value = Math.round(this.value);" placeholder="预算（RM）" class="form-control">
									</div>
								</div>
								<br><br>
								<div class="form-group">
									<label class="col-md-1 control-label" for="name">项目6：</label>
									<div class="col-md-8">
										<input id="name" name="budget_601" type="text" placeholder="项目" class="form-control">
									</div>
									<div class="col-md-3">
										<input id="name" name="budget_602" type="number" value="0" oninput="this.value = Math.round(this.value);" placeholder="预算（RM）" class="form-control">
									</div>
								</div>
								<br><br>
								<div class="form-group">
									<label class="col-md-1 control-label" for="name">项目7：</label>
									<div class="col-md-8">
										<input id="name" name="budget_701" type="text" placeholder="项目" class="form-control">
									</div>
									<div class="col-md-3">
										<input id="name" name="budget_702" type="number" value="0" oninput="this.value = Math.round(this.value);" placeholder="预算（RM）" class="form-control">
									</div>
								</div>
								<br><br>
								<div class="form-group">
									<label class="col-md-1 control-label" for="name">项目8：</label>
									<div class="col-md-8">
										<input id="name" name="budget_801" type="text" placeholder="项目" class="form-control">
									</div>
									<div class="col-md-3">
										<input id="name" name="budget_802" type="number" value="0" oninput="this.value = Math.round(this.value);" placeholder="预算（RM）" class="form-control">
									</div>
								</div>
								<br><br>

								<div class="col-md-12 f">
									打钩表示完成下列事项：<br>
									<label>
										<input type="checkbox" name="budget_policy01" value="1" required>&nbsp;&nbsp;此计划书及预算案已获得小组成员全员认可并同意呈交。</label><br>
									计划书内容包括<br>
									• 绪论（计划背景与目的）。<br>
									• 执行方法的构思与计划。<br>
									• 涉及的预算案。<br>
									<label>
										<input type="checkbox" name="budget_policy02" value="1" required>&nbsp;&nbsp;此计划书及预算案已获得指导老师审批并赞同呈交。</label>
								</div>
								<div align="center"><button type="submit" class="btn btn-primary" title="提交活动预算案">提交活动预算案</button></div>
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