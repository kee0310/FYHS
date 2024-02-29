<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 最新消息</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <?php
  include('header.php'); // Header
  include('connect.php');
  ?>

  <style>
    .link {
      display: flex;
      padding: 20px;

      & li a {
        color: #30a5ff;

        &:hover {
          color: black;
        }
      }
    }

    .content {
      background: white;
      padding: 20px;
      border: 1px solid mistyrose;
      border-radius: 15px;

      & a {
        color: #30a5ff;
      }
    }

    .latest-posts {
      background-size: cover;
      padding: 20px 10px;
      box-shadow: inset 0 0 10px 500px rgba(255, 255, 255, 0.6);

      & .post-row {
        height: 120px;

        &:hover {
          filter: brightness(90%);
          transition: all .3s ease;
        }

        & .post-title {
          overflow: hidden;
          text-overflow: ellipsis;
          display: -webkit-box;
          -webkit-line-clamp: 2;
          -webkit-box-orient: vertical;
        }

        & .post-image {
          z-index: 2000;
          overflow: hidden;

          & img {
            object-fit: cover;
            overflow: hidden;
            height: 100%;
            width: 100%;
            object-position: 50% 0%;
          }
        }
      }
    }
  </style>

</head>

<body>
  <!-- Content -->
  <div id="content">
    <div class="container">

      <?php
      $id = $_GET['id'];
      $query = mysqli_query($mysqli, "SELECT * FROM wannouncement where announcement_id='$id'");
      $row = mysqli_fetch_array($query);
      $date = strtotime($row['announcement_date']);
      ?>

      <!-- Breadcrumbs -->
      <ul class="link">
        <li>
          <i class="fa fa-home" style="color: black;"></i>
          <a href="index.php">首页</a>&ensp;
          <i class="fa fa-angle-double-right" style="color: black;"></i>&ensp;
        </li>
        <li>
          <a href="news_all.php">活动/通知/公告</a>&ensp;
          <i class="fa fa-angle-double-right" style="color: black;"></i>&ensp;
        </li>
        <li>
          <?= $row['announcement_title']; ?>
        </li>
      </ul>


      <!-- Display Post -->
      <div class="col-md-8">
        <h2 class="classic-title"><?= $row['announcement_title']; ?></h2>

        <!-- Display Date and Department -->
        <div style="padding: 10px 0">
          <i class="fa fa-calendar"></i>
          <?= $row['announcement_date']; ?>&emsp;
          <i class="fa fa-building"></i>
          <?= $row['announcement_dept']; ?>
        </div>

        <!-- Display Post Content -->
        <div class="content" style="background: white; padding: 20px; border: 1px solid mistyrose; border-radius: 15px">
          <?= $row['announcement_content']; ?>

          <!-- Display Image -->
          <?php
          $result = mysqli_query($mysqli, "SELECT * FROM wannouncement_img where announcement_id='$id' ORDER BY img_name");
          while ($row = mysqli_fetch_array($result)) {
            echo '<img width="100%" src="img/announcement/' . $row['img_name'] . '" alt="">';
          }
          ?>
        </div><br>
      </div>

      <div class="col-md-4">
        <!-- Other Announcement -->
        <div class="latest-posts" style="background: url(img/subbanner19.webp) center;">
          <div align="center"><b style="font-size: large;">其他活动/通知/公告</b></div>

          <?php
          $query = mysqli_query($mysqli, "SELECT * FROM wannouncement WHERE announcement_id!='$id' ORDER BY announcement_date DESC LIMIT 3");
          while ($row = mysqli_fetch_array($query)) {
            $date = strtotime($row['announcement_date']);
            $id = $row['announcement_id']
          ?>

            <div class="post-row item " onclick="window.open('announcement_detail.php?id=<?php echo $row['announcement_id'] ?>', '_self')" style="background: rgba(255,255,255,0.7); padding: 0; margin: 10px; display: flex; cursor: pointer; overflow: hidden; outline: rgba(255, 166, 0, 0.3) 2px solid;">
              <!-- Other Announcement Image -->
              <div class="col-md-3 col-bg-3 post-image " style="min-width: 30%; padding: 0; margin: 0;">
                <?php
                $img = mysqli_query($mysqli, "SELECT * FROM wannouncement_img where announcement_id='$id' ORDER BY img_id DESC LIMIT 1");
                while ($row1 = mysqli_fetch_array($img)) {
                  echo '<img src="img/announcement/' . $row1['img_name'] . '" alt="">';
                }
                ?>
              </div>
              <!-- Other Announcement Content -->
              <div style="min-width: 70%; padding: 10px 20px;">
                <div class="post-title">
                  <b><?php echo $row['announcement_title'] ?></b>
                </div>
                <div style="font-size: smaller; padding: 5px;">
                  <div><i class="fa fa-building"></i><?php echo $row['announcement_dept']; ?></div>
                  <div><i class="fa fa-calendar"></i><?php echo $row['announcement_date']; ?>&emsp;</div>
                </div>
              </div>
            </div>

          <?php
          }
          ?>

        </div>


        <!-- Other News -->
        <div class="latest-posts" style="background: url(img/subbanner08.webp) center;">
          <div align="center"><b style="font-size: large;">其他消息</b></div>

          <?php
          $query = mysqli_query($mysqli, "SELECT * FROM wnews ORDER BY news_date DESC LIMIT 3");
          while ($row = mysqli_fetch_array($query)) {
            $date = strtotime($row['news_date']);
            $id = $row['news_id']
          ?>

            <div class="post-row item " onclick="window.open('news_detail.php?id=<?php echo $row['news_id'] ?>', '_self')" style="background: rgba(255,255,255,0.7); padding: 0; margin: 10px; display: flex; cursor: pointer; overflow: hidden; outline: rgba(0, 0, 0, 0.1) 2px solid;">
              <!-- Other News Image -->
              <div class="col-md-3 col-bg-3 post-image " style="min-width: 30%; padding: 0; margin: 0;">
                <?php
                $img = mysqli_query($mysqli, "SELECT * FROM wnews_img where news_id='$id' ORDER BY img_id DESC LIMIT 1");
                while ($row1 = mysqli_fetch_array($img)) {
                  echo '<img src="img/news/' . $row1['img_name'] . '" alt="">';
                }
                ?>
              </div>
              <!-- Other News Content -->
              <div style="min-width: 70%; padding: 10px 20px;">
                <div class="post-title">
                  <b><?php echo $row['news_title'] ?></b>
                </div>
                <div style="font-size: smaller; padding: 5px;">
                  <div><i class="fa fa-building"></i><?php echo $row['news_dept']; ?></div>
                  <div><i class="fa fa-calendar"></i><?php echo $row['news_date']; ?>&emsp;</div>
                </div>
              </div>
            </div>

          <?php
          }
          ?>

        </div>
      </div>
    </div>
  </div>
</body>

<?php
include('footer.php'); // Footer
?>

</html>