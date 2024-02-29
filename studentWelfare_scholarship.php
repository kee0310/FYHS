<!-- 
  This page are use to display the scholarship details for student.
-->

<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 奖助学金 | 常年助学金</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!-- Header -->
  <?php include('header.php') ?>

  <style>
    .wave {
      margin: 50px 0px;
      transform-origin: center -36px;
      transform: rotate(0deg);
      transition: all .5s ease-in-out;
      padding: 0 50px !important;
      text-align: center;

      & img {
        background-color: #edede0;
        padding: 20px;
        border: solid 13px #4f3200;
        box-shadow: -3px -3px 12px #999;
        display: block;
      }

      &:before {
        content: '';
        position: absolute;
        top: -23px;
        left: 50%;
        display: block;
        height: 44px;
        width: 47px;
        background-image: url(https://cdn.hashnode.com/res/hashnode/image/upload/v1602040503586/FW6g79WBY.png);
        background-size: 20px 20px;
        background-repeat: no-repeat;
        z-index: 16;
      }

      &:after {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        border: 1.5px solid #ffffff;
        top: -10px;
        left: 50%;
        border-bottom: none;
        border-right: none;
        transform: rotate(35deg);
      }

      &:hover {
        animation: wave ease-in-out .5s infinite alternate;
        animation-delay: .5s;
        transform: rotate(5deg);
        cursor: pointer;
      }
    }

    @keyframes wave {
      0% {
        transform: rotate(5deg);
      }

      100% {
        transform: rotate(-5deg);
      }
    }
  </style>

</head>

<body>
  <!-- Page Banner -->
  <div class="page-banner" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 50%, rgba(0,0,0,1)), url(img/subbanner10.jpg) center; background-size: cover;">
    <div class="container">
      <div class="col-md-6">
        <h2>常年助学金</h2>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumbs">
          <a href="index.php">
            <li><i>首页 /&ensp;</i></li>
          </a>
          <a href="">
            <li><i>奖助学金 /&ensp;</i></li>
          </a>
          <a href="">
            <li><i>常年助学金</i></li>
          </a>
        </ul>
      </div>
    </div>
  </div>


  <!-- Content -->
  <div id="content">
    <div class="container">
      <div class="page-content">

        <!-- Scolarship Description -->
        <div class="row">
          <h2 class="classic-title">校内外常年奖助学金暨援助金与各项计划</h2>

          <div class="service-content">
            宽中董事会一直以来都致力于为校内家庭经济拮据的学生提供帮助，确保他们能够专心学业而不受经济负担的困扰。清寒子弟助学金的成立是为那些面临贫困困境的学生提供了一条向前迈进的道路。
            <br><br>
            除了董事会和校方的共同努力外，社会各界的支持也起到了至关重要的作用。众多热心教育的社会企业、组织单位以及校友们积极参与，通过捐赠助学金的方式，为学校提供了额外的资源，使得本校能够进一步拓展助学项目，覆盖更广泛的学生群体。
            <br><br>
            此外，为了鼓励学业成绩优异的同学，本校也设立了奖学金制度，为优秀的、有潜力的学生提供更多的资助。这不仅鼓励学生在学术上取得更好的成绩，也为他们提供了追求更高教育水平的动力。
          </div>
        </div>

        <!-- Plans of Scolarship -->
        <div class="row">
          <h2 class="classic-title">宽柔中学各项奖助学金</h2>

          <div class="service-content">
            <ol style="list-style-type: cjk-ideographic;">
              <li>清寒学生借书计划</li>
              <li>清寒学生援助计划</li>
              <li>各类由社会人士及社团提供的奖助学金</li>
              <li>成绩优异奖学金（统考、SPM、校内成绩等）</li>
              <li>学艺奖学金</li>
            </ol>
          </div>
        </div>

        <!-- Scolarship Pictures -->
        <div style="display: flex; flex-wrap: wrap; justify-content: center;">
          <figure class="wave col-md-6">
            <img src="img/sb01.jpg" alt=""></img>
            <figcaption>2023年度校内助学金</figcaption>
          </figure>

          <figure class="wave col-md-6">
            <img src="img/sb02.jpg" alt=""></img>
            <figcaption>2023年度校外助学金</figcaption>
          </figure>

          <figure class="wave col-md-6">
            <img src="img/sb03.jpg" alt=""></img>
            <figcaption>2022年SPM成绩奖励金</figcaption>
          </figure>

          <figure class="wave col-md-6">
            <img src="img/sb04.jpg" alt=""></img>
            <figcaption>初一新生入学试成绩优异奖学金</figcaption>
          </figure>
        </div>
      </div>
    </div>
  </div>
</body>

<!-- Footer -->
<?php include('footer.php'); ?>

</html>