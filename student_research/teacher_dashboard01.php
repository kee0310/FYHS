<?php
include('connect.php');;
include("exe/auth_teacher.php");
include("header_teacher.php");
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

          $id = $_SESSION['id'];
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

      <div class="col-md-12">
        <div class="panel panel-info">
          <div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; height:auto">
            各组实践活动项目
          </div>


          <?php

          $id = $_SESSION['id'];
          $result = mysqli_query($conn, "SELECT * FROM zteacher_detail WHERE teacher_id='$id'");
          $row = mysqli_fetch_assoc($result);
          $teacher_id = $row['teacher_id'];


          $result = mysqli_query($conn, "

			SELECT *
			FROM zgroup_research a
			LEFT JOIN zstudent_detail b ON a.group_id = b.student_id
			COLLATE utf8_unicode_ci
			
			where a.teacher_id='$teacher_id'
			
			ORDER BY a.group_id ASC

			");
          while ($row = mysqli_fetch_array($result)) {

          ?>
            <div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">
              <p>项目是否批准：
                <?php
                if ($row['research_status'] == null) {
                  echo "<span style='color: CornflowerBlue'>未审查</span>";
                } elseif ($row['research_status'] == 0) {
                  echo "<span style='color: red'>不批准</span>";
                } elseif ($row['research_status'] == 1) {
                  echo "<span style='color: MediumSeaGreen'>批准</span>";
                } else {
                  echo "Error";
                }
                ?></p>
              <p>备注、回馈：<?php echo $row['teacher_comment']; ?></p><br>
              <p style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; border-bottom: 1px black solid; padding-bottom: 50px">
                组长：<?php echo $row['group_id']; ?>&nbsp;&nbsp;<?php echo $row['student_name']; ?>&nbsp;&nbsp;<?php echo $row['student_class']; ?><br><br>
                项目名称：<?php echo $row['research_topic']; ?><br>
                学习方向：<?php echo $row['research_direct'] ?><br>
                项目简介：<br><?php echo $row['research_desc']; ?>
              </p>


            <?php

          }
            ?>

            </div>
        </div>



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