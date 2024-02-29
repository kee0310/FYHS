<!-- 
  This page are use to display the views and floor map of school.
-->

<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 校园风貌 | 校景</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!-- Header -->
  <?php include('header.php') ?>

  <style>
    .view {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 10vmin;
      transform: skew(5deg);

      & .card {
        flex: 1;
        transition: all 1s ease-in-out;
        height: 75vmin;
        position: relative;
        cursor: pointer;

        & .card__head {
          color: white;
          background: rgba(0, 0, 0, 0.5);
          transition: all 0.5s ease-in-out;
          position: absolute;
          bottom: 0;
          left: 0;
          font-size: clamp(10px, 1.8vw, 18px);
          writing-mode: vertical-rl;
          letter-spacing: 8px;
          padding: .8em .2em;
        }

        & img {
          height: 100%;
          width: 100%;
          object-fit: cover;
          object-position: center;
          transition: all 1s ease-in-out;
        }

        &:hover,
        &:active {
          flex-grow: 5;

          & .card__head {
            background: red;
            font-size: clamp(13px, 1.9vw, 23px);
          }
        }

        &:not(:last-child) {
          margin-right: 1em;
        }
      }
    }
  </style>

</head>

<body>
  <!-- Page Banner -->
  <div class="page-banner" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 50%, rgba(0,0,0,1)), url(img/subbanner17.jpg) center; background-size: cover;">
    <div class="container">
      <div class="col-md-6">
        <h2>校景</h2>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumbs">
          <a href="index.php">
            <li><i>首页 /&ensp;</i></li>
          </a>
          <a href="school_location.php">
            <li><i>校园风貌 /&ensp;</i></li>
          </a>
          <a href="">
            <li><i>校景</i></li>
          </a>
        </ul>
      </div>
    </div>
  </div>


  <!-- Content -->
  <div id="content" align="center">

    <!-- Multiple School Views-->
    <div class="view">
      <div class="card">
        <img src="img/school/view01.jpg">
        <div class="card__head">大学之窗走廊</div>
      </div>
      <div class="card">
        <img src="img/school/view02.jpg">
        <div class="card__head">鱼池</div>
      </div>
      <div class="card">
        <img src="img/school/view06.jpg">
        <div class="card__head">教学楼乘凉区</div>
      </div>
      <div class="card">
        <img src="img/school/view03.jpg">
        <div class="card__head">圆形舞台</div>
      </div>
      <div class="card">
        <img src="img/school/view04.jpg">
        <div class="card__head">气象测站</div>
      </div>
      <div class="card">
        <img src="img/school/view05.jpg">
        <div class="card__head">蓄水池旁小道</div>
      </div>
    </div>

    <div class="container">
      <div class="page-content">

        <!-- Floor Maps -->
        <h2 class="classic-title">校园平面图</h2>

        <p>宽中古来分校校园于2005年启用，占地30英亩，历经两期建设，馆室林立，设备齐全。</p>

        <img src="img/sc01.jpg" title="校园平面图" style="width: 100%; height: auto">
        <img src="img/sc02.jpg" title="2022年馆室及班级分布图" style="width: 100%; height: auto">

      </div>
    </div>
  </div>
</body>

<!-- Footer -->
<?php include('footer.php'); ?>

</html>