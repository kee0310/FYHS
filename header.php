<!-- 
  This is the header of the school website.
  It includes the navigation bar.
  All the alternate link and embedded stylesheet will define at here.
-->

<!doctype html>

<html lang="en">

<head>

  <!-- Basic -->
  <title>宽柔中学古来分校 | Header</title>
  <link rel="icon" href="img/favicon.png" sizes="16x16" type="image/png">

  <!-- Define Charset -->
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="宽柔中学古来分校 Foon Yew High School - Kulai">
  <meta name="author" content="宽柔中学古来分校">

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="css/slicknav.css" media="screen">

  <!-- Margo CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">

  <!-- Color Defult -->
  <link rel="stylesheet" type="text/css" href="css/colors/red.css" media="screen" />

  <!-- Animate On Scroll. Ref: https://michalsnik.github.io/aos/ -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Margo JS  -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/jquery.migrate.js"></script>
  <script type="text/javascript" src="js/modernizrr.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="js/jquery.appear.js"></script>
  <script type="text/javascript" src="js/count-to.js"></script>
  <script type="text/javascript" src="js/jquery.textillate.js"></script>
  <script type="text/javascript" src="js/jquery.lettering.js"></script>
  <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="js/smooth-scroll.js"></script>
  <script type="text/javascript" src="js/skrollr.js"></script>
  <script type="text/javascript" src="js/jquery.parallax.js"></script>
  <script type="text/javascript" src="js/mediaelement-and-player.js"></script>
  <script type="text/javascript" src="js/jquery.slicknav.js"></script>

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body> <!-- Disabled right click  oncontextmenu="return false"-->

  <header class="clearfix">
    <!-- Top Bar -->
    <div class="top-bar">
      <div class="container">
        <div class="col-md-7">
          <!-- Contact Info -->
          <ul class="contact-details">
            <li><a href="https://maps.app.goo.gl/Z9peDGgj31ozyha26"><i class="fa fa-map-marker"></i> FOON YEW HIGH SCHOOL - KULAI</a></li>
            <li><a href="mailto:enquiry@fyk.edu.my"><i class="fa fa-envelope-o"></i> enquiry@fyk.edu.my</a></li>
            <li><a href="tel:07-6625888"><i class="fa fa-phone"></i> 07-6625888</a></li>
          </ul>
        </div>
        <div class="col-md-5">
          <!-- Social Links -->
          <ul class="social-list">
            <li>
              <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="https://www.facebook.com/profile.php?id=346209705458964&ref=br_rs" target="_blank"><i class="fa fa-facebook"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>


    <!-- Naviagtion Bar -->
    <div class="navbar navbar-default navbar-top" role="navigation" data-spy="affix" data-offset-top="50">
      <div align="center" class="container col-md-10" style="padding: 0; width: 100%;">

        <div class="navbar-header">
          <!-- Logo -->
          <a class="navbar-brand" href="index.php" style="padding: 0; margin-left: 80px">
            <img alt="" src="img/fylogo1.png" height="100%" style="max-width: 180px; padding: 10px">
          </a>
          <!-- Toggle Nav Link For Mobiles -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <div class="navbar-collapse collapse">
          <!-- Navigation List (Desktop) -->
          <ul class="nav navbar-nav " style="display: flex; flex-wrap: wrap; justify-content: center; float: none; width: fit-content; text-align: left;">
            <li>
              <a href="index.php">首页</a>
              <ul class="dropdown">
                <li><a href="announcement_all.php">活动/通知/公告</a></li>
                <li><a href="news_all.php">消息</a></li>
              </ul>
            </li>
            <li>
              <a href="school_view.php" style="pointer-events: none;">校园风貌</a>
              <ul class="dropdown">
                <li><a href="school_view.php">校景</a></li>
                <li><a href="school_buildings.php">楼宇</a></li>
                <li><a href="school_classroom.php">馆室与设备</a></li>
                <li><a href="school_location.php">位置</a></li>
              </ul>
            </li>
            <li>
              <a href="history.php">校史</a>
            </li>
            <li>
              <a href="about_school.php" style="pointer-events: none;">学校概况</a>
              <ul class="dropdown">
                <li><a href="about_school.php#about1">关于宽柔</a></li>
                <li><a href="about_school.php#about2">愿景、教育理念、办学使命</a></li>
                <li><a href="about_school.php#about3">方针</a></li>
                <li><a href="about_school.php#about4">校务现况</a></li>
                <li><a href="about_school.php#about5">管理策略</a></li>
                <li><a href="about_school.php#about6">ISO</a></li>
                <li><a href="about_school.php#about7">学制</a></li>
                <li><a href="about_school.php#about8">课程</a></li>
                <li><a href="about_school.php#about9">发展计划</a></li>
              </ul>
            </li>
            <li>
              <a href="directors.php">董事会</a>
            </li>
            <li>
              <a href="org_department.php" style="pointer-events: none;">行政单位</a>
              <ul class="dropdown">
                <li><a href="org_department.php">行政单位</a></li>
                <li><a href="org_department_member.php">行政组织图</a></li>
              </ul>
            </li>
            <li>
              <a href="adminCalendar.php">行政历</a>
            </li>
            <li>
              <a href="teacher_incharge.php" style="pointer-events: none;">教师风采</a>
              <ul class="dropdown">
                <li><a href="teacher_incharge.php">科主任</a></li>
                <li><a href="teacher_leader.php">组长</a></li>
                <li><a href="teacher_all.php">各科老师</a></li>
                <li><a href="teacher_recruitment.php">招聘</a></li>
              </ul>
            </li>
            <li>
              <a href="student_rules.php" style="pointer-events: none;">学生守则</a>
              <ul class="dropdown">
                <li><a href="student_rules.php">重要条例和校规</a></li>
                <li><a href="student_fees.php">学杂费</a></li>
              </ul>
            </li>
            <li>
              <a href="studentWelfare_scholarship.php" style="pointer-events: none;">奖助学金</a>
              <ul class="dropdown">
                <li><a href="studentWelfare_scholarship.php">常年助学金</a></li>
                <li><a href="studentWelfare_bursary.php">紧急援助金（训导处）</a></li>
              </ul>
            </li>
            <li>
              <a href="partner-institution_1.php" style="pointer-events: none;">姐妹校</a>
              <ul class="dropdown">
                <li><a href="partner-institution_1.php">新北市立淡水高级商工职业学校</a></li>
                <li><a href="partner-institution_2.php">槟城韩江中学</a></li>
                <li><a href="partner-institution_3.php">高雄市立高雄高级中学</a></li>
              </ul>
            </li>
            <li>
              <a href="alumni_group.php" style="pointer-events: none;">情系母校</a>
              <ul class="dropdown">
                <li><a href="alumni_group.php">各校友会</a></li>
                <li><a href="alumni_individual.php">个别校友</a></li>
              </ul>
            </li>
            <li>
              <a href="other_1@a38b.php" style="pointer-events: none;">其他</a>
              <ul class="dropdown">
                <li><a href="otherResource_magazines.php">校园刊物</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>


      <!-- Navigation List (Mobile) -->
      <ul class="wpb-mobile-menu" align="left" style="padding-left: 20px;">
        <li>
          <a href="index.php">首页</a>
          <ul class="dropdown">
            <li><a href="announcement_all.php">活动/通知/公告</a></li>
            <li><a href="news_all.php">消息</a></li>
          </ul>
        </li>
        <li>
          <a href="school_view.php" style="pointer-events: none;">校园风貌</a>
          <ul class="dropdown">
            <li><a href="school_view.php">校景</a></li>
            <li><a href="school_buildings.php">楼宇</a></li>
            <li><a href="school_classroom.php">馆室与设备</a></li>
            <li><a href="school_location.php">位置</a></li>
          </ul>
        </li>
        <li>
          <a href="history.php" style="pointer-events: none;">校史</a>
          <ul class="dropdown">
            <li><a href="history.php">1996 - 2004</a></li>
            <li><a href="history_2@a38b.php">2005 - 2010</a></li>
            <li><a href="history_3@a38b.php">2011 - 2021</a></li>
          </ul>
        </li>
        <li>
          <a href="about_school.php" style="pointer-events: none;">学校概况</a>
          <ul class="dropdown">
            <li><a href="about_school.php#about1">关于宽柔</a></li>
            <li><a href="about_school.php#about2">愿景、教育理念、办学使命</a></li>
            <li><a href="about_school.php#about3">方针</a></li>
            <li><a href="about_school.php#about4">校务现况</a></li>
            <li><a href="about_school.php#about5">管理策略</a></li>
            <li><a href="about_school.php#about6">ISO</a></li>
            <li><a href="about_school.php#about7">学制</a></li>
            <li><a href="about_school.php#about8">课程</a></li>
            <li><a href="about_school.php#about9">发展计划</a></li>
          </ul>
        </li>
        <li>
          <a href="directors.php">董事会</a>
        </li>
        <li>
          <a href="org_department.php" style="pointer-events: none;">行政单位</a>
          <ul class="dropdown">
            <li><a href="org_department.php">行政单位</a></li>
            <li><a href="org_department_member.php">行政组织图</a></li>
          </ul>
        </li>
        <li>
          <a href="adminCalendar.php">行政历</a>
        </li>
        <li>
          <a href="teacher_incharge.php" style="pointer-events: none;">教师风采</a>
          <ul class="dropdown">
            <li><a href="teacher_incharge.php">科主任</a></li>
            <li><a href="teacher_leader.php">组长</a></li>
            <li><a href="teacher_all.php">各科老师</a></li>
            <li><a href="teacher_recruitment.php">招聘</a></li>
          </ul>
        </li>
        <li>
          <a href="student_rules.php" style="pointer-events: none;">学生守则</a>
          <ul class="dropdown">
            <li><a href="student_rules.php">重要条例和校规</a></li>
            <li><a href="student_fees.php">学杂费</a></li>
          </ul>
        </li>
        <li>
          <a href="studentWelfare_scholarship.php" style="pointer-events: none;">奖助学金</a>
          <ul class="dropdown">
            <li><a href="studentWelfare_scholarship.php">常年助学金</a></li>
            <li><a href="studentWelfare_bursary.php">紧急援助金（训导处）</a></li>
          </ul>
        </li>
        <li>
          <a href="partner-institution_1.php" style="pointer-events: none;">姐妹校</a>
          <ul class="dropdown">
            <li><a href="partner-institution_1.php">新北市立淡水高级商工职业学校</a></li>
            <li><a href="partner-institution_2.php">槟城韩江中学</a></li>
            <li><a href="partner-institution_3.php">高雄市立高雄高级中学</a></li>
          </ul>
        </li>
        <li>
          <a href="alumni_group.php" style="pointer-events: none;">情系母校</a>
          <ul class="dropdown">
            <li><a href="alumni_group.php">各校友会</a></li>
            <li><a href="alumni_individual.php">个别校友</a></li>
          </ul>
        </li>
        <li>
          <a href="other_1@a38b.php" style="pointer-events: none;">其他</a>
          <ul class="dropdown">
            <li><a href="otherResource_magazines.php">校园刊物</a></li>
          </ul>
        </li>
      </ul>

    </div>
  </header>

</body>

</html>