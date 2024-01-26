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

      <!--/.budget-->
      <div class="col-lg-12">
        <div class="panel panel-info">
          <div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; height:auto">
            实践活动预算案
          </div>


          <?php
          $result = mysqli_query(
            $conn,
            "SELECT a.*, c.research_topic 
            
              FROM zgroup_budget a 

              LEFT JOIN zgroup_research c
              ON a.group_id = c.group_id 
              COLLATE utf8_unicode_ci 

              where c.teacher_name='$teacher_name' 
              ORDER BY a.group_id ASC"
          );

          while ($row = mysqli_fetch_array($result)) {
            $group_id = $row['group_id'];
          ?>

            <div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6;">
              组长：<?php echo $group_id; ?><br>
              项目名称：<?php echo $row['research_topic']; ?>
            </div>

            <div class="panel-body">

              <table data-toggle="table" data-select-item-name="toolbar1" style="font-family: 楷体, KaiTi; font-size: 12pt;line-height: 1.4;">
                <thead>
                  <tr>
                    <th>预算编号</th>
                    <th>项目</th>
                    <th>数额（RM）</th>
                    <th>审批</th>
                    <th>备注、回馈</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $result = mysqli_query($conn, "SELECT * FROM zgroup_budget where group_id='$group_id'");
                  $num_rows = mysqli_num_rows($result);
                  while ($row = mysqli_fetch_array($result)) {
                  ?>

                    <tr>
                      <td><?php echo $row['budget_id']; ?></td>
                      <td style="width: 40%;"><?php echo $row['budget_title']; ?></td>
                      <td style="max-width: 10%;"><input type="text" name="budget_amount[]" value="<?php echo $row['budget_amount']; ?>" style="background: none; border: none; width: 100%; text-align: right;" disabled></td>
                      <td>
                        <b>
                          <?php
                          if ($row['status'] == null) {
                            echo "<span style='color: CornflowerBlue'>未审查</span>";
                          } elseif ($row['status'] == 0) {
                            echo "<span style='color: red'>不批准</span>";
                          } elseif ($row['status'] == 1) {
                            echo "<span style='color: MediumSeaGreen'>批准</span>";
                          } elseif ($row['status'] == 2) {
                            echo "<span style='color: CornflowerBlue'>待审查</span>";
                          } else {
                            echo "Error";
                          }
                          ?>
                        </b>
                      </td>
                      <td style="width: 30%;"><?php echo $row['budget_comment']; ?></td>
                    </tr>

                  <?php
                  }
                  ?>

                </tbody>
              </table>


            <?php
          }
            ?>

            </div>
        </div>
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