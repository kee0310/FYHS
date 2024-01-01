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
					<div class="panel-heading">各项实践报告：评审1 60%、评审2 60%、评审3 60% = （60+60+60）/3</div>
					<div class="panel-body">



						<?php
						include('exe/connect.php');

						$id = $_GET['id'];
						$result = mysql_query("
							
							SELECT *
							
							FROM zgroup_pdf02
							WHERE group_code='$id'



							");
						while ($row = mysql_fetch_array($result)) {

						?>
							<form role="form" action="updatemark/updatereportpresentmark_exe.php" method="post">
								<input type="hidden" name="pdf_id" value="<?php echo $row["pdf_id"]; ?>">

								<input type="hidden" name="code" value="<?php echo $row["group_code"]; ?>">

								Group Code：<?php echo $row["group_code"]; ?><br><br>
								答辩01：<input id="name" name="pdf_present01" type="text" maxlength="4" size="4" value="<?php echo $row["pdf_present01"]; ?>"><br><br>
								答辩02：<input id="name" name="pdf_present02" type="text" maxlength="4" size="4" value="<?php echo $row["pdf_present02"]; ?>"><br><br>
								答辩03：<input id="name" name="pdf_present03" type="text" maxlength="4" size="4" value="<?php echo $row["pdf_present03"]; ?>"><br><br>
								报告01：<input id="name" name="pdf_report01" type="text" maxlength="4" size="4" value="<?php echo $row["pdf_report01"]; ?>"><br><br>
								报告02：<input id="name" name="pdf_report02" type="text" maxlength="4" size="4" value="<?php echo $row["pdf_report02"]; ?>"><br><br>
								报告03：<input id="name" name="pdf_report03" type="text" maxlength="4" size="4" value="<?php echo $row["pdf_report03"]; ?>"><br><br>

								<button type="submit">save</button>
							</form>


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