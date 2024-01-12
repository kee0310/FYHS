<?php
include('connect.php');;
include("exe/auth_admin.php");
include("header_admin.php");
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
          <div class="panel-heading">各项实践计划预算案</div>
          <div class="panel-body">


            <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
              <thead>
                <tr>
                  <th>序号</th>
                  <th>Group Code</th>
                  <th>项目名称</th>
                  <th>组长姓名</th>
                  <th>班级</th>
                  <th>指导老师</th>
                  <th>预算总数额</th>
                  <th>填写日期</th>
                  <th>允许删除</th>
                  <th>评语</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include('../connect.php');
                $result = mysqli_query($conn, "

							SELECT a.group_id,a.research_topic,a.teacher_id,
							b.budget_id,b.budget_102,b.budget_202,b.budget_302,
							b.budget_402,b.budget_502,b.budget_602,b.budget_702,
							b.budget_802,b.budget_comment,b.budget_date,b.budget_allow_edit,
							c.student_name,c.student_class,
							
								RANK () OVER ( 
								ORDER BY a.group_id ASC
								) group_rank
                FROM zgroup_budget b
                
                LEFT JOIN zgroup_research a ON a.group_id = b.group_id
                COLLATE utf8_unicode_ci

                LEFT JOIN zstudent_detail c ON a.group_id = c.student_id
                COLLATE utf8_unicode_ci

							");
                while ($row = mysqli_fetch_array($result)) {


                  echo '<tr>';
                  echo '<td>' . $row["group_rank"] . '</td>';
                  echo '<td>' . $row["group_id"] . '</td>';
                  echo '<td><a href="admin_view_budget.php?id=' . $row["budget_id"] . '" target="_blank">' . $row["research_topic"] . '</a></td>';
                  echo '<td>' . $row["teacher_id"] . '</td>';
                  echo '<td>' . $row["student_name"] . '</td>';
                  echo '<td>' . $row["student_class"] . '</td>';

                  $budgettotal = $row["budget_102"] + $row["budget_202"] + $row["budget_302"] + $row["budget_402"] + $row["budget_502"] + $row["budget_602"] + $row["budget_702"] + $row["budget_802"];

                  echo '<td>RM' . $budgettotal . '.00</td>';

                  echo '<td>' . $row["budget_date"] . '</td>';

                  if ($row["budget_allow_edit"] == 1) {
                    echo '<td><a href="changetoeditbudget01.php?id=' . $row["budget_id"] . '"><span style="color:green">能够</span></a></td>';
                  } elseif ($row["budget_allow_edit"] == 0) {
                    echo '<td><a href="changetoeditbudget02.php?id=' . $row["budget_id"] . '"><span style="color:red">不能够</span></a></td>';
                  } else {
                    echo '<td>Error</td>';
                  }

                  echo '<td><form action="exe/changebudgetcomment.php" method="post" name="login">';
                  echo '<input class="form-control" type="hidden" name="id" value="' . $row["budget_id"] . '" />';
                  echo '<textarea class="form-control" rows="4" cols="50" name="budget_comment" />' . $row["budget_comment"] . '</textarea>';
                  echo '<button type="submit">保存</button></form></td>';

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