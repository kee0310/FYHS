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
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">各项实践报告与答辩：评审1 60%、评审2 60%、评审3 60% = （60+60+60）/3</div>
          <div class="panel-body">


            <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
              <thead>
                <tr>
                  <th>序号</th>
                  <th>Group Code</th>
                  <th>项目名称</th>
                  <th>指导老师</th>
                  <th>活动报告</th>
                  <th>提交时间</th>

                </tr>
              </thead>
              <tbody>
                <?php
                $result = mysqli_query($conn, "
							
                SELECT a.research_topic,a.group_id,b.pdf_file,b.pdf_date,c.teacher_name, 
							
								RANK () OVER ( 
								ORDER BY a.group_id ASC
								) group_rank
							
							FROM zgroup_report b 
							LEFT JOIN zgroup_research a ON a.group_id = b.group_id
              COLLATE utf8_unicode_ci
							
							LEFT JOIN zteacher_detail c ON a.teacher_name = c.teacher_name
              COLLATE utf8_unicode_ci

              ORDER BY a.group_id ASC
							");
                while ($row = mysqli_fetch_array($result)) {


                  echo '<tr>';
                  echo '<td>' . $row["group_rank"] . '</td>';
                  echo '<td>' . $row["group_id"] . '</td>';
                  echo '<td>' . $row["research_topic"] . '</td>';
                  echo '<td>' . $row["teacher_name"] . '</td>';
                  echo '<td><a href="pdf/report/' . $row["pdf_file"] . '" target="_blank" >' . $row["pdf_file"] . '</a></td>';

                  echo '<td>' . $row["pdf_date"] . '</td>';


                  echo '</tr>';
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