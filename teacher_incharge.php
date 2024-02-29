<!-- 
  This page are use to display the teachers in-charge and group by its subject.
-->

<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 教师风采 | 科主任</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <link rel="stylesheet" type="text/css" href="css/teamMember.css" media="screen">

  <!-- Header -->
  <?php
  include('header.php');
  include('connect.php');
  ?>

  <style>
    .members {
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
      margin: 10px 25px;
    }
  </style>

</head>

<body>
  <!-- Page Banner -->
  <div class="page-banner" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 50%, rgba(0,0,0,1)), url(img/subbanner13.jpg) center; background-size: cover;">
    <div class="container">
      <div class="col-md-6">
        <h2>科主任</h2>
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
            <li><i>科主任</i></li>
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
        $subject = array(
          "华文", "国文", "英文", "数学", "历史", "地理", "化学", "物理",
          "生物", "商科", "餐饮管理", "电子电机", "电脑", "美术", "科学", "体育"
        );
        for ($x = 0; $x < count($subject); $x++) {
        ?>

          <!-- Subject Box-->
          <div class="col-md-6">
            <h2 class="classic-title"><?= $subject[$x] ?>科主任</h2>

            <!-- Teachers In-charge with Different Subject -->
            <div class="members">
              <?php
              $query = mysqli_query($mysqli, "SELECT * FROM wteacher WHERE incharge LIKE '%$subject[$x]%'");
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

        <?php
        }
        ?>

      </div>
    </div>
  </div>
</body>

<!-- Footer -->
<?php include('footer.php'); ?>

</html>