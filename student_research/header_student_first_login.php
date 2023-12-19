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

	<!--Icons-->
	<script src="js/lumino.glyphs.js"></script>

	<link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" media="screen">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div class="navbar">
		<div class="container nav-container">
			<div class="col-lg-8 col-sm-9 col-xs-8">
				<span class="logo">综合实践活动课程</span>
			</div>
			<a title="学生登出" href="student_logout.php">
				<span class="mobile-login"><i class="fa fa-sign-out hidden-lg hidden-md hidden-sm"></i></span>
			</a>
		</div>
	</div><!--/.navbar-->

	<div class="col-sm-3 col-lg-2 sidebar" style="top: 0;">
		<div align="center" style="padding: 20px; padding-left: 10px; background: var(--main-color)">
			<a href="../index@a38b.php"><img src="../img/fylogo1.png" style="width: 100%; max-width: 200px;"></a>
		</div>
		<div>
			<a class="login" title="学生登出" href="student_logout.php">
				<span><i class="fa fa-sign-out"></i></span><span>登出</span>
			</a>
		</div>
	</div><!--/.sidebar-->
</body>

</html>