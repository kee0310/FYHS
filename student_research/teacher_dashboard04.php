<?php
session_start();
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

      <!--/.mark-->
      <div class="col-lg-12">
        <div class="panel panel-info">
          <div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; height:auto">
            学生名单分数
          </div>
          <div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 12pt;line-height: 1.4;">
            分数1：计划书<br>
            分数2：实践报告（答辩前）<br>
            分数3：答辩表现<br>
            分数4：实践报告（答辩后）<br>
            分数5：指导老师评分<span style="color: red">**请指导老师于学生答辩后进行个人评分</span>
          </div>
          <div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">
            <table data-toggle="table" data-select-item-name="toolbar1" style="font-family: 楷体, KaiTi; font-size: 12pt;line-height: 1.4;">
              <thead>
                <tr>
                  <th>Group Code</th>
                  <th>Role</th>
                  <th>学号</th>
                  <th>班级</th>
                  <th>姓名</th>
                  <th>项目</th>
                  <th>分数1：20%</th>
                  <th>分数2：30%</th>
                  <th>分数3：30%</th>
                  <th>分数4：10%</th>
                  <th>分数5：10%</th>
                  <th>总分：100%</th>
                </tr>
              </thead>
              <tbody>


                <?php
                $result = mysqli_query($conn, "SELECT * FROM zteacher_detail WHERE teacher_id='$id'");
                $row = mysqli_fetch_assoc($result);
                $teacher_name = $row['teacher_name'];


                $result = mysqli_query($conn, "

			SELECT *
			FROM zstudent_mark a
			
			where a.mark_teacher='$teacher_name'

			ORDER BY a.group_id ASC, a.mark_membernumber ASC
			
			");
                while ($row = mysqli_fetch_array($result)) {



                ?>


                  <tr>
                    <td><?php echo $row['group_id']; ?></td>
                    <td><?php echo $row['mark_role']; ?></td>
                    <td><?php echo $row['student_id']; ?></td>
                    <td><?php echo $row['student_class']; ?></td>
                    <td><?php echo $row['student_name']; ?></td>
                    <td><?php echo $row['mark_topic']; ?></td>

                    <td><?php
                        $totalpdfmark = $row['mark_pdf01'] + $row['mark_pdf02'] + $row['mark_pdf03'];
                        echo $totalpdfmark; ?></td>

                    <td><?php
                        $totalreportmark = ($row['mark_report01'] + $row['mark_report02'] + $row['mark_report03']) / 3;
                        echo round($totalreportmark, 1); ?></td>

                    <td><?php
                        $totalpresentmark = ($row['mark_present01'] + $row['mark_present02'] + $row['mark_present03']) / 3;
                        echo round($totalpresentmark, 1); ?></td>

                    <td><?php echo $row['mark_finalreport']; ?></td>
                    <td>
                      <form role="form" action="updatemark/update_individual_mark_exe.php" method="post">
                        <input type="hidden" name="mark_id" value="<?php echo $row['mark_id']; ?>">
                        <input type="hidden" name="group_id" value="<?php echo $row['group_id']; ?>">
                        <input id="name" name="mark_individual" type="text" maxlength="4" size="4" value="">

                        <button type="submit">save</button>
                      </form>
                    </td>
                    <td>
                      <?php
                      $totalmark = $totalpdfmark + $totalreportmark + $totalpresentmark + $row['mark_finalreport'] + $row['mark_individual'];
                      echo round($totalmark, 1);
                      ?>
                    </td>
                  </tr>

                <?php
                }
                ?>

              </tbody>
            </table>
          </div>

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
        $(this).find(' em:first').toggleClass("glyphicon-minus");
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