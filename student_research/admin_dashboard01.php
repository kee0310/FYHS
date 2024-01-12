﻿<?php
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


  <script type="text/javascript">
    jQuery(document).ready(function($) {
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
          include('../connect.php');

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
          <div class="panel-heading">学生账号</div>
          <div class="panel-body">


            <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
              <thead>
                <tr>
                  <th>班级/学号</th>
                  <th>姓名</th>
                  <th>身份证号码</th>
                  <th>新密码</th>
                  <th>电邮</th>
                  <th>登入(未登入/非首次)</th>
                  <th>组队(未完成/已完成)</th>
                  <th>Group Code</th>
                  <th>Leader</th>


                </tr>
              </thead>
              <tbody>
                <?php
                include('../connect.php');
                $result = mysqli_query($conn, "
							
							SELECT *
							FROM zstudent_detail O 
							LEFT JOIN zstudent_group I ON O.student_id = I.student_id
							GROUP BY O.student_id
							ORDER BY O.student_id ASC
							");

                while ($row = mysqli_fetch_array($result)) {


                  echo '<tr>';
                  echo '<td>' . $row["student_class"] . '</td>';
                  echo '<td>' . $row["student_name"] . '</td>';
                  echo '<td>' . $row["student_password"] . '</td>';
                  echo '<td>' . $row["student_password_new"] . '</td>';
                  echo '<td>' . $row["student_email"] . '</td>';

                  if ($row["student_tf"] == 1) {
                    echo '<td><span style="color:red">未登入</span></td>';
                  } else {
                    echo '<td><span style="color:green">非首次</span></td>';
                  }

                  if ($row["group_id"] == null) {
                    echo '<td><span style="color:red">未完成</span></td>';
                  } else {
                    echo '<td><span style="color:green">已完成</span></td>';
                  }

                  echo '<td>' . $row["group_id"] . '</td>';
                  echo '<td>' . $row["group_leader"] . '</td>';

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