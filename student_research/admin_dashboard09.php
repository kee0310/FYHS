<?php
include("exe/auth_admin.php");
include("header_admin.php");
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
          $id = $_SESSION['id'];
          $result = mysqli_query($conn, "SELECT * FROM zadmin_detail WHERE admin_id='$id'");
          $row = mysqli_fetch_assoc($result);
          $department = $row['admin_department'];

          echo $department;
          echo ": ";
          echo $id;
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
          <div class="panel-heading">各项实践报告：评审1 60%、评审2 60%、评审3 60% = （60+60+60）/3</div>
          <div class="panel-body">


            <table data-toggle="table" data-pagination="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
              <thead>
                <tr>
                  <th data-sortable="true">序号</th>
                  <th data-sortable="true">队伍编号</th>
                  <th data-sortable="true">项目名称</th>
                  <th data-sortable="true">Title</th>
                  <th data-sortable="true">指导老师</th>
                  <th data-sortable="true">活动报告</th>
                  <th data-sortable="true">允许删除</th>
                  <th data-sortable="true">答辩1</th>
                  <th data-sortable="true">答辩2</th>
                  <th data-sortable="true">答辩3</th>
                  <th data-sortable="true">报告1</th>
                  <th data-sortable="true">报告2</th>
                  <th data-sortable="true">报告3</th>
                  <th data-sortable="true">总分</th>
                  <th data-sortable="true">平均分</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $id = $_SESSION['id'];
                $result = mysqli_query($conn, "SELECT * FROM zadmin_detail WHERE admin_id='$id'");
                $row = mysqli_fetch_assoc($result);
                $department = $row['admin_department'];

                $result = mysqli_query($conn, "
							
							SELECT a.group_id,a.research_topic,a.research_topic_en,a.teacher_name,b.pdf_id,b.pdf_file,b.pdf_date,
							b.pdf_allow_edit,b.pdf_report01,pdf_report02,pdf_report03,pdf_present01,pdf_present02,pdf_present03,
							
								RANK () OVER ( 
								ORDER BY a.group_id ASC
								) group_rank
							
							FROM zgroup_report b
							LEFT JOIN zgroup_research a ON a.group_id = b.group_id
              COLLATE utf8_unicode_ci
							LEFT JOIN zstudent_detail c ON a.group_id = c.student_id
              COLLATE utf8_unicode_ci


							");
                while ($row = mysqli_fetch_array($result)) {


                  echo '<tr>';
                  echo '<td>' . $row["group_rank"] . '</td>';
                  echo '<td><a href="print/admin_evaluation_form01.php?id=' . $row["group_id"] . '&a=' . $row["group_rank"] . '" target="_blank">' . $row["group_id"] . '</a></td>';
                  echo '<td><a href="admin_dashboard10.php?id=' . $row["group_id"] . '" >' . $row["research_topic"] . '</a></td>';
                  echo '<td>' . $row["research_topic_en"] . '</td>';
                  echo '<td>' . $row["teacher_name"] . '</td>';
                  echo '<td><a href="pdf/report/' . $row["pdf_file"] . '" target="_blank" >' . $row["pdf_file"] . '</a></td>';


                  if ($row["pdf_allow_edit"] == 1) {
                    echo '<td><a href="changetoeditpdfreport01.php?id=' . $row["pdf_id"] . '"><span style="color:green">能够</span></a></td>';
                  } elseif ($row["pdf_allow_edit"] == 0) {
                    echo '<td><a href="changetoeditpdfreport02.php?id=' . $row["pdf_id"] . '"><span style="color:red">不能够</span></a></td>';
                  } else {
                    echo '<td>Error</td>';
                  }

                  echo '<td>' . $row["pdf_present01"] . '</td>';
                  echo '<td>' . $row["pdf_present02"] . '</td>';
                  echo '<td>' . $row["pdf_present03"] . '</td>';
                  echo '<td>' . $row["pdf_report01"] . '</td>';
                  echo '<td>' . $row["pdf_report02"] . '</td>';
                  echo '<td>' . $row["pdf_report03"] . '</td>';

                  $marktotal = $row["pdf_report01"] + $row["pdf_report02"] + $row["pdf_report03"] +
                    $row["pdf_present01"] + $row["pdf_present02"] + $row["pdf_present03"];

                  echo '<td>' . $marktotal . '</td>';

                  $markaverage = $marktotal / 3;

                  echo '<td>' . round($markaverage, 1) . '</td>';

                  echo '</tr>';
                }

                ?>
              </tbody>
            </table>
          </div>
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