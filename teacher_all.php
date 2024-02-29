<!-- 
  This page are use to display all teachers and group by its subject.
-->

<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 教师风采 | 各科老师</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <link rel="stylesheet" type="text/css" href="css/teamMember.css" media="screen">

  <!-- Header -->
  <?php
  include('header.php');
  include('connect.php');
  ?>

  <style>
    .section {
      display: none;
      overflow: none;

      &:first-child {
        display: block;
      }
    }

    .members {
      display: flex;
      flex-wrap: wrap;
      gap: 50px;
      text-align: center;
      justify-content: center;
      padding-bottom: 80px;
    }

    .switcher input[type='radio'] {
      display: none;

      &~label {
        border: none;
        text-align: center;
        text-decoration: none;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        width: 100%;
        font-size: 14pt;
        line-height: 2.6;
        color: black;

        &:hover {
          background-color: #46bbec;
        }
      }

      &:checked+label {
        background-color: #3697d9;
        color: white;
      }
    }
  </style>
</head>

<body>
  <!-- Page Banner -->
  <div class="page-banner" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 50%, rgba(0,0,0,1)), url(img/subbanner13.jpg) center; background-size: cover;">
    <div class="container">
      <div class="col-md-6">
        <h2>各科老师</h2>
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
            <li><i>各科老师</i></li>
          </a>
        </ul>
      </div>
    </div>
  </div>


  <!-- Content -->
  <div id="content">
    <div class="container">

      <!-- Teachers Display Box -->
      <div class="page-content col-md-9">
        <?php
        $subject = array(
          "华文", "国文", "英文", "数学", "历史", "地理", "化学", "物理",
          "生物", "商科", "餐饮管理", "电子电机", "电脑", "美术", "科学", "体育"
        );
        for ($x = 0; $x < count($subject); $x++) {
        ?>

          <!-- Section for Multiple Different Subject -->
          <div class="section <?= $subject[$x] ?>">
            <h2 class="classic-title"><?= $subject[$x] ?>导师</h2>

            <!-- All Teachers in-charge -->
            <div class="members">
              <?php
              $query = mysqli_query($mysqli, "SELECT * FROM wteacher WHERE incharge LIKE '%$subject[$x]%'");
              while ($row = mysqli_fetch_array($query)) {
              ?>

                <div class="team-member">
                  <div class="member-photo">
                    <img alt="" src="img/organization/upload/<?= $row['teacher_name'] ?>.jpg" />
                    <div class="member-name col-md-12"><?= $row['teacher_name'] ?><span><?= $row['incharge'] ?></span></div>
                  </div>
                </div>

              <?php
              }
              ?>
            </div>

            <!-- All Normal Teachers -->
            <div class="members">
              <?php
              $query = mysqli_query($mysqli, "SELECT * FROM wteacher WHERE (`subject` LIKE '%$subject[$x]%' AND `incharge` NOT LIKE '%$subject[$x]%') ORDER BY incharge DESC");
              while ($row = mysqli_fetch_array($query)) {
              ?>

                <div class="team-member">
                  <div class="member-photo">
                    <img alt="" src="img/organization/upload/<?= $row['teacher_name'] ?>.jpg" />
                    <div class="member-name col-md-12"><?= $row['teacher_name'] ?><span><?= $row['incharge'] ?></span></div>
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


      <!-- Subject Switcher Box -->
      <div class="page-content col-md-3">
        <div class="switcher" onchange=switcher() style="width: 100%; padding:15px; display: block;">

          <?php
          for ($x = 0; $x < count($subject); $x++) {
          ?>

            <input class="subject" type="radio" id="<?= $subject[$x] ?>" name="year" />
            <label for="<?= $subject[$x] ?>"><?= $subject[$x] ?> <i class="fa fa-arrow-circle-right"></i></label>

          <?php
          }
          ?>

        </div>
      </div>

    </div>
  </div>


  <script>
    let subject = $('.subject');

    // check first value for switcher
    if (!subject.filter(':checked').length) {
      subject[0].checked = true;
    }

    function switcher() {
      let departmentList = [
        "华文", "国文", "英文", "数学", "历史", "地理", "化学", "物理",
        "生物", "商科", "餐饮管理", "电子电机", "电脑", "美术", "科学", "体育"
      ];

      // hide all section
      for (let i = 0; i < departmentList.length; i++) {
        document.querySelector("." + departmentList[i]).style.display = "none";
        // display selected section 
        if (document.getElementById(departmentList[i]).checked) {
          document.querySelector("." + departmentList[i]).style.display = "block";
        }
      }
    }
  </script>
</body>

<!-- Footer -->
<?php include('footer.php'); ?>

</html>