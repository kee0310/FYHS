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
  <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" media="screen">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<style>
  .fa {
    width: 25px;
  }
</style>

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
      <li>
        <a title="学生账号" href="admin_allStudent.php"><i class="fa fa-search"></i>学生账号</a>
      </li>
      <li>
        <a title="组别排列" href="admin_allGroupedStudent.php"><i class="fa fa-search"></i>组别排列</a>
      </li>
      <li>
        <a title="组员人数" href="admin_allGroup.php"><i class="fa fa-search"></i>组员人数</a>
      </li>
      <li>
        <a title="老师组别人数" href="admin_allTeacher.php"><i class="fa fa-search"></i>老师组别人数</a>
      </li>
      <li>
        <a title="申请表" href="admin_researchApplication.php"><i class="fa fa-pen"></i>申请表</a>
      </li>
      <li>
        <a title="预算案" href="admin_researchBudget.php"><i class="fa fa-pen"></i>预算案</a>
      </li>
      <li>
        <a title="计划书" href="admin_researchProposal.php"><i class="fa fa-pen"></i>计划书</a>
      </li>
      <li>
        <a title="活动报告" href="admin_researchReport.php"><i class="fa fa-pen"></i>活动报告</a>
      </li>
      <li>
        <a title="最终活动报告" href="admin_researchFinalreport.php"><i class="fa fa-pen"></i>最终活动报告</a>
      </li>
      <li>
        <a title="学生分数" href="admin_historyMark.php"><i class="fa fa-folder-open"></i>学生分数</a>
      </li>

      <li role="presentation" class="divider"></li>
      <li><a href="exe/logout.php"><svg class="glyph stroked male-user">
            <use xlink:href="#stroked-male-user"></use>
          </svg>登出</a></li>
    </ul>

  </div><!--/.sidebar-->

  <script src="js/jquery-1.11.1.min.js"></script>

  <script src="js/bootstrap.min.js"></script>

  <script src="js/bootstrap-table.js"></script>

</body>

</html>