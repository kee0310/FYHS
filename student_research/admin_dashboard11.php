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
          <div class="panel-heading">各项实践最终报告：10%</div>
          <div class="panel-body">


            <table data-toggle="table" data-pagination="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
              <thead>
                <tr>
                  <th data-sortable="true">序号</th>
                  <th data-sortable="true">队伍编号</th>
                  <th data-sortable="true">中文项目名称</th>
                  <th data-sortable="true">英文项目名称</th>
                  <th data-sortable="true">指导老师</th>
                  <th data-sortable="true">活动报告</th>
                  <th data-sortable="true">允许删除</th>

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
                b.pdf_allow_edit,
  
                
                  RANK () OVER ( 
                  ORDER BY a.group_id ASC
                  ) group_rank
                
                FROM zgroup_finalreport b
                LEFT JOIN zgroup_research a ON a.group_id = b.group_id
                COLLATE utf8_unicode_ci

							");
                while ($row = mysqli_fetch_array($result)) {

                  echo '<tr>';
                  echo '<td>' . $row["group_rank"] . '</td>';
                  echo '<td>' . $row["group_id"] . '</td>';
                  echo '<td>' . $row["research_topic"] . '</td>';
                  echo '<td>' . $row["research_topic_en"] . '</td>';
                  echo '<td>' . $row["teacher_name"] . '</td>';
                  echo '<td><a href="pdf/finalreport/' . $row["pdf_file"] . '" target="_blank" >' . $row["pdf_file"] . '</a></td>';


                  if ($row["pdf_allow_edit"] == 1) {
                    echo '<td><a href="changetoeditpdffinalreport01.php?id=' . $row["pdf_id"] . '"><span style="color:green">能够</span></a></td>';
                  } elseif ($row["pdf_allow_edit"] == 0) {
                    echo '<td><a href="changetoeditpdffinalreport02.php?id=' . $row["pdf_id"] . '"><span style="color:red">不能够</span></a></td>';
                  } else {
                    echo '<td>Error</td>';
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