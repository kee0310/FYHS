<?php
session_start();
include("exe/auth_teacher.php");
include("header_teacher.php");
include('connect.php');
?>
<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>学生课外实践活动</title>

</head>

<body>

  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home">
              <use xlink:href="#stroked-home"></use>
            </svg></a></li>
        <li class="active">
          <?php
          $result = mysqli_query($conn, "SELECT * FROM zteacher_detail WHERE teacher_id='$id'");
          $row = mysqli_fetch_assoc($result);
          $teacher_name = $row['teacher_name'];

          echo $id;
          echo "：";
          echo $teacher_name;
          ?>
        </li>
      </ol>
    </div><!--/.row-->



    <div class="row">
      <div class="col-lg-12">
        <div style="height: 20px"></div>
      </div>

      <!--/.budget-->
      <div class="col-lg-12">
        <div class="panel panel-info">
          <div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; height:auto">
            最终修改实践活动报告
          </div>


          <?php
          $result = mysqli_query(
            $conn,
            "SELECT a.*, c.research_topic 
        
          FROM zgroup_finalreport a 

          LEFT JOIN zgroup_research c
          ON a.group_id = c.group_id 
          COLLATE utf8_unicode_ci 

          where c.teacher_name='$teacher_name' 
          ORDER BY a.group_id ASC"
          );

          while ($row = mysqli_fetch_array($result)) {
          ?>

            <div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">
              <br>组长：<?php echo $row['group_id']; ?>&nbsp;&nbsp;项目名称：<?php echo $row['research_topic']; ?>
            </div>
            <div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">
              活动报告：<a href="pdf/finalreport/<?php echo $row['pdf_file']; ?>" target="_blank" title="<?php echo $row['pdf_file']; ?>"><?php echo $row['pdf_file']; ?></a>
              &nbsp;&nbsp;
              提交日期：<?php echo $row['pdf_date']; ?>
            </div>
            <div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;border-bottom: 1px solid #000;">

            </div>

          <?php

          }
          ?>

        </div>

      </div>


    </div><!--/.row-->



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
    ! function($) {
      $(document).on("click", "ul.nav li.parent > a > span.icon", function() {
        $(this).find('em:first').toggleClass("glyphicon-minus");
      });
      $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function() {
      if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function() {
      if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
  </script>
</body>

</html>