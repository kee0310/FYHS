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



            <?php
            $id = $_GET['id'];
            $result = mysqli_query($conn, "
							
							SELECT *
							
							FROM zgroup_report
							WHERE group_id='$id'

							");
            while ($row = mysqli_fetch_array($result)) {

            ?>
              <form role="form" action="updatemark/updatereportpresentmark_exe.php" method="post">
                <input type="hidden" name="pdf_id" value="<?php echo $row["pdf_id"]; ?>">

                <input type="hidden" name="code" value="<?php echo $row["group_id"]; ?>">

                队伍编号：<?php echo $row["group_id"]; ?><br><br>
                答辩01：<input id="name" name="pdf_present01" type="text" maxlength="4" size="4" value="<?php echo $row["pdf_present01"]; ?>"><br><br>
                答辩02：<input id="name" name="pdf_present02" type="text" maxlength="4" size="4" value="<?php echo $row["pdf_present02"]; ?>"><br><br>
                答辩03：<input id="name" name="pdf_present03" type="text" maxlength="4" size="4" value="<?php echo $row["pdf_present03"]; ?>"><br><br>
                报告01：<input id="name" name="pdf_report01" type="text" maxlength="4" size="4" value="<?php echo $row["pdf_report01"]; ?>"><br><br>
                报告02：<input id="name" name="pdf_report02" type="text" maxlength="4" size="4" value="<?php echo $row["pdf_report02"]; ?>"><br><br>
                报告03：<input id="name" name="pdf_report03" type="text" maxlength="4" size="4" value="<?php echo $row["pdf_report03"]; ?>"><br><br>

                <button type="submit">save</button>
              </form>


            <?php
            }
            ?>

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