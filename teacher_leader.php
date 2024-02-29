<!-- 
  This page are use to display the teachers who are leader in some specific area.
-->

<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 教师风采 | 组长</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <link rel="stylesheet" type="text/css" href="css/teamMember.css" media="screen">

  <!-- Header -->
  <?php
  include('header.php');
  include('connect.php');
  ?>

  <style>
    .col-md-6 .row,
    .col-md-12 .row {
      padding-bottom: 50px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .classic-title {
      font-size: 27px;
      width: fit-content;
    }

    .team-member {
      margin: 0 25px;
    }
  </style>

</head>

<body>
  <!-- Page Banner -->
  <div class="page-banner" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 50%, rgba(0,0,0,1)), url(img/subbanner13.jpg) center; background-size: cover;">
    <div class="container">
      <div class="col-md-6">
        <h2>组长</h2>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumbs">
          <a href="index.php">
            <li><i>首页 /&ensp;</i></li>
          </a>
          <a href="">
            <li><i>教师风采 /&ensp;</i></li>
          </a>
          <a href="">
            <li><i>组长</i></li>
          </a>
        </ul>
      </div>
    </div>
  </div>


  <!-- Content -->
  <div id="content">
    <div class="container">
      <div class="page-content" align="center">

        <?php
        $leader = array(
          "SPM科学科组长",
          "SPM簿记科组长",
          "SPM华文科口试组长",
          "SPM-Sejarah科组长",
          "初中统考历史专题作业组长",
          "数位教学正组长"
        );
        for ($x = 0; $x < count($leader); $x++) {
        ?>

          <!-- Title Box -->
          <div class="col-md-6">
            <h2 class="classic-title"><?= $leader[$x] ?></h2>

            <div class="row">
              <?php
              $query = mysqli_query($mysqli, "SELECT * FROM wteacher WHERE leader = '$leader[$x]'");
              while ($row = mysqli_fetch_array($query)) {
              ?>

                <!-- Teacher's Leaders with Different Title -->
                <div class="team-member">
                  <div class="member-photo">
                    <img alt="" src="img/organization/upload/<?= $row['teacher_name'] ?>.jpg" />
                    <div class="member-name"><?= $row['teacher_name'] ?></div>
                  </div>
                </div>

              <?php
              }
              ?>
            </div>
          </div>

        <?php
        }
        ?>

        <!-- Vice Leader Box 1-->
        <div class="col-md-12">
          <h2 class="classic-title">数位教学副组长</h2>

          <div class="row">
            <?php
            $query = mysqli_query($mysqli, "SELECT * FROM wteacher WHERE leader = '数位教学副组长'");
            while ($row = mysqli_fetch_array($query)) {
            ?>

              <div class="team-member">
                <div class="member-photo">
                  <img alt="" src="img/organization/upload/<?= $row['teacher_name'] ?>.jpg" />
                  <div class="member-name"><?= $row['teacher_name'] ?></div>
                </div>
              </div>

            <?php
            }
            ?>
          </div>
        </div>

      </div>
    </div>
  </div>
</body>

<!-- Footer -->
<?php include('footer.php'); ?>

</html>