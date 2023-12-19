<?php
require('connect.php');
include("auth_admin2.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>预订系统</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/datepicker3.css" rel="stylesheet">
  <link href="css/bootstrap-table.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!--Icons-->
  <script src="js/lumino.glyphs.js"></script>

  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function ($) {
      $('a[rel*=facebox]').facebox({
        loadingImage: 'src/loading.gif',
        closeImage: 'src/closelabel.png'
      })
    })
  </script>
  <style type="text/css">
    .material-icons.print {
      Font-size: 45px;
      color: #ffffff;
    }
  </style>
  <script type="text/javascript">
    function previewMultiple(event) {
      let image = document.getElementById("news_image");

      for (i = 0; i < image.files.length; i++) {
        let urls = URL.createObjectURL(event.target.files[i]);
        document.getElementById("gallery").innerHTML += '<img src="' + urls + '">';
      }
    }
  </script>

  <style>
    #gallery {
      display: flex;
      overflow-x: scroll;
    }

    #gallery img {
      max-width: 200px;
      height: 200px;
      margin: 10px;
      padding: 5px;
      border: 1px solid rgba(0, 0, 0, 0.1);
    }
  </style>
  <script src="ckeditor/ckeditor.js"></script>
</head>

<body>
  <?php
  $header = file_get_contents('header_admin.php');
  echo $header;
  ?>

  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home">
              <use xlink:href="#stroked-home"></use>
            </svg></a></li>
        <li class="active">Icons</li>
      </ol>
    </div><!--/.row-->

    <div class="row">
      <?php
      include('connect.php');
      $id = $_GET['id'];
      $result = mysqli_query($conn, "SELECT * FROM wnews where news_id='$id'");
      while ($row = mysqli_fetch_array($result)) {
        ?>

        <div class="panel panel-default" style="margin: 20px 15px;">
          <div class="panel-heading">删除资料 (最新消息)</div>

          <div class="panel-body">
            <form role="form" action="wnews_delete_exe.php" method="post">

              <div class="col-md-6">
                <input type="hidden" name="news_id" value="<?php echo $row['news_id']; ?>">

                <div class="form-group">
                  <label>发布日期</label>
                  <input disabled class="form-control" type="date" value="<?php echo $row['news_date']; ?>"
                    name="news_date">
                </div>

                <div class="form-group">
                  <label>标题</label>
                  <input disabled class="form-control" value="<?php echo $row['news_title']; ?>" name="news_title">
                </div>

                <div class="form-group">
                  <label>发布单位</label>
                  <select disabled class="form-control" name="news_dept">
                    <option value="<?php echo $row['news_dept']; ?>">
                      <?php echo $row['news_dept']; ?>
                    </option>
                    <option value="校长室">校长室</option>
                    <option value="教务处">教务处</option>
                    <option value="训导处">训导处</option>
                    <option value="联课活动处">联课活动处</option>
                    <option value="事务处">事务处</option>
                    <option value="人力资源处">人力资源处</option>
                    <option value="体育处">体育处</option>
                    <option value="升学辅导处">升学辅导处</option>
                    <option value="生活辅导处">生活辅导处</option>
                    <option value="电脑中心">电脑中心</option>
                    <option value="视听教育馆">视听教育馆</option>
                    <option value="图书馆">图书馆</option>
                    <option value="夜间部">夜间部</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>内容</label>
                  <textarea disabled class="form-control" name="news_content" rows="10"
                    cols="50"><?php echo $row['news_content']; ?></textarea>
                  <script>CKEDITOR.replace('news_content', {
                      autoParagraph: false,
                      enterMode: CKEDITOR.ENTER_BR,
                      uiColor: '#30a5ff'
                    });</script>
                </div>

                <div id="gallery">
                  <?php
                  include('connect.php');
                  $result = mysqli_query($conn, "SELECT * FROM wnews_img where news_id='$id' ORDER BY img_id DESC");
                  while ($row = mysqli_fetch_array($result)) {
                    echo '
                    <img src="../img/news/' . $row['img_name'] . '" alt="">
                    ';
                  }
                  ?>
                </div>

                <div align="right">
                  <button type="submit" class="btn btn-primary" style="background: red; border: red;">Delete</button>
                </div>

              </div>
            </form>
          </div>
        </div>

        <?php
      }
      ?>
    </div><!--/.row-->
  </div><!--/.main-->

  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/bootstrap-table.js"></script>
  <script>
    !function ($) {
      $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
        $(this).find('em:first').toggleClass("glyphicon-minus");
      });
      $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
      if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
      if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
  </script>
  <script type="text/javascript" src="/js/ckeditor/ckeditor.js"></script>
  <script type="text/javascript" src="/js/ckeditor/adapters/jquery.js"></script>
  <script type="text/javascript">
    $(function () {
      $('#your_textarea').ckeditor({
        toolbar: 'Full',
        enterMode: CKEDITOR.ENTER_BR,
        shiftEnterMode: CKEDITOR.ENTER_P
      });
    });

    $('<p>').unwrap();
  </script>
</body>

</html>