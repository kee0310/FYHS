<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 校园刊物</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>

<style>
  .document {
    background: salmon;
    border: 1px salmon solid;
    color: white;
    cursor: pointer;
    display: grid;
    font-family: kaiti;
    font-size: 20px;
    margin: 20px;
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
</style>

<body>

  <!-- Container -->
  <div id="container">

    <!-- Header -->
    <?php include('header.php') ?>


    <!-- Start Page Banner -->
    <div class="page-banner" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 50%, rgba(0,0,0,1)), url(img/subbanner20.jpg) center; background-size: cover;">
      <div class="container">
        <div class="col-md-6">
          <h2>校园刊物</h2>
        </div>
        <div class="col-md-6">
          <ul class="breadcrumbs">
            <a href="index@a38b.php">
              <li><i>首页 /&ensp;</i></li>
            </a>
            <a href="other_1@a38b.php">
              <li><i>其他 /&ensp;</i></li>
            </a>
            <a href="">
              <li><i>校园刊物</i></li>
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

              <!-- Start resource1 -->
              <div style="display: flex; flex-wrap: wrap; justify-content: center;">

                <?php
                include('connect.php');
                $query = "SELECT * FROM wresource1 ORDER BY resource1_id DESC";
                if ($result = $mysqli->query($query)) {
                  while ($row = mysqli_fetch_array($result)) {
                ?>

                    <!-- First document -->
                    <div class="document" onclick="window.open('doc/resource1/<?php echo $row['resource1_file'] ?>', '_blank')" data-animation="fadeInUp" data-animation-delay="01">
                      <div class="content" style="margin: -20px; padding-left: 15px;">
                        <iframe src="doc/resource1/<?php echo $row['resource1_file'] ?>" style=" pointer-events: none; width: 100%; height: 200px;"></iframe>
                      </div>
                      <p style="margin-top: 25px; padding: 0 16px">
                        <?php echo $row['resource1_title'] ?>
                      </p>
                      <div class="pdfIcon">
                        <i class="fa fa-file-pdf-o"></i>
                      </div>
                    </div>

                <?php
                  }
                  /* free result set */
                  $result->close();
                }

                /* close connection */
                $mysqli->close();
                ?>
                <!-- End resource1 -->
              </div>

            </div>
          </div>
          <!-- first part end-->

        </div>
      </div>
    </div>
    <!-- End content -->


    <!-- Footer -->
    <?php include('footer.php'); ?>

  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>