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

	<!--Icons-->
	<script src="js/lumino.glyphs.js"></script>

	<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">预订系统</a>
				<ul class="user-menu">

				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<img src="img/fylogo1.jpg" style="width: 80% ; height: auto">
			</div>
		</form>
		<ul class="nav menu">
			<li align="center">Web Admin</li>
			<li><a title="联课团体" href="wcocurricular.php"><svg class="glyph stroked app-window">
						<use xlink:href="#stroked-app-window"></use>
					</svg>联课团体</a></li>
			<li><a title="活动/通知/公告" href="wannouncement.php"><svg class="glyph stroked app-window">
						<use xlink:href="#stroked-app-window"></use>
					</svg>活动/通知/公告</a></li>
			<li><a title="最新消息" href="wnews.php"><svg class="glyph stroked app-window">
						<use xlink:href="#stroked-app-window"></use>
					</svg>最新消息</a></li>
			<li role="presentation" class="divider"></li>
			<li><a href="reserve_admin_logout.php"><svg class="glyph stroked male-user">
						<use xlink:href="#stroked-male-user"></use>
					</svg>登出</a></li>

		</ul>

	</div><!--/.sidebar-->




</body>

</html>