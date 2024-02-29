<!-- 
  This page are use to display the partner institution (New Taipei Municipal Tamsui Vocational High School) .
-->

<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 姐妹校 | 新北市立淡水高级商工职业学校</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!-- Header -->
  <?php include('header.php') ?>

  <style>
    .intro {
      color: white;
      font-size: clamp(10px, 1.8vw, 18px);
      height: fit-content;
      width: 100%;
      padding: 20px;
      font-family: kaiti;
      letter-spacing: 2px;
      line-height: 1.6;
    }

    .intro div {
      opacity: 0;
    }

    .intro .title {
      color: white;
      font-family: kaiti;
      font-size: clamp(15px, 3vw, 30px);
      line-height: 1.2;
    }

    .page-content ol {
      position: relative;
      padding-left: 50px;
      max-width: 600px;
      margin: 100px 0;

      &::before {
        background: gainsboro;
        content: "";
        position: absolute;
        left: 0px;
        width: 5px;
        height: 100%;
        border-radius: 15px;
      }
    }

    .page-content li {
      padding-left: 16px;
      margin-top: 24px;
      position: relative;
      counter-increment: cardCount;
      padding-bottom: 50px;

      & p {
        text-align: left;
      }


      &:before {
        content: counter(cardCount);
        display: flex;
        background: white;
        align-items: center;
        padding-left: 14px;
        height: 35px;
        width: 60px;
        border-radius: 0 20px 20px 0;
        border: 2px solid grey;
        position: absolute;
        left: -70px;
        top: 15px;
        font-weight: bold;
      }
    }
  </style>

</head>

<body>
  <!-- Page Banner -->
  <div class="page-banner" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 50%, rgba(0,0,0,1)), url(img/subbanner21.jpg) center left; background-size: cover;">
    <div class="container">
      <div class="col-md-6">
        <h2>新北市立淡水高级商工职业学校</h2>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumbs">
          <a href="index.php">
            <li><i>首页 /&ensp;</i></li>
          </a>
          <a href="">
            <li><i>姐妹校 /&ensp;</i></li>
          </a>
          <a href="">
            <li><i>新北市立淡水高级商工职业学校</i></li>
          </a>
        </ul>
      </div>
    </div>
  </div>


  <!-- Content -->
  <div id="content">
    <div class="container" style="padding: 0;">

      <!-- Introduction -->
      <div class="intro" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 1)), url(img/pi16.jpg) bottom; background-size: cover; padding-top: clamp(100px, 60vh, 70vh);">
        <div data-aos="fade-up">
          <span style="font-size: x-large">新北市立淡水高级商工职业学校<br>New Taipei Municipal Tamsui Vocational High School<br><br></span>
          创立于1985年，简称淡水商工、淡商，位于台湾新北市淡水区，校地广阔达12.48公顷，
          拥有完整的中等教育学制，包括综合职能科、职业类科、高中部、资源班，以及进修部等。
          1994年4月28日与宽柔中学缔结为姐妹校。
        </div>
      </div>

      <div class="page-content" align="center">
        <!-- History with Foon Yew -->
        <ol align="left">
          <li data-aos="fade-up">
            <p>
              2006年6月4日宽柔中学董教学20人莅临台湾国立淡水高级商工职业学校参加校庆及两校缔结为姐妹校10周年纪念庆典
            </p>
            <img class="img-thumbnail" x src="img/pi02.jpg" alt="" />
          </li>
          <li data-aos="fade-up">
            <p>
              2018年11月29日宽柔中学古来分校行政主任及老师14人的教育参访团到台湾国立淡水商工高级职业学校进行参访交流
            </p>
            <img class="img-thumbnail" src="img/pi03.jpg" alt="" />
          </li>
          <li data-aos="fade-up">
            <p>
              淡水商工高级职业学校于贤华校长赠送纪念品给宽柔中学古来分校，由江宁福副校长接领
            </p>
            <img class="img-thumbnail" src="img/pi04.jpg" alt="" />
          </li>
        </ol>

        <!-- Address -->
        <iframe data-aos="fade-up" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.470408759646!2d121.45211211500937!3d25.18735398390082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442b004ff72bd93%3A0x7b2eda289263d7e!2sTamsui%20Vocational%20High%20School!5e0!3m2!1sen!2smy!4v1649740987200!5m2!1sen!2smy" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

    </div>
  </div>
</body>

<!-- Footer -->
<?php include('footer.php'); ?>

</html>