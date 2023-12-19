<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 联课团体</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

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
      style="background: url(img/subbanner03.jpg) center; background-size: cover; padding-top: 200px;">

      <div class="container">
        <div class="col-md-6">
          <h2 style="font-weight: bold; text-shadow: 3px 3px 2px rgb(0, 0, 0, 0.5), 0 0 2px rgb(0, 0, 0, 0.5)">联课团体</h2>
        </div>
        <ul class="breadcrumbs" style="text-shadow: 0px 0px 8px rgb(0, 0, 0, 1);">
          <a href="index@a38b.php">
            <li><i>首页 /&ensp;</i></li>
          </a>
          <a href="department_cocurricular.php">
            <li><i>联课活动处 /&ensp;</i></li>
          </a>
          <a href="">
            <li><i>联课团体</i></li>
          </a>
        </ul>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content" style="padding-top: 0">
      <div class="container">
        <div class="page-content">

          <?php
          include('connect.php');
          $id = $_GET['id'];
          $query = "SELECT * FROM wcocurricular where co_id='$id'";

          if ($result = $mysqli->query($query)) {
            while ($row = mysqli_fetch_array($result)) {
              ?>
              <!-- first part start-->
              <div class="row">
                <h2 class="classic-title col-md-12">
                  <!-- Coco Ch Name -->
                  <?php echo $row['co_chname']; ?> &nbsp;
                  <!-- Coco En Name -->
                  <?php echo $row['co_engname']; ?> &nbsp;

                  <!-- People Amount -->
                  <i class="fa fa-user pl-2 d-inline text-muted" style="color: #3697d9; font-size: 20pt;">
                    <?php echo $row['co_pplamount']; ?>
                  </i>
                </h2>

                <!-- Coco Description -->
                <div class="service-content" style="white-space: pre-line; padding: 0px 50px;">
                  <i class="fa fa-quote-left" style="opacity: 20%; font-size: 30px;"></i>
                  <p style="padding: 0 30px">
                    <?php
                    $text = $row['co_description'];
                    echo str_replace('&nbsp;', '&emsp;', $text);
                    ?>
                  </p>
                  <div align="right"><i class="fa fa-quote-right" style="opacity: 20%; font-size: 30px;"></i></div>
                </div>
              </div>
              <!-- first part end-->


              <!-- second part start-->
              <div class="row pricing-table" style="align-items:center; display: flex; flex-wrap: wrap">
                <!-- Coco Logo -->
                <div class="col-md-5 col-xs-12 w-100" align="center">
                  <img style="max-height: 200px; max-width: 250px;" title="<?php echo $row['co_chname']; ?>"
                    src="img/cocurricular/logo/<?php echo $row['co_logo']; ?>">
                </div>

                <!-- Logo Description -->
                <div class="col-md-7 col-sm-12 col-xs-12">
                  <h2 class="classic-title">团徽</h2>
                  <div class="service-content" style="white-space: pre-line; padding: 0px 50px;">
                    <?php
                    $text = $row['co_logodesp'];
                    echo str_replace(array('<strong>', '&nbsp;'), array('<strong style="color: firebrick;">', '&emsp;'), $text)
                      ?>
                  </div>
                </div>
              </div>
              <!-- second part end-->


              <!-- third part start-->
              <div class="row">
                <!-- Coco History -->
                <h2 class="classic-title">团史</h2>
                <div class="service-content col-md-12" style="white-space: pre-line; padding: 0px 50px;">
                  <?php
                  $text = $row['co_history'];
                  echo str_replace('&nbsp;', '&emsp;', $text)
                    ?>
                </div>
              </div>
              <!-- first part end-->

              <?php
            }
            $result->close();
          }
          $mysqli->close();
          ?>


          <!-- Garally part start -->
          <div class="row">
            <h2 class="classic-title">活动照片 / 作品</h2>

            <?php
            include('connect.php');
            $id = $_GET['id'];
            $query1 = "SELECT * FROM wcocurricularimage where coi_co_id='$id'";

            if ($result1 = $mysqli->query($query1)) {
              while ($row1 = mysqli_fetch_array($result1)) {
                ?>

                <div class="col-md-6 image-service-box">
                  <!-- Coco Image -->
                  <img class="img-thumbnail" style="height: 400px; width: 100%; object-fit: cover"
                    src="img/cocurricular/<?php echo $row1['coi_image']; ?>" alt="" />

                  <!-- Image Description -->
                  <p style="font-size: small;">
                    <?php echo $row1['coi_imagedesp']; ?>
                  </p>
                </div>
                <?php
              }
              $result1->close();
            }
            $mysqli->close();
            ?>
          </div>
          <!-- Garally part end -->
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