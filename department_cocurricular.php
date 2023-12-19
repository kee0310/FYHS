<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 联课活动处 Co-curricular Department</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <style>
    .box-name {
      border-radius: 15px 15px 0px 0px;
      background-image: linear-gradient(maroon, crimson, maroon);
      text-shadow: 3px 3px 2px rgb(0, 0, 0, 0.5);
      letter-spacing: 5px;
      text-align: center;
      padding: 10px;
      color: azure;
      font-family: sans-serif;
      font-weight: bold;
    }

    .item {
      display: grid;
      margin: 10px 0;
      padding: 10px 0;
      cursor: pointer;
      opacity: 0;
    }

    .item:hover {
      border-radius: 15px;
      box-shadow: 1px 3px 8px rgb(0, 0, 0, 0.3);
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
      style="background: linear-gradient(to bottom, rgba(0,0,0,0) 50%, rgba(0,0,0,1)), url(img/organization/org04.jpg) center; background-size: cover;">
      <div class="container">
        <div class="col-md-6">
          <h2>联课活动处</h2>
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
              <li><i>联课活动处</i></li>
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
          <div class="row">

            <h2 class="classic-title">联课团体</h2>
            <p>
              本校联课活动丰富多彩，学生可按兴趣选择团体，从中发掘自身潜能，并通过团体生活学习独立思考、沟通合作、富负责感的健全品格。目前共设立
              <span style="color: red">65个联课团体</span>，并将随学生需求增设更多元化的团体活动。
            </p>

            <div style="display: grid;" align="center">
              <?php
              include('connect.php');
              $query = "SELECT DISTINCT co_categories FROM wcocurricular";
              if ($result = $mysqli->query($query)) {
                while ($row = mysqli_fetch_array($result)) {
                  $co_categories = $row['co_categories'];
                  ?>
                  <div class="col-md-10 col-sm-12" style="margin: 30px auto; opacity: 0; " data-animation="fadeInUp"
                    data-animation-delay="01">
                    <div class="box-name">
                      <?php echo $row['co_categories']; ?>
                    </div>
                    <div
                      style="display: flex; flex-wrap: wrap; background: white; border-radius: 0px 0px 15px 15px; border: 1px gainsboro solid; padding: 10px; font-size: smaller;">

                      <?php
                      include('connect.php');
                      $query1 = "SELECT * FROM wcocurricular WHERE co_categories = '$co_categories'";
                      if ($result1 = $mysqli->query($query1)) {
                        while ($row1 = mysqli_fetch_array($result1)) {
                          ?>

                          <div class="item col-md-2 col-sm-3 col-xs-6" align="center" data-animation="fadeInRight"
                            data-animation-delay="02"
                            onclick="window.open('co-curricular2@a38b.php?id=<?php echo $row1['co_id']; ?>', '_self')">
                            <div class="image"
                              style="height: 100px; display: flex; align-items: center; justify-content: center; padding-bottom: 10px;">
                              <img class="" style="max-height: 100%; max-width: clamp(50px, fit-content, 150px);"
                                src="img/cocurricular/logo/<?php echo $row1['co_logo']; ?>" alt="&ensp;none" />
                            </div>
                            <?php echo $row1['co_chname']; ?>
                          </div>

                          <?php
                        }
                        $result1->close();
                      }
                      ?>

                    </div>
                  </div>

                  <?php
                }
                $result->close();
              }
              $mysqli->close();
              ?>

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