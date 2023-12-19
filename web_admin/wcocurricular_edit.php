<?php
require('connect.php');
include("auth_admin2.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>预订系统</title>

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
	<script src="ckeditor/ckeditor.js"></script>
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
			<?php
			include('connect.php');
			$id = $_GET['id'];
			$result = mysqli_query($conn, "SELECT * FROM wcocurricular where co_id='$id'");
			while ($row = mysqli_fetch_array($result)) {
				?>

				<div class="panel panel-default" style="margin: 20px 15px">
					<div class="panel-heading">修改资料 (联课团体)</div>

					<div class="panel-body">
						<form role="form" action="wcocurricular_edit_exe.php" method="post">
							<div class="col-md-6">
								<input type="hidden" name="co_id" value="<?php echo $row['co_id']; ?>">

								<div class="form-group">
									<label>类别</label>
									<input class="form-control" value="<?php echo $row['co_categories']; ?>" name="co_categories">
								</div>

								<div class="form-group">
									<label>团徽</label>
									<input class="form-control" value="<?php echo $row['co_logo']; ?>" name="co_logo">
								</div>

								<div class="form-group">
									<label>团徽简介</label>
									<textarea class="form-control" name="co_logodesp" rows="10"
										cols="50"><?php echo $row['co_logodesp']; ?></textarea>
									<script>CKEDITOR.replace('co_logodesp', {
											autoParagraph: false,
											enterMode: CKEDITOR.ENTER_BR,
											uiColor: '#30a5ff',
										});</script>
								</div>

								<div class="form-group">
									<label>中文名称</label>
									<input class="form-control" value="<?php echo $row['co_chname']; ?>" name="co_chname">
								</div>

								<div class="form-group">
									<label>英文名称</label>
									<input class="form-control" value="<?php echo $row['co_engname']; ?>" name="co_engname">
								</div>

								<div class="form-group">
									<label>人数</label>
									<input class="form-control" type="number" value="<?php echo $row['co_pplamount']; ?>"
										name="co_pplamount">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label>简介</label>
									<textarea class="form-control" name="co_description" rows="10"
										cols="50"><?php echo $row['co_description']; ?></textarea>
									<script>CKEDITOR.replace('co_description', {
											autoParagraph: false,
											enterMode: CKEDITOR.ENTER_BR,
											uiColor: '#30a5ff'
										});
									</script>
								</div>

								<div class="form-group">
									<label>历史</label>
									<textarea class="form-control" name="co_history" rows="10"
										cols="50"><?php echo $row['co_history']; ?></textarea>
									<script>CKEDITOR.replace('co_history', {
											autoParagraph: false,
											enterMode: CKEDITOR.ENTER_BR,
											uiColor: '#30a5ff'
										});</script>
								</div><br>

								<div align="right">
									<button type="submit" class="btn btn-primary">Edit</button>
								</div>
							</div>
						</form>
					</div>
				</div>

				<?php
			}
			?>
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
	<script type="text/javascript" src="/js/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="/js/ckeditor/adapters/jquery.js"></script>
	<script type="text/javascript">
		$(function () {
			$('#your_textarea').ckeditor({
				toolbar: 'Full',
				enterMode: CKEDITOR.ENTER_BR,
				shiftEnterMode: CKEDITOR.ENTER_P
			});
		});

		$('<p>').unwrap();
	</script>
</body>

</html>