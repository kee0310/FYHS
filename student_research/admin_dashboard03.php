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

  <style type="text/css">
    .material-icons.print {
      Font-size: 45px;
      color: #ffffff;
    }
  </style>

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
          <div class="panel-heading">组员人数</div>
          <div class="panel-body">


            <table data-toggle="table" data-pagination="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
              <thead>
                <tr>
                  <th data-sortable="true">队伍编号</th>
                  <th data-sortable="true">人数</th>
                  <th data-sortable="true">学生姓名</th>
                  <th data-sortable="true">班级</th>
                  <th data-sortable="true">申请项目名称</th>
                  <th data-sortable="true">指导老师</th>
                  <th data-sortable="true">人数状态</th>
                </tr>
              </thead>

              <tbody>
                <?php
                $result = mysqli_query($conn, "SELECT count(I.group_id) AS abc,b.research_topic,b.teacher_name,I.group_id,a.student_id,a.student_class
                            FROM zstudent_group I
                            
                            LEFT JOIN zstudent_detail a
                            ON I.student_id = a.student_id
                            
                            LEFT JOIN zgroup_research b
                            ON I.group_id = b.group_id

                            COLLATE utf8_unicode_ci
                            
                            GROUP BY I.group_id
                            ORDER BY I.group_id ASC
                          ");

                while ($row = mysqli_fetch_array($result)) {

                  echo '<tr>';
                  echo '<td>' . $row["group_id"] . '</td>';
                  echo '<td>' . $row["abc"] . '</td>';
                  echo '<td>' . $row["student_id"] . '</td>';
                  echo '<td>' . $row["student_class"] . '</td>';
                  echo '<td>' . $row["research_topic"] . '</td>';
                  echo '<td>' . $row["teacher_name"] . '</td>';
                  if ($row["abc"] >= 11) {
                    echo '<td><span style="color:red">超出</span></td>';
                  } elseif ($row["abc"] <= 3) {
                    echo '<td><span style="color:blue">不足</span></td>';
                  } else {
                    echo '<td><span style="color:green">完成</span></td>';
                  }
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