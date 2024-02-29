<!-- 
  This page are use to display all news from the school.
-->

<!doctype html>

<html lang="en">

<head>

  <title>宽柔中学古来分校 | 消息 News</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!-- Header -->
  <?php
  include('header.php');
  include('connect.php');
  ?>

  <style>
    .post-row {
      max-height: 190px;
      overflow: hidden;
      width: 100%;
      background: snow;
      padding: 0;
      margin: 10px auto;
      border: 1px solid mistyrose;
      border-radius: 15px;
      display: flex;
      cursor: pointer;
      transition: all .1s ease;

      &:hover {
        background-color: #e8f8ff;
        border: 1px solid #4ec8ff;
      }

      & .post-image {
        z-index: 2000;
        float: right;
        overflow: hidden;
        background: url("data:image/jpeg;base64,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");
        background-size: cover;
        background-position: center;
        width: 40%;
        max-width: 250px;
        padding: 0;
        margin: 0;

        & img {
          object-fit: cover;
          overflow: hidden;
          height: 100%;
          width: 100%;
          object-position: 50% 0%;
        }
      }

      & .post-title {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
      }

      & .post-content {
        max-height: 55px;
        overflow: hidden;
        margin-bottom: 20px;

        & p {
          text-overflow: ellipsis;
          display: -webkit-box;
          -webkit-line-clamp: 2;
          -webkit-box-orient: vertical;
          font-size: smaller;

          & br {
            display: none;
          }
        }
      }
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

      &+label {
        display: inline-block;
        margin: 4px;
        padding: 2px 12px;
        outline: solid 1px;
        border-radius: 30px;
        cursor: pointer;
        font-size: 16px;
      }

      &:checked+label {
        outline-width: 2px;
      }
    }
  </style>

</head>

<body>
  <!-- Page Banner -->
  <div class="page-banner" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 50%, rgba(0,0,0,1)), url(img/subbanner08.webp) center; background-size: cover;">
    <div class="container">
      <div class="col-md-6">
        <h2>消息</h2>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumbs">
          <a href="index.php">
            <li><i>首页 /&ensp;</i></li>
          </a>
          <a href="other_1@a38b.php">
            <li><i>其他 /&ensp;</i></li>
          </a>
          <a href="">
            <li><i>消息</i></li>
          </a>
        </ul>
      </div>
    </div>
  </div>


  <!-- Content -->
  <div id="content">
    <div class="container">
      <div class="page-content">

        <div class="latest-posts">
          <h4 class="classic-title" align="center"><i class="fa fa-newspaper-o"></i>消息</h4>

          <?php
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

          <!-- Search bar -->
          <form action="news_all.php#content" method="post" onclick="preventResubmitPrompt()" style="display: grid; margin-bottom: 20px;" align="center">
            <div class="col-md-9 col-xs-12" style="margin: auto">
              <input class="searchbar" type="text" placeholder="search" name="search" autocomplete="off" value="<?= $search ?>">
              <button type="summit" name='searchbtn'>
                <i class="fa fa-search" style="position: absolute; right: 30px; font-size: 20px; color: grey; margin-top: -55px;"></i>
              </button>
            </div>
            <!-- Department Selector -->
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
          </form>


          <?php
          $query = mysqli_query($mysqli, "SELECT * FROM wnews WHERE ((news_title LIKE '%$search%') OR (news_content LIKE '%$search%')) AND (news_dept LIKE '%$dept%') ORDER BY news_date DESC, news_id DESC");
          while ($row = mysqli_fetch_array($query)) {
            $date = strtotime($row['news_date']);
            $id = $row['news_id']
          ?>

            <!-- Display All Posts -->
            <div class="post-row" onclick="window.open('news_detail.php?id=<?= $row['news_id'] ?>', '_self')">

              <!-- Post Image -->
              <div class="post-image">
                <?php
                $x = mysqli_query($mysqli, "SELECT * FROM wnews_img where news_id='$id' ORDER BY img_id DESC LIMIT 1");
                while ($row1 = mysqli_fetch_array($x)) {
                  echo '<img src="img/news/' . $row1['img_name'] . '" alt="">';
                }
                ?>
              </div>

              <!-- Display post content -->
              <div style="width: 100%; padding: 10px 20px;">
                <div class="post-title">
                  <b><?= $row['news_title'] ?></b>
                </div>
                <div style="font-size: smaller; padding: 5px;">
                  <i class="fa fa-building"></i> <?= $row['news_dept']; ?><br>
                  <i class="fa fa-calendar"></i> <?= $row['news_date']; ?>&emsp;
                </div>
                <div class="post-content">
                  <p><?= $row['news_content']; ?></p>
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

  <script>
    function preventResubmitPrompt() {
      if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
      }
    }
  </script>
</body>

<!-- Footer -->
<?php include('footer.php'); ?>

</html>