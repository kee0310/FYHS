﻿<?php
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
				<li class="active">
					<?php
					include('exe/connect.php');

					$id = $_SESSION['username'];
					$result = mysql_query("SELECT * FROM zadmin_detail WHERE admin_number='$id'");
					$row = mysql_fetch_assoc($result);
					$department = $row['admin_department'];

					echo $id;
					echo "：";
					echo $department;
					?>
				</li>
			</ol>
		</div><!--/.row-->



		<div class="row">
			<div class="col-lg-12">
				<div style="height: 20px"></div>
			</div>
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">各项实践计划计划书：教务处 10%、联课处 10% = 20%</div>
					<div class="panel-body">


						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
							<thead>
								<tr>
									<th>序号</th>
									<th>Group Code</th>
									<th>项目名称</th>
									<th>指导老师</th>
									<th>计划书</th>
									<th>预算案</th>
									<th>总数额</th>
									<th>提交时间</th>
									<th>允许删除</th>
									<th>教务处</th>
									<th>联课处</th>
									<th>加减分</th>
									<th>总分</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include('exe/connect.php');

								$id = $_SESSION['username'];
								$result = mysql_query("SELECT * FROM zadmin_detail WHERE admin_number='$id'");
								$row = mysql_fetch_assoc($result);
								$department = $row['admin_department'];

								$result = mysql_query("
							
							SELECT a.group_code,a.apply_topic,a.apply_teacher,b.pdf_id,b.pdf_file,b.pdf_type,b.pdf_size,b.pdf_date,
							b.pdf_allow_edit,d.budget_id,b.pdf_mark01,pdf_mark02,pdf_mark03,
							d.budget_102,d.budget_202,d.budget_302,d.budget_402,d.budget_502,d.budget_602,d.budget_702,
							d.budget_802,
							
								RANK () OVER ( 
								ORDER BY a.group_code ASC
								) group_rank
							
							FROM zgroup_detail a
							LEFT JOIN zgroup_pdf b ON a.group_code = b.group_code
							LEFT JOIN zstudent_detail c ON a.group_code = c.student_number
							LEFT JOIN zgroup_budget d ON a.group_code = d.group_code


							");
								while ($row = mysql_fetch_array($result)) {


									echo '<tr>';
									echo '<td>' . $row["group_rank"] . '</td>';
									echo '<td>' . $row["group_code"] . '</td>';
									echo '<td>' . $row["apply_topic"] . '</td>';
									echo '<td>' . $row["apply_teacher"] . '</td>';
									echo '<td><a href="pdf/' . $row["pdf_file"] . '" target="_blank" >' . $row["pdf_file"] . '</a></td>';
									echo '<td><a href="admin_view_budget.php?id=' . $row["budget_id"] . '" target="_blank">' . $row["apply_topic"] . '</a></td>';

									$budgettotal = $row["budget_102"] + $row["budget_202"] + $row["budget_302"] + $row["budget_402"] + $row["budget_502"] + $row["budget_602"] + $row["budget_702"] + $row["budget_802"];

									echo '<td>RM' . $budgettotal . '.00</td>';

									echo '<td>' . $row["pdf_date"] . '</td>';


									if ($row["pdf_allow_edit"] == 1) {
										echo '<td><a href="changetoeditpdf01.php?id=' . $row["pdf_id"] . '"><span style="color:green">能够</span></a></td>';
									} elseif ($row["pdf_allow_edit"] == 0) {
										echo '<td><a href="changetoeditpdf02.php?id=' . $row["pdf_id"] . '"><span style="color:red">不能够</span></a></td>';
									} else {
										echo '<td>Error</td>';
									}


									if ($department == 'academic') {
										echo '<td>
								<form role="form" action="updatemark/update_pdf_mark01_exe.php" method="post">
								<input type="hidden" name="pdf_markname" value="' . $id . '">
								<input type="hidden" name="pdf_id" value="' . $row["pdf_id"] . '">
								<input type="hidden" name="group_code" value="' . $row["group_code"] . '">
								<input id="name" name="pdf_mark01" type="text" maxlength="4" size="4" value="' . $row["pdf_mark01"] . '">
								<button type="submit">save</button>
								</form>
								</td>';
									} else {
										echo '<td>' . $row["pdf_mark01"] . '</td>';
									}

									if ($department == 'co_curricular') {
										echo '<td>
								<form role="form" action="updatemark/update_pdf_mark02_exe.php" method="post">
								<input type="hidden" name="pdf_markname" value="' . $id . '">
								<input type="hidden" name="pdf_id" value="' . $row["pdf_id"] . '">
								<input type="hidden" name="group_code" value="' . $row["group_code"] . '">
								<input id="name" name="pdf_mark02" type="text" maxlength="4" size="4" value="' . $row["pdf_mark02"] . '">
								<button type="submit">save</button>
								</form>
								</td>';
									} else {
										echo '<td>' . $row["pdf_mark02"] . '</td>';
									}

									if ($department == 'admin') {
										echo '<td>
								<form role="form" action="updatemark/update_pdf_mark03_exe.php" method="post">
								<input type="hidden" name="pdf_markname" value="' . $id . '">
								<input type="hidden" name="pdf_id" value="' . $row["pdf_id"] . '">
								<input type="hidden" name="group_code" value="' . $row["group_code"] . '">
								<input id="name" name="pdf_mark03" type="text" maxlength="4" size="4" value="' . $row["pdf_mark03"] . '">
								<button type="submit">save</button>
								</form>
								</td>';
									} else {
										echo '<td>' . $row["pdf_mark03"] . '</td>';
									}

									$marktotal = $row["pdf_mark01"] + $row["pdf_mark02"] + $row["pdf_mark03"];

									echo '<td>' . $marktotal . '</td>';

									echo '</tr>';
								}

								?>
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