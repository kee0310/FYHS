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
        <a class="navbar-brand" href="index.php">综合实践活动课程</a>
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
      <li><a title="实践活动" href="teacher_dashboard01.php"><svg class="glyph stroked app-window">
            <use xlink:href="#stroked-app-window"></use>
          </svg>实践活动</a></li>
      <li><a title="活动预算" href="teacher_dashboard02.php"><svg class="glyph stroked app-window">
            <use xlink:href="#stroked-app-window"></use>
          </svg>活动预算</a></li>
      <li><a title="活动计划书" href="teacher_dashboard03.php"><svg class="glyph stroked app-window">
            <use xlink:href="#stroked-app-window"></use>
          </svg>活动计划书</a></li>
      <li><a title="活动报告" href="teacher_dashboard05.php"><svg class="glyph stroked app-window">
            <use xlink:href="#stroked-app-window"></use>
          </svg>活动报告</a></li>
      <li><a title="最终修改活动报告" href="teacher_dashboard07.php"><svg class="glyph stroked app-window">
            <use xlink:href="#stroked-app-window"></use>
          </svg>最终修改活动报告</a></li>
      <li><a title="各组活动报告" href="teacher_dashboard06.php"><svg class="glyph stroked app-window">
            <use xlink:href="#stroked-app-window"></use>
          </svg>各组活动报告</a></li>
      <li><a title="学生名单分数" href="teacher_dashboard04.php"><svg class="glyph stroked app-window">
            <use xlink:href="#stroked-app-window"></use>
          </svg>学生名单分数</a></li>

      <li role="presentation" class="divider"></li>
      <li><a href="exe/logout.php"><svg class="glyph stroked male-user">
            <use xlink:href="#stroked-male-user"></use>
          </svg>登出</a></li>
    </ul>

  </div><!--/.sidebar-->

</body>

</html>