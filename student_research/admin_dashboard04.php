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
          <div class="panel-heading">各项实践计划申请表</div>
          <div class="panel-body">


            <table data-toggle="table" data-pagination="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
              <thead>
                <tr>
                  <th data-sortable="true">队伍编号</th>
                  <th data-sortable="true">项目名称</th>
                  <th data-sortable="true">学习方向</th>
                  <th data-sortable="true">指导老师</th>
                  <th data-sortable="true">审核</th>
                  <th data-sortable="true">填写日期</th>
                  <th data-sortable="true">允许删除</th>
                  <th data-sortable="true">评语</th>
                </tr>
              </thead>

              <tbody>

                <?php
                $result = mysqli_query($conn, "SELECT * FROM zgroup_research a ORDER BY research_date ASC");
                while ($row = mysqli_fetch_array($result)) {
                ?>

                  <tr>
                    <td><?php echo $row["group_id"]; ?></td>
                    <td><a href="admin_view_topic.php?id=<?php echo $row["group_id"]; ?>" target="_blank"><?php echo $row["research_topic"]; ?></a></td>
                    <td><?php echo $row["research_direct"]; ?></td>
                    <td><?php echo $row["teacher_name"]; ?></td>
                    <td>
                      <?php
                      // display and allow status change by click
                      echo '<a href="exe/change_status.php?table=zgroup_research&id=' . $row["group_id"] . '&status=' . $row["status"] . '">';
                      if ($row["status"] == null) {
                        echo '<span style="color:blue">未审查</span>';
                      } elseif ($row["status"] == 0) {
                        echo '<span style="color:red">不批准</span>';
                      } elseif ($row["status"] == 1) {
                        echo '<span style="color:green">批准</span>';
                      } elseif ($row["status"] == 2) {
                        echo '<span style="color:blue">待审查</span>';
                      } else {
                        echo '<span>-</span>';
                      }
                      echo '</a>';
                      ?>
                    </td>
                    <td><?php echo $row["research_date"]; ?></td>

                    <?php
                    if ($row["apply_allow_edit"] == 1) {
                      echo '<td><a href="changetoedit01.php?id=' . $row["group_id"] . '"><span style="color:green">能够</span></a></td>';
                    } elseif ($row["apply_allow_edit"] == 0) {
                      echo '<td><a href="changetoedit02.php?id=' . $row["group_id"] . '"><span style="color:red">不能够</span></a></td>';
                    } else {
                      echo '<td>Error</td>';
                    }
                    ?>

                    <td>
                      <form action="changecomment01.php" method="post" name="login">
                        <input class="form-control" type="hidden" name="id" value="<?php echo $row["group_id"]; ?>" />
                        <textarea class="form-control" rows="4" cols="80" name="teacher_comment"><?php echo $row["teacher_comment"]; ?></textarea>
                        <br>
                        <button type="submit">保存</button>
                      </form>
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