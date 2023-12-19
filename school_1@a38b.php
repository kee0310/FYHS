<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 校园风貌 | 位置</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="icon" href="img/favicon.png" sizes="16x16" type="image/png">

  <style type="text/css">
    .material-icons {
      Font-size: 18px;
      color: #f9a61a;
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
      style="background: linear-gradient(to bottom, rgba(0,0,0,0) 50%, rgba(0,0,0,1)), url(img/subbanner01.jpg) center; background-size: cover;">
      <div class="container">
        <div class="col-md-6">
          <h2>校园风貌</h2>
        </div>
        <div class="col-md-6">
          <ul class="breadcrumbs">
            <a href="index@a38b.php">
              <li><i>首页 /&ensp;</i></li>
            </a>
            <a href="">
              <li><i>校园风貌 /&ensp;</i></li>
            </a>
            <a href="">
              <li><i>位置</i></li>
            </a>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="page-content">

          <!-- first part start-->
          <div class="row">
            <div class="col-md-12">
              <h2 class="classic-title">位置</h2>

              <!-- FY Logo -->
              <div class="col-md-4 service-box service-icon-left-more">
                <div class="service-content" align="center">
                  <img src="img/fylogo1.png" style="width:300px; height:auto">
                </div>
              </div>

              <!-- Address -->
              <div class="col-md-4 service-box service-icon-left-more">
                <div class="service-content">
                  <h4 style="font-family: 楷体, KaiTi; font-size: 12pt;line-height: 1.6;">
                    宽柔中学（Foon Yew High School）是马来西亚一所由华社出资创办的华文中学。</br>
                    1591, Persiaran Indahpura 6, Indahpura Iris Park, 81000 Kulai, Johor
                  </h4>
                </div>
              </div>

              <!-- Contact Table -->
              <div class="col-md-4 service-box service-icon-left-more">
                <table class="service-content">
                  <tbody style="font-family: 楷体, KaiTi; font-size: 14pt;line-height: 1.6;">
                    <tr>
                      <td><i class="material-icons phone">phone</i></td>
                      <td>
                        <h4>&emsp;07-6625888</h4>
                      </td>
                    </tr>
                    <tr>
                      <td><i class="material-icons print">print</i></td>
                      <td>
                        <h4>&emsp;07-6637733</h4>
                      </td>
                    </tr>
                    <tr>
                      <td><i class="material-icons mail">mail</i></td>
                      <td>
                        <h4>&emsp;enquiry@fyk.edu.my</h4>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- first part end-->


          <!-- map -->
          <div class="row">
            <div class="col-md-12">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127621.06673379106!2d103.51414644314121!3d1.6528300464318553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da7742c225e2ef%3A0xd13141fef95f00a1!2sFoon+Yew+High+School+-+Kulai!5e0!3m2!1sen!2smy!4v1532707831627"
                style="width: 100%; height:550px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>

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