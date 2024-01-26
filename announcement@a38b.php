<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <title>宽柔中学古来分校 | 活动/通知/公告 Announcement</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <style>
    .post-row {
      max-height: 170px;
      background-color: mistyrose;
      overflow: hidden;
    }

    .post-row:hover {
      -webkit-filter: brightness(90%);
      transition: all .3s ease;
    }

    .post-title {
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
    }

    .content p {
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      font-size: smaller;
    }

    .content p br {
      display: none;
    }

    .post-image {
      z-index: 2000;
      overflow: hidden;
    }

    .post-image img {
      object-fit: cover;
      overflow: hidden;
      height: 100%;
      width: 100%;
      object-position: 50% 0%;
    }

    .searchbar {
      border-radius: 30px;
      border: 1px solid rgba(0, 0, 0, 0.2);
      font-family: Arial, Helvetica, sans-serif;
      font-size: 16px;
      padding: 5px 10px;
      width: 100%;
    }

    form button {
      border: none;
      background: none;
    }

    input[type=radio] {
      visibility: hidden;
      display: contents;
    }

    input[type=radio]+label {
      display: inline-block;
      margin: 4px;
      padding: 2px 12px;
      outline: solid 1px;
      border-radius: 30px;
      cursor: pointer;
      font-size: 16px;
    }

    input[type=radio]:checked+label {
      outline-width: 2px;
    }
  </style>

</head>

<body>

  <!-- Container -->
  <div id="container">

    <!-- Header -->
    <?php include('header.php') ?>


    <!-- Start Page Banner -->
    <div class="page-banner" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 50%, rgba(0,0,0,1)), url(img/subbanner19.webp) center; background-size: cover;">
      <div class="container">
        <div class="col-md-6">
          <h2>通告</h2>
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
              <li><i>通知</i></li>
            </a>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="page-content row">

          <div class="latest-posts">
            <h4 class="classic-title" align="center"><i class='fa fa-bullhorn' style="transform: rotate(-10deg);"></i>
              活动/通知/公告</h4>

            <!-- Search bar  -->
            <?php
            include('connect.php');
            $search = NULL;
            $dept = NULL;
            if (isset($_POST['searchbtn'])) {
              $search = $_POST['search'];
            }
            if (isset($_POST['selectbtn'])) {
              $search = $_POST['search'];
              $dept = $_POST['dept'];
            }
            ?>
            <form action="announcement@a38b.php#content" method="post" onclick="preventResubmitPrompt()" style="display:grid; margin-bottom: 20px;" align="center">
              <div class="col-md-9 col-xs-12" style="margin: auto">
                <input class="searchbar" type="text" placeholder="search" name="search" autocomplete="off" value="<?php echo $search ?>">
                <div>
                  <button type="summit" name='searchbtn'>
                    <i class="fa fa-search" style="position: absolute; right: 30px; font-size: 20px; color: grey; margin-top: -50px;"></i>
                  </button>
                </div>
              </div>
              <div>
                <button name='selectbtn' id="refresh">
                  <input type="radio" id="all" name="dept" value="">
                  <label for="all">ALL</label>
                  <input type="radio" id="校长室" name="dept" value="校长室">
                  <label for="校长室">校长室</label>
                  <input type="radio" id="教务处" name="dept" value="教务处">
                  <label for="教务处">教务处</label>
                  <input type="radio" id="训导处" name="dept" value="训导处">
                  <label for="训导处">训导处</label>
                  <input type="radio" id="联课活动处" name="dept" value="联课活动处">
                  <label for="联课活动处">联课活动处</label>
                  <input type="radio" id="事务处" name="dept" value="事务处">
                  <label for="事务处">事务处</label>
                </button>
              </div>
            </form>

            <!-- Display post -->
            <?php
            include('connect.php');
            $query = "SELECT * FROM wannouncement WHERE ((announcement_title LIKE '%$search%') OR (announcement_content LIKE '%$search%')) AND (announcement_dept LIKE '%$dept%') ORDER BY announcement_date DESC";
            if ($result = $mysqli->query($query)) {
              while ($row = mysqli_fetch_array($result)) {
                $date = strtotime($row['announcement_date']);
                $id = $row['announcement_id']
            ?>

                <div style="display: grid;">
                  <div class="post-row item col-md-9" onclick="window.open('announcement1@a38b.php?id=<?php echo $row['announcement_id'] ?>', '_self')" style="background: snow; padding: 0; margin: 10px auto; border: 1px solid mistyrose; border-radius: 15px; display: flex; cursor: pointer;">

                    <div class="col-md-3 col-bg-3 post-image " style="min-width: 30%; padding: 0; margin: 0;">
                      <?php
                      include('connect.php');
                      $x = mysqli_query($mysqli, "SELECT * FROM wannouncement_img where announcement_id='$id' ORDER BY img_id DESC LIMIT 1");
                      while ($row1 = mysqli_fetch_array($x)) {
                        echo '<img src="img/announcement/' . $row1['img_name'] . '" alt="">';
                      }
                      ?>
                    </div>

                    <div style="min-width: 70%; padding: 10px 20px;">
                      <div class="post-title">
                        <b>
                          <?php echo $row['announcement_title'] ?>
                        </b>
                      </div>

                      <div style="font-size: smaller; padding: 5px;">
                        <div>
                          <i class="fa fa-building"></i>
                          <?php echo $row['announcement_dept']; ?>
                        </div>
                        <div>
                          <i class="fa fa-calendar"></i>
                          <?php echo $row['announcement_date']; ?>&emsp;
                        </div>
                      </div>

                      <div class="content">
                        <p>
                          <?php echo $row['announcement_content']; ?>
                        </p>
                      </div>
                    </div>
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

          </div>
          <!-- End Recent Posts Carousel -->
        </div>

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

  <script>
    function preventResubmitPrompt() {
      if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
      }
    }
  </script>

</body>

</html>