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

    td,
    th {
      text-align: center;
    }

    .btn {
      border: 1px solid gainsboro;
      margin: 50px 20px;
      float: right;
      border-radius: 30px;
      color: black;
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
        <li class="active">Icons</li>
      </ol>
    </div><!--/.row-->

    <br>
    <div onclick="history.back()" style="cursor: pointer; margin-bottom: 10px"><i class="fa-solid fa-share" style="color: #30a5ff; transform: scaleX(-1);"></i> 返回</div>


    <div class="panel panel-default">
      <?php
      $id = $_GET['id'];
      $result = mysqli_query($conn, "SELECT * FROM zgroup_research where group_id='$id'");
      $row = mysqli_fetch_assoc($result)
      ?>
      <div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; height:auto">
        <?php echo $row['research_topic']; ?>
      </div>

      <div class="panel-body" style="height: auto">

        <table data-toggle="table" data-select-item-name="toolbar1" style="font-family: 楷体, KaiTi; font-size: 12pt;line-height: 1.4;">
          <col width=50>
          <col width=200>
          <col width=100>
          <col width=100>
          <thead>
            <tr>
              <th>序号</th>
              <th>项目</th>
              <th>审批</th>
              <th>数额（RM）</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $id = $_GET['id'];
            $result = mysqli_query($conn, "SELECT * FROM zgroup_budget where group_id='$id'");
            $i = 0;

            while ($row = mysqli_fetch_array($result)) {
              $i++;
            ?>

              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['budget_title']; ?></td>
                <td>
                  <?php
                  // display and allow status change by click
                  echo '<a href="exe/change_status.php?table=zgroup_budget&id=' . $row["budget_id"] . '&gid=' . $id . '&status=' . $row["status"] . '">';
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
                <td><?php echo $row['budget_amount']; ?></td>
              </tr>

            <?php
            }
            ?>

            <tr>
              <td></td>
              <td></td>
              <td>
                <b>总额</b>
              </td>
              <td>
                <b>
                  <?php
                  $result = mysqli_query($conn, "SELECT SUM(budget_amount)FROM zgroup_budget WHERE group_id='$id'");
                  $row = $result->fetch_assoc();
                  echo $row['SUM(budget_amount)'];
                  ?>
                </b>
              </td>
            </tr>

          </tbody>
        </table>

        <a class="btn" href="exe/change_all_to_approve.php?table=zgroup_budget&id=<?php echo $id; ?>"><i class="fa-solid fa-check" style="color: green"></i> 一键批准</a>
        <a class="btn" href="exe/change_all_to_disapprove.php?table=zgroup_budget&id=<?php echo $id; ?>"><i class="fa-solid fa-xmark" style="color: red"></i> 一键不批准</a>

      </div>
    </div>

  </div>

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