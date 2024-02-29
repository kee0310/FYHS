<!-- 
	This is a fixed header of the program.
	Also perform as a switcher to another page.

	File connected:
		index.php
		details.php
		schedule.php
		powerpoint.php
		student_login.php
-->

<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>综合实践活动课程 | 页面</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/datepicker3.css" rel="stylesheet">
  <link href="css/bootstrap-table.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/style_v2.css" rel="stylesheet">
  <link href="css/star.css" rel="stylesheet">

  <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />

  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>


  <!-- Bootstrap Carousel -->
  <link rel="stylesheet" type="text/css" href="../css/carousel.css" media="screen">
  <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>

  <!-- CSS Animation. Ref: https://cssanimation.io -->
  <link href="https://cdn.jsdelivr.net/gh/yesiamrocks/cssanimation.io@1.0.3/cssanimation.min.css" rel="stylesheet">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/yesiamrocks/cssanimation.io@1.0.3/letteranimation.min.js"></script>

  <!-- Animate On Scroll. Ref: https://michalsnik.github.io/aos/ -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Ma%20Shan%20Zheng' rel='stylesheet' type='text/css'>

  <!--Icons-->
  <script src="js/lumino.glyphs.js"></script>
  <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" media="screen">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage: 'src/loading.gif',
        closeImage: 'src/closelabel.png'
      })
    })
  </script>

</head>

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

      <!-- Mobile Login -->
      <a title="学生登入" href="student_login.php">
        <span class="mobile-login"><i class="fa fa-user-circle-o hidden-lg hidden-md hidden-sm"></i></span>
      </a>

      <!-- Mobile Menu -->
      <div class="menu-items hidden-lg hidden-md hidden-sm">
        <div align="center" class="school-logo">
          <a href="../index.php"><img src="img/fylogo.png" style="width: 100%; max-width: 200px; margin: 10px; "></a>
        </div>
        <div class="sidemenu" style="padding: 10px 0" align="center">
          <a title="首页" href="index.php">
            <span><i class="fa fa-home"></i>首页</span>
          </a>
          <a title="活动说明" href="details.php">
            <span><i class="fa fa-commenting-o"></i>活动说明</span>
          </a>
          <a title="答辩时间表" href="schedule.php">
            <span><i class="fa fa-table"></i>答辩时间表</span>
          </a>
          <a title="答辩说明" href="powerpoint.php">
            <span><i class="fa fa-comments-o"></i>答辩说明</span>
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
    <a class="button-index" title="首页" href="index.php"><span>首页</span></a>
    <div class="sidemenu">
      <a title="活动说明" href="details.php">
        <span><i class="fa fa-commenting-o"></i>活动说明</span>
      </a>
      <a title="答辩时间表" href="schedule.php">
        <span><i class="fa fa-table"></i>答辩时间表</span>
      </a>
      <a title="答辩说明" href="powerpoint.php">
        <span><i class="fa fa-comments-o"></i>答辩说明</span>
      </a>
    </div>

    <!-- Desktop Login -->
    <a class="login" title="学生登入" href="student_login.php">
      <span><i class="fa-solid fa-user"></i> 学生登入</span>
    </a>
  </div>

</body>

</html>