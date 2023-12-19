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
				<a class="navbar-brand" href="index.php">训导处</a>
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
									<li align="center">训导处</li>
									<li><a title="学生名单" href="dashboard.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>学生名单</a></li>
									<li><a title="备案牌" href="dashboard01.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>备案牌</a></li>
									<li><a title="备案牌" href="dashboard01unreturn.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>备案牌（未归还）</a></li>
									<li><a title="借出物品" href="dashboard02.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>借出物品</a></li>
									<li><a title="借出物品" href="dashboard02unreturn.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>借出物品（未归还）</a></li>
									<li><a title="购买物品" href="dashboard03.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>购买物品</a></li>
									<li><a title="购买物品" href="dashboard03unpaid.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>购买物品（未付款）</a></li>
									<li><a title="没带校服" href="dashboard04.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>没带校服</a></li>
									<li><a title="打印 / 查找" href="dashboard05.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>打印 / 查找</a></li>
									<li role="presentation" class="divider"></li>
									<li><a href="admin_logout.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>登出</a></li>									
			
		</ul>

	</div><!--/.sidebar-->
		



</body>

</html>
