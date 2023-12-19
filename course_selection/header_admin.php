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
				<a class="navbar-brand" href="index.php">高二高三选修课系统</a>
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
			<li><a title="系统设定" href="admin_set_data.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>系统设定</a></li>
			<li><a title="所有课程" href="admin_subject_all_list.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>所有课程</a></li>
			<li><a title="学生账号" href="admin_set_password.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>学生账号</a></li>
			<li><a title="学生选课" href="admin_view_student_list.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>学生选课</a></li>
			<li><a title="课程资料" href="admin_view_subject_detail.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>课程资料</a></li>
			<li><a title="课程排行" href="admin_view_subject_ranking.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>课程排行</a></li>			
			<li><a title="学生选课数量" href="admin_view_no_course_student.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>学生选课数量</a></li>
			<li><a title="学生问卷数量" href="admin_view_no_survey_student.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>学生问卷数量</a></li>
			<li><a title="重复选课" href="admin_view_repeat_course_student.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>重复选课</a></li>
			
			<li role="presentation" class="divider"></li>
			<li><a href="admin_logout.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>登出</a></li>
		</ul>

	</div><!--/.sidebar-->
		



</body>

</html>
