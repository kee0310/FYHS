<!-- 

	This is a fixed header for student page.
	Also perform as a switcher to another page.

	File connected:
		student_index.php
		student_application_form.php
		student_research_budget.php
		student_research_proposal.php
		student_research_report.php
		student_research_finalreport.php

-->
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
  <link href="css/star.css" rel="stylesheet">


  <!--Icons-->
  <script src="js/lumino.glyphs.js"></script>
  <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" media="screen">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Animate On Scroll. Ref: https://michalsnik.github.io/aos/ -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script src="ckeditor/ckeditor.js"></script>
</head>

<style>
  .nav-container a .mobile-login i {
    border-radius: 0;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }
</style>

<body>
  <!-- Add star effect to background -->
  <div id="stars"></div>
  <div id="stars2"></div>
  <div id="stars3"></div>

  <!-- Navigation Bar -->
  <div class="navbar">
    <div class="container nav-container">

      <!-- Menu Icon -->
      <input class="checkbox" type="checkbox" name="" id="menu" />
      <label for="menu" class="hamburger-lines hidden-lg hidden-sm">
        <span class="line line1"></span>
        <span class="line line2"></span>
        <span class="line line3"></span>
      </label>

      <!-- Logo -->
      <div class="col-xs-12 col-sm-9 col-md-10 col-md-offset-2" style="position: fixed; right: 0; padding-top: 8px;" align="center">
        <span class="logo">综合实践活动课程</span>
      </div>

      <!-- Mobile Logout -->
      <a title="学生登出" href="exe/logout.php">
        <span class="mobile-login"><i class="fa fa-sign-out hidden-lg hidden-md hidden-sm"></i></span>
      </a>

      <!-- Mobile Menu -->
      <div class="menu-items hidden-lg hidden-md hidden-sm">
        <div align="center" class="school-logo">
          <a href="../index.php"><img src="img/fylogo.png" style="width: 100%; max-width: 200px; margin: 10px; "></a>
        </div>
        <div class="sidemenu" style="padding: 10px 0" align="center">
          <a title="首页" href="student_index.php">
            <span><i class="fa fa-home"></i>首页</span>
          </a>
          <a title="申请表格" href="student_research_application.php">
            <span><i class="fa fa-solid fa-person-chalkboard"></i>申请表格</span>
          </a>
          <a title="预算案" href="student_research_budget.php">
            <span><i class="fa fa-bar-chart"></i>预算案</span>
          </a>
          <a title="计划书" href="student_research_proposal.php">
            <span><i class="fa fa-object-group"></i>计划书</span>
          </a>
          <a title="活动报告" href="student_research_report.php">
            <span><i class="fa fa-solid fa-file-circle-plus"></i>活动报告</span>
          </a>
          <a title="最终活动报告" href="student_research_finalreport.php">
            <span><i class="fa fa-solid fa-laptop-file"></i>最终活动报告</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Sidebar -->
  <div class="col-sm-3 col-md-2 sidebar" style="top: 0;">

    <!-- Logo -->
    <div align="center" class="school-logo">
      <a href="../index.php"><img src="img/fylogo2.png" style="width: 100%;"></a>
    </div>

    <!-- Desktop Menu -->
    <a class="button-index" title="首页" href="student_index.php"><span>首页</span></a>
    <div class="sidemenu">
      <a title="申请表格" href="student_research_application.php">
        <span><i class="fa fa-solid fa-person-chalkboard"></i>申请表格</span>
      </a>
      <a title="预算案" href="student_research_budget.php">
        <span><i class="fa fa-bar-chart"></i>预算案</span>
      </a>
      <a title="计划书" href="student_research_proposal.php">
        <span><i class="fa fa-object-group"></i>计划书</span>
      </a>
      <a title="活动报告" href="student_research_report.php">
        <span><i class="fa fa-solid fa-file-circle-plus"></i>活动报告</span>
      </a>
      <a title="最终活动报告" href="student_research_finalreport.php">
        <span><i class="fa fa-solid fa-laptop-file"></i>最终活动报告</span>
      </a>
    </div>

    <!-- Desktop Logout -->
    <a class="login" title="学生登出" href="exe/logout.php">
      <span><i class="fa fa-sign-out"></i> 登出</span>
    </a>
  </div>

</body>

</html>