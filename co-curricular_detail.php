<!-- 
  This page are use to display the co-curricular group's details from 'department_cocurricular.php'.
-->

<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 联课团体</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!-- Header -->
  <?php
  include('header.php');
  include('connect.php');
  ?>

</head>

<body>
  <!-- Page Banner -->
  <div class="page-banner" style="background: url(img/subbanner03.jpg) center; background-size: cover; padding-top: 200px;">

    <div class="container">
      <div class="col-md-6">
        <h2 style="font-weight: bold; text-shadow: 3px 3px 2px rgb(0, 0, 0, 0.5), 0 0 2px rgb(0, 0, 0, 0.5)">联课团体</h2>
      </div>
      <ul class="breadcrumbs" style="text-shadow: 0px 0px 8px rgb(0, 0, 0, 1);">
        <a href="index.php">
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


  <!-- Content -->
  <div id="content" style="padding-top: 0">
    <div class="container">
      <div class="page-content">

        <?php
        $id = $_GET['id'];
        $query = mysqli_query($mysqli, "SELECT * FROM wcocurricular where co_id='$id'");
        $row = mysqli_fetch_array($query)
        ?>

        <!-- Overview -->
        <div class="row">
          <h2 class="classic-title col-md-12">
            <?= $row['co_chname']; ?> &nbsp;
            <?= $row['co_engname']; ?> &nbsp;
            <i class="fa fa-user pl-2 d-inline text-muted" style="color: #3697d9; font-size: 20pt;">
              <?= $row['co_pplamount']; ?>
            </i>
          </h2>

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


        <!-- Logo -->
        <div class="row pricing-table" style="align-items:center; display: flex; flex-wrap: wrap">
          <div class="col-md-5 col-xs-12 w-100" align="center">
            <img style="max-height: 200px; max-width: 250px;" title="<?= $row['co_chname']; ?>" src="img/cocurricular/logo/<?= $row['co_logo']; ?>">
          </div>

          <div class="col-md-7 col-sm-12 col-xs-12">
            <h2 class="classic-title">团徽</h2>
            <div class="service-content" style="white-space: pre-line; padding: 0px 50px;">
              <?php
              $desp = $row['co_logodesp'];
              echo str_replace(array('<strong>', '&nbsp;'), array('<strong style="color: firebrick;">', '&emsp;'), $desp)
              ?>
            </div>
          </div>
        </div>


        <!-- History -->
        <div class="row">
          <h2 class="classic-title">团史</h2>
          <div class="service-content col-md-12" style="white-space: pre-line; padding: 0px 50px;">
            <?php
            $history = $row['co_history'];
            echo str_replace('&nbsp;', '&emsp;', $history)
            ?>
          </div>
        </div>

        
        <!-- Gallery -->
        <div class="row">
          <h2 class="classic-title">活动照片 / 作品</h2>

          <?php
          $query1 = mysqli_query($mysqli, "SELECT * FROM wcocurricularimage where coi_co_id='$id'");
          while ($row1 = mysqli_fetch_array($query1)) {
          ?>

            <div class="col-md-6 image-service-box">
              <img class="img-thumbnail" style="height: 400px; width: 100%; object-fit: cover" src="img/cocurricular/<?= $row1['coi_image']; ?>" alt="" />
              <p style="font-size: small;"><?= $row1['coi_imagedesp']; ?></p>
            </div>

          <?php
          }
          ?>

        </div>

      </div>
    </div>
  </div>
</body>

<!-- Footer -->
<?php include('footer.php'); ?>

</html>