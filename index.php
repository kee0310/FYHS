<!-- 
  This is the index page of the school website.
-->

<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 首页</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" type="text/css" href="css/carousel.css" media="screen">

  <!-- Header -->
  <?php
  include('header.php');
  include('connect.php');
  ?>

  <style>
    .banner1 {
      background-image: url("img/index/parallax1.jpg");
      background-attachment: fixed;
      background-repeat: none;
      background-size: cover;
      width: 100%;
      height: 400px;
    }

    .banner2 {
      background-image: url("img/index/parallax1.jpg");
      background-attachment: fixed;
      background-repeat: none;
      background-size: cover;
      width: 100%;
      height: 400px;
    }

    .add-info a {
      display: block;
      border-radius: 5px;
      background: #0054a5;
      text-align: center;
      color: #fff;
      font-family: open sans;
      font-weight: bold;
      font-size: x-large;
      margin-top: 20px;
      padding: 10px;
      transition: all .3s ease;
    }

    .add-info a:active,
    .add-info a:visited {
      color: white;
    }

    .add-info a:hover {
      background: #19b3eb;
      color: #000;
    }

    .carousel-inner .item {
      height: 400px;

      & img {
        height: 100% !important;
        object-fit: cover;
      }

      &:nth-child(4) {
        box-shadow: inset 0 0 10px 500px rgba(255, 255, 255, 0.6);
      }
    }

    span[data-title]:hover:after,
    div[data-title]:hover:after {
      font: 11px 'Roboto';
      font-weight: 400;
      content: attr(data-title);
      position: absolute;
      margin: 0 0 100px;
      background: #282423;
      border: 1px solid #f7f3eb;
      color: #f7f3eb;
      padding: 5px;
      z-index: 9999;
      min-width: 90px;
      max-width: 90px;
    }

    .post-row {
      min-height: fit-content;
      background: white;
      border: 1px solid rgba(0, 0, 0, 0.1);
      margin: 10px;
      cursor: pointer;
      border-radius: 10px;
      box-shadow: 3px 3px 5px rgb(0, 0, 0, 0.2);
    }

    .post-row:hover {
      -webkit-filter: brightness(70%);
      transition: all .3s ease;
    }

    .left-meta-post {
      box-shadow: 3px 3px 5px rgb(0, 0, 0, 0.5);
      margin-top: -5px;
      margin-left: -5px;
    }

    .post-title {
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
    }

    .post-content p {
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;

      & a {
        color: #3788d8;
      }
    }

    .post-content p br {
      display: none;
    }

    .latest-posts .classic-title:hover {
      color: red;
      transition: all .2s ease;
    }

    .calendar {
      -ms-overflow-style: none;
      /* Internet Explorer 10+ */
      scrollbar-width: none;
      /* Firefox */
    }

    .calendar::-webkit-scrollbar {
      display: none;
      /* Safari and Chrome */
    }
  </style>

</head>

<body>
  <!-- Home Page Slider -->
  <section id="home">
    <div id="main-slide" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#main-slide" data-slide-to="0" class="active"></li>
        <li data-target="#main-slide" data-slide-to="1"></li>
        <li data-target="#main-slide" data-slide-to="2"></li>
        <li data-target="#main-slide" data-slide-to="3"></li>
      </ol>

      <div class="carousel-inner">
        <!-- Slider 1 -->
        <div class="item active">
          <img class="img-responsive" src="img/index/banner1.jpg" alt="slider">
          <div class="slider-content">
            <h2 class="animated2" style="font-family: 楷体, KaiTi; text-shadow: 2px 2px rgb(0, 0, 0, 0.3);">
              <strong>宽柔中学古来分校</strong>
            </h2>
            <h3 class="animated3">
              <strong>Foon Yew High School - Kulai</strong>
            </h3>
          </div>
        </div>
        <!-- Slider 2 -->
        <div class="item">
          <img class="img-responsive" src="img/index/banner2.jpg" alt="slider">
          <div class="slider-content">
            <h2 class="animated4" style="font-family: 楷体, KaiTi; text-shadow: 2px 2px rgb(0, 0, 0, 0.3);">
              <strong>徳 智 体 群 美</strong>
            </h2>
            <h3 class="animated5">
              <strong style="font-family: 楷体, KaiTi;">推展五育兼顾的素质教育，以德育为核心。</strong>
            </h3>
          </div>
        </div>
        <!-- Slider 3 -->
        <div class="item">
          <img class="img-responsive" src="img/index/banner4.jpg" alt="slider">
        </div>
        <!-- Slider 4 -->
        <div class="item">
          <img class="img-responsive" src="img/index/banner7.jpg" style="object-position: bottom" alt="slider">
        </div>
        <!-- Slider 5 -->
        <div class="item">
          <img class="img-responsive" src="img/index/banner5.jpg" alt="slider">
        </div>
        <!-- Slider 6 -->
        <div class="item">
          <img class="img-responsive" src="img/index/banner6.jpg" alt="slider">
        </div>
        <!-- Slider 7 -->
        <div class="item">
          <img class="img-responsive" style="object-position: bottom" src="img/index/banner3.jpg" alt="slider">
        </div>
        <!-- Slider 8 -->
        <div class="item">
          <img class="img-responsive" src="img/index/banner8.jpg" alt="slider">
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
  </section>


  <!-- Content 1 -->
  <div id="content" style="padding: 0;">
    <div class="container" style="width: 100%;" align="center">
      <div class="page-content col-md-8" align="left">

        <!-- Latest News -->
        <div class="latest-posts">
          <a href="news_all.php">
            <h4 class="classic-title"><i class="fa fa-newspaper-o"></i> 最新消息</h4>
          </a>

          <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="2" data-mdb-interval="true">

            <?php
            $query = mysqli_query($mysqli, "SELECT * FROM wnews ORDER BY news_date DESC");
            while ($row = mysqli_fetch_array($query)) {
              $date = strtotime($row['news_date']);
            ?>

              <div class="post-row item" onclick="window.open('news_detail.php?id=<?php echo $row['news_id'] ?>', '_self')">

                <!-- News Date -->
                <div class="left-meta-post">
                  <div class="post-date">
                    <span class="day"><?= date('d', $date) ?></span>
                    <span class="month"><?= date('m', $date) ?></span>
                  </div>

                  <div class="post-type" style="background: red; color: white; font-size: small">
                    <?= date('D', $date) ?>
                  </div>
                </div>

                <!-- News Content -->
                <div style="margin: 10px; display: grid;">
                  <h3 class="post-title"><?= $row['news_title'] ?></h3>

                  <div style="font-size: smaller"><i class="fa fa-building"></i>&ensp;<?= $row['news_dept'] ?></div>

                  <div class="post-content" style="font-size: smaller; max-height: 85px; overflow: hidden">
                    <p style="margin: 0"><?= $row['news_content'] ?></p>
                  </div>

                  <div style="color: red;">
                    <i class='fa fa-chevron-circle-right'></i> 点击查阅
                  </div>
                </div>
              </div>

            <?php
            }
            ?>

          </div>
        </div>


        <!-- Latest Announcement -->
        <div class="latest-posts">
          <a href="announcement_all.php">
            <h4 class="classic-title"><i class='fa fa-bullhorn' style="transform: rotate(-10deg);"></i> 最新通告</h4>
          </a>

          <div id="main-slide" class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="2" autoplay="true">
            <?php
            $query = mysqli_query($mysqli, "SELECT * FROM wannouncement ORDER BY announcement_date DESC");
            while ($row = mysqli_fetch_array($query)) {
              $date = strtotime($row['announcement_date']);
            ?>

              <div class="post-row item" onclick="window.open('announcement_detail.php?id=<?php echo $row['announcement_id'] ?>', '_self')">

                <!-- Announcement Date -->
                <div class="left-meta-post">
                  <div class="post-date">
                    <span class="day"><?= date('d', $date) ?></span>
                    <span class="month"><?= date('m', $date) ?></span>
                  </div>

                  <div class="post-type" style="background: red; color: white; font-size: small">
                    <?= date('D', $date) ?>
                  </div>
                </div>

                <!-- Announcement Content -->
                <div style="margin: 10px; display: grid;">
                  <h3 class="post-title"><?= $row['announcement_title'] ?></h3>

                  <div style="font-size: smaller"><i class="fa fa-building"></i>&ensp;<?= $row['announcement_dept'] ?></div>

                  <div class="post-content" style="font-size: smaller; max-height: 85px; overflow: hidden">
                    <p style="margin: 0"><?= $row['announcement_content'] ?></p>
                  </div>

                  <div style="color: red;">
                    <i class='fa fa-chevron-circle-right'></i> 点击查阅
                  </div>
                </div>
              </div>

            <?php
            }
            ?>

          </div>
        </div>
      </div>

      <!-- Google Calendar 1 (smaller size) -->
      <div class="col-md-4" style="max-width: 500px; padding-top: 20px">
        <div align="center">
          <h4 class="classic-title" style="width: fit-content; ">本月活动</h4>
        </div>
        <div class="calendar" style="max-height: 750px;  height: fit-content; overflow: scroll; clip-path: inset(0px 0px calc(100% - calc(100% - 80px)) 0px);">
          <iframe src="https://embed.styledcalendar.com/#0QHL3Ph7RNcnDk05U4h1" title="Styled Calendar" class="styled-calendar-container" style="width: 100%; border: none;" data-cy="calendar-embed-iframe"></iframe>
          <script async type="module" src="https://embed.styledcalendar.com/assets/parent-window.js"></script>
        </div>
      </div>

      <!-- Start Additional Info 
      <div class="col-md-6 add-info" style="margin-bottom: 100px">
        <h4 class="classic-title">2023 年第 16 届全柔华文独中球类锦标赛</h4>
        <div>
          <a class="link" href="doc/index/competition_2020.pdf" title="赛程简章" target="_blank">
            大会竞赛简章及参赛细则 <i class="fa fa-file-pdf-o"></i>
          </a>
          <a class="link" href="competition_2020.php" title="球类赛成绩公布">球类赛成绩公布</a>
          <a class="link" href="competition_2020.php" title="球类赛最新消息">球类赛最新消息</a>
        </div>
      </div>

      <div class="col-md-6 add-info">
        <h4 class="classic-title">2023年宽中初一新生入学试</h4>
        <div>
          <a class="link" href="#" title="报名表">报名表格 <i class="fa fa-file-pdf-o"></i></a>
          <a class="link" href="#" title="入学试简章">入学试简章</a>
        </div>
      </div>
       End Additional Info -->

    </div>
  </div>


  <!-- Banner -->
  <div class="banner1 hidden-xs"></div>


  <!-- Google Calendar 2 (larger size): hidden on phone because it will resize to smaller size calendar which are the same as Google Calendar 1 -->
  <div class="hidden-xs" id="content" style="padding: 0;">
    <div class="container" style="width: 100%; ">
      <div class="page-content" align="center">
        <h4 class="classic-title">2024 年活动日历</h4>

        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px">
          <div style="max-width: 700px; width: 100%">
            <iframe src="https://embed.styledcalendar.com/#0QHL3Ph7RNcnDk05U4h1" title="Styled Calendar" class="styled-calendar-container" style="width: 100%; border: none;" data-cy="calendar-embed-iframe"></iframe>
            <script async type="module" src="https://embed.styledcalendar.com/assets/parent-window.js"></script>
            <div style="width: 300px; height: 80px; position: absolute; background: white; margin-top: -100px; margin-left: 30px;"></div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Banner -->
  <div class="banner1 hidden-xs"></div>


  <!-- School Info -->
  <div id="content" style="padding: 0;">
    <div class="container" style="width: 100%;">
      <div class="page-content">
        <img class="col-md-6" style="padding: 0;" src="img/index/i01.jpg" onclick="this.requestFullscreen()">

        <div class="col-md-6" data-animation="fadeInDown" data-animation-delay="01">
          <h1 class="classic-title">宽柔中学古来分校</h1>
          <div style="padding: 20px;">
            <i class="fa fa-quote-left" style="opacity: 20%; font-size: 30px;"></i>
            <p>
              本校为一间民办的华文独立中学．教学与行政媒介语以华语为主。德、智、体、群、美五育，乃本校一贯的办学方针，落实于教学与行政管理，取得均衡的发展。
              本校实施通识教育．在编班制度方面，采用分段式混合能力编班，无缩短年限的精英班。本校为一间民办的华文独立中学．教学与行政媒介语以华语为主。德、智、体、群、美五育，
              乃本校一贯的办学方针，落实于教学与行政管理，取得均衡的发展。 本校实施通识教育．在编班制度方面，采用分段式混合能力编班，无缩短年限的精英班。
            </p>
            <div align="right"><i class="fa fa-quote-right" style="opacity: 20%; font-size: 30px;"></i></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<!-- Footer -->
<?php include('footer.php'); ?>

</html>