<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 最新消息</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="
    <?php
    include('connect.php');

    $id = $_GET['id'];

    $query = "SELECT * FROM wnews where news_id='$id'";
    if ($result = $mysqli->query($query)) {

      while ($row = mysqli_fetch_array($result)) {
        echo $row['news_title'];
      }
      $result->close();
    }
    $mysqli->close();
    ?> 
  ">

  <style>
    .link li a {
      color: #30a5ff;
    }

    .link li a:hover {
      color: black;
    }

    .link {
      display: flex;
      padding: 20px;
    }

    .content {
      background: white;
      padding: 20px;
      border: 1px solid mistyrose;
      border-radius: 15px;
    }

    .content a {
      color: #30a5ff;
    }

    .post-row {
      height: 120px;
    }

    .post-row:hover {
      filter: brightness(80%);
      transition: all .3s ease;
    }

    .post-title {
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
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
  </style>

</head>

<body>

  <!-- Container -->
  <div id="container">

    <!-- Start Header -->
    <?php
    $header = file_get_contents('header.php');
    echo $header;

    include('connect.php');
    $id = $_GET['id'];
    $query = "SELECT * FROM wannouncement where announcement_id='$id'";
    if ($result = $mysqli->query($query)) {
      while ($row = mysqli_fetch_array($result)) {
        $date = strtotime($row['announcement_date']);
        ?>

        <!-- Start Content -->
        <div id="content">
          <div class="container">

            <ul class="link">
              <br>
              <li>
                <i class="fa fa-home" style="color: black;"></i>
                <a href="index@a38b.php">首页</a>
                &ensp;<i class="fa fa-angle-double-right" style="color: black;"></i>&ensp;
              </li>
              <li>
                <a href="announcement@a38b.php">活动 / 通知 / 公告</a>
                &ensp;<i class="fa fa-angle-double-right" style="color: black;"></i>&ensp;
              </li>
              <li>
                <?php echo $row['announcement_title']; ?>
              </li>
            </ul>

            <div class="page-content">

              <!-- Display Post -->
              <div class="col-md-8 service-box service-icon-left-more">
                <h2 class="classic-title">
                  <?php echo $row['announcement_title']; ?>
                </h2>

                <div>
                  <i class="fa fa-calendar"></i>
                  <?php echo $row['announcement_date']; ?>&emsp;
                  <i class="fa fa-building"></i>
                  <?php echo $row['announcement_dept']; ?>

                  <div class="content"
                    style="background: white; padding: 20px; border: 1px solid mistyrose; border-radius: 15px">
                    <?php echo $row['announcement_content']; ?>

                    <?php
                    include('connect.php');
                    $result = mysqli_query($mysqli, "SELECT * FROM wannouncement_img where announcement_id='$id' ORDER BY img_id DESC");
                    while ($row = mysqli_fetch_array($result)) {
                      echo '<img width="100%" src="img/announcement/' . $row['img_name'] . '" alt="">';
                    }
                    ?>
                  </div><br>

                  <!-- Whatsapp share link -->
                  <?php
                  if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
                    $url = "https://";
                  } else {
                    $url = "http://";  // Append the host(domain name, ip) to the URL.   
                  }
                  $url .= $_SERVER['HTTP_HOST'];
                  $url .= $_SERVER['REQUEST_URI'];  // Append the requested resource location to the URL   
                  echo '<a href="whatsapp://send?text=' . $url . '" data-action="share/whatsapp/share">Share via Whatsapp</a>';
                  ?>
                </div>
              </div>

              <div class="col-md-4">
                <!-- Other Announcement -->
                <div class="latest-posts"
                  style="background: url(img/subbanner19.webp) center ; background-size: cover; padding: 20px 10px; box-shadow: inset 0 0 10px 500px rgba(0,0,0,0.1);">
                  <div style="font-size: x-large; text-align: center;">
                    <b>其他活动/通知/公告</b>
                  </div>

                  <?php
                  include('connect.php');
                  $query = "SELECT * FROM wannouncement WHERE announcement_id!='$id' ORDER BY announcement_date DESC LIMIT 3";
                  if ($result = $mysqli->query($query)) {
                    while ($row = mysqli_fetch_array($result)) {
                      $date = strtotime($row['announcement_date']);
                      $id = $row['announcement_id']
                        ?>

                      <div class="post-row item "
                        onclick="window.open('announcement1@a38b.php?id=<?php echo $row['announcement_id'] ?>', '_self')"
                        style="background: rgba(255,255,255,0.7); padding: 0; margin: 10px; display: flex; cursor: pointer; overflow: hidden; outline: rgba(255, 166, 0, 0.3) 2px solid;">
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
                        </div>
                      </div>
                      <?php
                    }
                  }
                  ?>
                </div>

                <!-- Other News -->
                <div class="latest-posts"
                  style="background: url(img/subbanner08.webp) center ; background-size: cover; padding: 20px 10px; box-shadow: inset 0 0 10px 500px rgba(0,0,0,0.1);">
                  <div style="font-size: x-large; text-align: center;">
                    <b>其他消息</b>
                  </div>

                  <?php
                  include('connect.php');
                  $query = "SELECT * FROM wnews ORDER BY news_date DESC LIMIT 3";
                  if ($result = $mysqli->query($query)) {
                    while ($row = mysqli_fetch_array($result)) {
                      $date = strtotime($row['news_date']);
                      $id = $row['news_id']
                        ?>

                      <div class="post-row item "
                        onclick="window.open('news1@a38b.php?id=<?php echo $row['news_id'] ?>', '_self')"
                        style="background: rgba(255,255,255,0.7); padding: 0; margin: 10px; display: flex; cursor: pointer; overflow: hidden; outline: rgba(0, 0, 0, 0.1) 2px solid;">
                        <div class="col-md-3 col-bg-3 post-image " style="min-width: 30%; padding: 0; margin: 0;">
                          <?php
                          include('connect.php');
                          $x = mysqli_query($mysqli, "SELECT * FROM wnews_img where news_id='$id' ORDER BY img_id DESC LIMIT 1");
                          while ($row1 = mysqli_fetch_array($x)) {
                            echo '<img src="img/news/' . $row1['img_name'] . '" alt="">';
                          }
                          ?>
                        </div>

                        <div style="min-width: 70%; padding: 10px 20px;">
                          <div class="post-title">
                            <b>
                              <?php echo $row['news_title'] ?>
                            </b>
                          </div>
                          <div style="font-size: smaller; padding: 5px;">
                            <div>
                              <i class="fa fa-building"></i>
                              <?php echo $row['news_dept']; ?>
                            </div>
                            <div>
                              <i class="fa fa-calendar"></i>
                              <?php echo $row['news_date']; ?>&emsp;
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php
                    }
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End content -->

        <?php
      }

      /* free result set */
      $result->close();
    }

    /* close connection */
    $mysqli->close();

    // Start Footer
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