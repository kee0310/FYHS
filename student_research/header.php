<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Header</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/style_v2.css" rel="stylesheet">

	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" media="screen">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="lib/jquery.js" type="text/javascript"></script>
	<script src="src/facebox.js" type="text/javascript"></script>

	<link rel="stylesheet" type="text/css" href="../css/carousel.css" media="screen">
	<script type="text/javascript" src="../js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>

	<!--Icons-->
	<script src="js/lumino.glyphs.js"></script>

	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$('a[rel*=facebox]').facebox({
				loadingImage: 'src/loading.gif',
				closeImage: 'src/closelabel.png'
			})
		})
	</script>

	<style>

	</style>
</head>

<body>

	<div class="navbar">
		<div class="container nav-container">
			<input class="checkbox" type="checkbox" name="" id="menu" />
			<label for="menu" class="hamburger-lines hidden-lg hidden-sm">
				<span class="line line1"></span>
				<span class="line line2"></span>
				<span class="line line3"></span>
			</label>
			<div class="col-lg-8 col-sm-9 col-xs-8">
				<span class="logo">综合实践活动课程</span>
			</div>
			<a title="学生登入" href="student_login.php">
				<span class="mobile-login"><i class="fa fa-user-circle-o hidden-lg hidden-md hidden-sm"></i></span>
			</a>
			<div class="menu-items">
				<div align="center" style="padding: 20px; padding-left: 10px; background: var(--main-color)">
					<a href="../index@a38b.php"><img src="../img/fylogo1.png" style="width: 100%; max-width: 200px;"></a>
				</div>
				<div class="sidemenu" style="padding: 10px 0">
					<a title="活动说明" href="index.php">
						<span><i class="fa fa-home"></i>首页</span>
					</a>
					<a title="活动说明" href="details.php">
						<span><i class="fa fa-commenting-o"></i>活动说明</span>
					</a>
					<a title="答辩时间表" href="schedule.php">
						<span><i class="fa fa-table"></i>答辩时间表</span>
					</a>
					<a title="答辩说明" href="powerpoint.php" style="margin: 0">
						<span><i class="fa fa-comments-o"></i>答辩说明</span>
					</a>
				</div>
			</div>
		</div>
	</div>


	<div class="col-sm-3 col-lg-2 sidebar" style="top: 0;">
		<div align="center" style="padding: 20px; padding-left: 10px; background: var(--main-color)">
			<a href="../index@a38b.php"><img src="../img/fylogo1.png" style="width: 100%; max-width: 200px;"></a>
		</div>
		<div class="sidemenu">
			<a title="活动说明" href="index.php">
				<span><i class="fa fa-home"></i>首页</span>
			</a>
			<a title="活动说明" href="details.php">
				<span><i class="fa fa-commenting-o"></i>活动说明</span>
			</a>
			<a title="答辩时间表" href="schedule.php">
				<span><i class="fa fa-table"></i>答辩时间表</span>
			</a>
			<a title="答辩说明" href="powerpoint.php" style="margin: 0">
				<span><i class="fa fa-comments-o"></i>答辩说明</span>
			</a>
		</div>
		<div>
			<a class="login" title="学生登入" href="student_login.php">
				<span><i class="fa fa-user-circle-o"></i></span><span>学生登入</span>
			</a>
		</div>

	</div><!--/.sidebar-->
</body>

</html>