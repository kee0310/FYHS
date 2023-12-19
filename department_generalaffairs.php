<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 事务处 General Affairs Department</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" type="text/css" href="css/carousel.css" media="screen">

  <style>
    .page-content h2 {
      margin: 25px;
    }

    .table {
      background: url(img/de_general01.jpg) center;
      background-size: cover;
      box-shadow: inset 0 0 10px 500px rgba(0, 0, 0, 0.3);
      display: grid;
      font-family: KaiTi;
    }

    .table h1 {
      background: rgba(0, 0, 0, 0.4);
      border-bottom: 1px solid white;
      color: white;
      font-family: KaiTi;
      font-size: 30px;
      padding: 20px;
    }

    .table ul {
      float: center;
      margin: 0 auto;
    }

    .table ul li {
      background: rgba(255, 255, 255, 0.8);
      border-radius: 5px;
      color: rgba(0, 0, 0, 0.7);
      font-weight: bold;
      margin: 10px;
      padding: 5px;
    }

    .table img {
      border: 3px rgba(255, 255, 255, 0.8) solid;
      border-radius: 5px;
      margin: 10px auto;
      width: 30%;
      opacity: 0;
    }

    .document {
      background: salmon;
      border: 1px salmon solid;
      color: white;
      cursor: pointer;
      display: grid;
      font-family: kaiti;
      font-size: 20px;
      margin: 10px;
      overflow: hidden;
      text-align: center;
      transition: all .3s ease;
      width: 250px;
      opacity: 0;
    }

    .document:hover {
      background: tomato;
      border: 1px tomato solid;
    }

    .document:hover .content {
      -webkit-filter: brightness(40%);
      transition: all .3s ease;
    }

    .pdfIcon {
      -webkit-filter: brightness(200%);
      font-size: xx-large;
      margin-left: 110px;
      margin-top: 70px;
      position: absolute;
      visibility: hidden;
    }

    .document:hover .pdfIcon {
      visibility: visible;
    }

    .carousel-inner .text {
      background: linear-gradient(to left, rgba(0, 0, 0, 0) 30%, rgba(0, 0, 0, 1));
      color: white;
      font-size: clamp(10px, 1.8vw, 18px);
      height: 500px;
      position: absolute;
      text-align: left;
      top: 0;
      width: 100%;
      opacity: 0;
    }

    .carousel-inner .carousel-control {
      right: -60px !important;
      transition: all .3s ease;
    }

    .carousel-inner:hover .carousel-control {
      right: 0px !important;
    }
  </style>

</head>

<body>

  <!-- Container -->
  <div id="container">

    <!-- Start Header -->
    <?php
    $header = file_get_contents('header.php');
    echo $header;
    ?>
    <!-- End Header -->


    <!-- Start Page Banner -->
    <div class="page-banner"
      style="background: linear-gradient(to bottom, rgba(0,0,0,0) 50%, rgba(0,0,0,1)), url(img/organization/org05.jpg) center; background-size: cover;">
      <div class="container" style="position: relative;">
        <div class="col-md-6">
          <h2>事务处</h2>
        </div>
        <div class="col-md-6">
          <ul class="breadcrumbs">
            <a href="index@a38b.php">
              <li><i>首页 /&ensp;</i></li>
            </a>
            <a href="org_department.php">
              <li><i>行政单位 /&ensp;</i></li>
            </a>
            <a href="">
              <li><i>事务处</i></li>
            </a>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="page-content" style="padding: 0px;">

          <!-- First Part Start -->
          <div class="row">
            <h2 class="classic-title">事务处 General Affairs Department</h2>

            <div class="table" align="center">
              <h1 style="">
                工作范围
              </h1>
              <div style="display: flex;">
                <img src="img/de_general07.jpg" alt="园艺保养" title="园艺保养" data-animation="fadeInUp"
                  data-animation-delay="01" />
                <img src="img/de_general08.jpg" alt="食堂管理" title="食堂管理" data-animation="fadeInUp"
                  data-animation-delay="02" />
                <img src="img/de_general09.jpg" alt="贩卖部管理" title="贩卖部管理" data-animation="fadeInUp"
                  data-animation-delay="03" />
              </div>
              <ul class="col-md-8 col-xs-12" style="margin: auto" data-animation="fadeInUp" data-animation-delay="01">
                <li data-animation="fadeInUp" data-animation-delay="01">庶务与维修设备</li>
                <li data-animation="fadeInUp" data-animation-delay="01">校园保安及安全管理</li>
                <li data-animation="fadeInUp" data-animation-delay="01">收取学杂费及其他费用等</li>
                <li data-animation="fadeInUp" data-animation-delay="01">采购</li>
                <li data-animation="fadeInUp" data-animation-delay="01">贩卖部</li>
                <li data-animation="fadeInUp" data-animation-delay="01">消防系统</li>
                <li data-animation="fadeInUp" data-animation-delay="01">食堂管理</li>
                <li data-animation="fadeInUp" data-animation-delay="01">园艺管理</li>
                <li data-animation="fadeInUp" data-animation-delay="01">资产管理</li>
                <li data-animation="fadeInUp" data-animation-delay="01">校园整洁</li>
              </ul>
              <div style="display: flex;">
                <img src="img/de_general10.jpg" alt="校园保安" title="校园保安" data-animation="fadeInUp"
                  data-animation-delay="01" />
                <img src="img/de_general11.jpg" alt="缴费" title="缴费" data-animation="fadeInUp"
                  data-animation-delay="02" />
                <img src="img/de_general12.jpg" alt="校园整洁" title="校园整洁" data-animation="fadeInUp"
                  data-animation-delay="03" />
              </div>
            </div>
          </div>
          <!-- First Part End -->


          <!-- Second Part Start -->
          <div class="row">
            <h2 class="classic-title">事务处ISO品质管理目标</h2>

            <div class="service-content">
              <p>
                （一）贩卖部每年净盈利达 RM 300,000<br>
                （二）场地租用：一年内，礼堂及大讲堂租用各达 18 次<br>
                （三）预防故障维修：每个月不超过 1 次故障造成教学停顿或顾客投诉
              </p>
              <!-- First document -->
              <div style="display: flex; flex-wrap: wrap;">
                <div class="document" onclick="window.open('doc/document01.pdf', '_blank')" data-animation="fadeInUp"
                  data-animation-delay="01">
                  <div class="content" style="margin: -20px; padding-left: 15px;">
                    <iframe src="doc/document01.pdf#zoom=50"
                      style=" pointer-events: none; width: 100%; height: 200px;"></iframe>
                  </div>
                  <p style="margin-top: 25px; padding: 0 16px">
                    2022年第二期至第四期学杂费缴费通知书
                  </p>
                  <div class="pdfIcon">
                    <i class="fa fa-file-pdf-o"></i>
                  </div>
                </div>
                <!-- Second document -->
                <div class="document" onclick="window.open('doc/document02.pdf', '_blank')" data-animation="fadeInUp"
                  data-animation-delay="02">
                  <div class="content" style="margin: -20px; padding-left: 15px;">
                    <iframe src="doc/document02.pdf#zoom=50"
                      style=" pointer-events: none; width: 100%; height: 200px;"></iframe>
                  </div>
                  <p style="margin-top: 25px; padding: 0 16px">
                    使用网上付款缴交学费注意事项
                  </p>
                  <div class="pdfIcon">
                    <i class="fa fa-file-pdf-o"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Second Part End -->


          <!-- Third Part Start -->
          <div class="row">
            <h2 class="classic-title">场地租借</h2>

            <div id="main-slide" align="center" class="carousel slide" data-ride="carousel" style="margin: auto">
              <div class="carousel-inner" style="height: 500px; height: fit-content; max-width: 800px">
                <div class="item active">
                  <img class="img-responsive" src="img/de_general02.jpg" alt="slider">
                </div>
                <div class="item">
                  <img class="img-responsive" src="img/de_general03.jpg" alt="slider">
                </div>
                <div class="item">
                  <img class="img-responsive" src="img/de_general04.jpg" alt="slider">
                </div>
                <div class="item">
                  <img class="img-responsive" src="img/de_general05.jpg" alt="slider">
                </div>
                <div class="item">
                  <img class="img-responsive" src="img/de_general06.jpg" alt="slider">
                </div>

                <div class="text col-md-6" data-animation="fadeInLeft" data-animation-delay="02">
                  <p>
                    <b style="font-size: clamp(15px, 2.5vw, 25px)">丹斯里林梧桐大礼堂</b><br>
                    &emsp;- 冷气设备<br>
                    &emsp;- 可容纳2000人<br><br>
                    <b style="font-size: clamp(15px, 2.5vw, 25px)">鹤尧讲堂</b><br>
                    &emsp;- 可容纳300人<br><br>
                    <b style="font-size: clamp(15px, 2.5vw, 25px)">小讲堂 1 & 2</b><br>
                    &emsp;- 各可容纳80人
                  </p>
                </div>

                <div class="right carousel-control">
                  <a href="#main-slide" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </div>


              <div class="service-content" style=" font-size: large; ">
                <br>欢迎致电事务处洽谈场地租借<br>
                <i class="fa fa-phone"></i>&emsp;07-6636776
              </div>
            </div>
          </div>
          <!-- Third Part End -->

        </div>
      </div>
    </div>
    <!-- End content -->

    <!-- Start Footer -->
    <?php
    $footer = file_get_contents('footer.php');
    echo $footer;
    ?>
    <!-- End Footer -->

  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>