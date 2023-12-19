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
									<li align="center">贩卖部</li>
									<li><a title="学生名单" href="reserve_admin_view_student_list.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>学生名单</a></li>
									<li><a title="贩卖部预约" href="reserve_admin_view_booking_list.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>贩卖部预约</a></li>
									<li><a title="贩卖部时段" href="reserve_admin_view_slot_list.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>贩卖部时段</a></li>
									<li role="presentation" class="divider"></li>
									<li align="center">网上订书</li>
									<li><a title="（2022初一）个别订购单" href="book_order_student_list.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>（2022初一）个别订购单</a></li>
									<li><a title="（2022初一）订购总表" href="book_order_booking_list_print.php" target="_blank"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>（2022初一）订购总表</a></li>
									<li><a title="（2022初二至高三）个别订购" href="book_order_student_list_fyk.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>（2022初二至高三）个别订购</a></li>
									<li><a title="（2022初二至高三）订购总表" href="book_order_booking_list_print_fyk.php" target="_blank"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>（2022初二至高三）订购总表</a></li>
									<li><a title="各别书本订购" href="book_order_cater_list_fyk1.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>各别书本订购（初一）</a></li>
									<li><a title="各别书本订购" href="book_order_cater_list_fyk2.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>各别书本订购（其他年段）</a></li>
									<li role="presentation" class="divider"></li>										
									<li align="center">食堂</li>
									<li><a title="给班级" href="food_order_class_list.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>给班级</a></li>
									<li><a title="给档口" href="food_order_store_list.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>给档口</a></li>
									<li role="presentation" class="divider"></li>									
									<li><a href="reserve_admin_logout.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>登出</a></li>							
			
		</ul>

	</div><!--/.sidebar-->
		



</body>

</html>
