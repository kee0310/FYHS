<!-- 
  This is the footer of the school website.
  It includes the contact, social and additional info of the school.
  Embedded javascript need to be used all over the page will be define at here.
-->

<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | Footer</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <link rel="stylesheet" type="text/css" href="css/footer.css" media="screen">
  
  <style>
    a.readMore {
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 10px;
      width: fit-content;
      padding: 10px 20px;
      font-size: 16px;
      gap: 10px;
      background: black;
      margin-bottom: 20px;
  
      &:link,
      &:visited,
      &:active {
        text-decoration: none;
      }
  
      &:hover {
        text-decoration: none;
        background: #333131;
      }
    }
  
    .footer-widgets a {
      color: white;
  
      &:hover {
        color: gainsboro;
      }
    }
  </style>

</head>

<footer style="padding: 60px; padding-bottom: 0;">
  <div class="footer-widgets col-md-12" style="line-height: 1.6; color: #ffffff; ">
    <!-- Link to Other -->
    <div class="col-md-4 footer-widget twitter-widget">
      <h4>其它连接<span class="head-line"></span></h4>
      <ul>
        <li>
          <a href="https://www.facebook.com/fykulai" target="_blank">宽柔中学古来分校官方脸书专页<a>
        </li>
        <li>
          <a href="https://shopee.com.my/fyksouvenir" target="_blank">宽柔中学古来分校官方 Shopee 专页<a>
        </li>
        <li>
          <a href="https://www.foonyew.edu.my/" target="_blank" title="新山宽柔中学资讯网">新山宽柔中学资讯网<a>
        </li>
        <li>
          <a href="https://e.fyk.edu.my/" target="_blank" title="数位教学平台">数位教学平台</a>
        </li>
      </ul>
    </div>

    <!-- Other Info -->
    <div class="col-md-4 footer-widget twitter-widget">
      <div>
        <h4>2023年宽中初一新生入学试<span class="head-line"></span></h4>
        <a class="readMore" href="#" title="点击查阅" target="_blank">
          <img alt="" src="img/btn-read-more.png" style="width: 17px; height: 17px; margin-bottom: -1px;">
          <span style="padding-left: 5px; ">点击查阅</span>
        </a>
      </div>
      <div>
        <h4>宽柔中学至达城分校思源楼筹募基金<span class="head-line"></span></h4>
        <a class="readMore" href="doc/index/2019-06-11-1.pdf" title="点击查阅" target="_blank">
          <img alt="" src="img/btn-read-more.png" style="width: 17px; height: 17px; margin-bottom: -1px;">
          <span style="padding-left: 5px; ">点击查阅</span>
        </a>
      </div>
    </div>

    <!-- Contact Info -->
    <div class="col-md-3 footer-widget contact-widget">
      <h4>宽柔中学古来分校<span class="head-line"></h4>
      <ul>
        <li><span>联络电话:</span> 07-6625888</li>
        <li><span>电邮:</span> <a href="mailto:enquiry@fyk.edu.my" style="color: #fff" title="enquiry@fyk.edu.my">enquiry@fyk.edu.my</a></li>
      </ul>
    </div>

    <!-- Social Info -->
    <div class="col-md-2 footer-widget social-widget">
      <h4>Follow Us<span class="head-line"></span></h4>
      <ul class="social-icons">
        <li>
          <a class="facebook" href="https://www.facebook.com/fykulai" title="宽柔中学古来分校脸书专页" target="_blank"><i class="fa fa-facebook"></i></a>
        </li>
        <li>
          <a class="facebook" href="https://www.facebook.com/profile.php?id=100064883792607" title="宽柔中学古来分校联课活动处" target="_blank"><i class="fa fa-facebook"></i></a>
        </li>
      </ul>
    </div>
  </div>

  <!-- Copyright -->
  <div class="copyright-section" style="width: 100%">Copyright © 2022 宽柔中学古来分校</div>


  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <script type="text/javascript" src="js/script.js"></script>

  <!-- AOS initialization -->
  <script src="js/aos-init.js" type="text/javascript"></script>

  <!-- Loading Icon -->
  <div id="loader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>

</footer>

</html>