<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 校园刊物</title>

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
      style="background: linear-gradient(to bottom, rgba(0,0,0,0) 50%, rgba(0,0,0,1)), url(img/resource/banner1.jpg) center; background-size: cover;">
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
              <?php
              include('connect.php');

              $query = "SELECT * FROM wresource1 ORDER BY resource1_id DESC";

              if ($result = $mysqli->query($query)) {

                while ($row = mysqli_fetch_array($result)) {

                  echo '<!-- Start resource1 -->';
                  echo '<div class="col-md-3 col-sm-6 col-xs-12">';
                  echo '<div class="team-member">';
                  echo '<!-- Memebr Photo, Name & Position -->';
                  echo '<div class="member-photo" align="center">';
                  echo '<a href="doc/resource1/' . $row['resource1_file'] . '" target="_blank" title="' . $row['resource1_title'] . ' "><img alt="" src="img/resource/resource1.jpg" style="width: 70% ; height: auto"/></a>';
                  echo '<div class="member-name">' . $row['resource1_title'] . ' </div>';

                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
                  echo '<!-- End resource1 -->';
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
          <!-- first part end-->

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