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

  <script>
    function showHint(str) {
      if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "updatemark/updatereportpresentmark_exe.php" + str, true);
        xmlhttp.send();
      }
    }
  </script>

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



    <div class="panel panel-default" style="margin-top: 20px">
      <div class="panel-heading">各项实践报告：评审1 60%、评审2 60%、评审3 60% = （60+60+60）/3</div>

      <div class="panel-body">
        <?php
        $id = $_GET['id'];
        $result = mysqli_query($conn, "SELECT * FROM zgroup_report WHERE group_id='$id'");

        while ($row = mysqli_fetch_array($result)) {
        ?>

          <form role="form" action="updatemark/updatereportpresentmark_exe.php" method="post">
            <input type="hidden" name="gid" value="<?php echo $row["group_id"]; ?>">
            队伍编号：<?php echo $row["group_id"]; ?><br><br>
            答辩01：<input onkeyup="showHint(this.value)" id="name" name="pdf_present01" type="text" maxlength="4" size="4" value="<?php echo $row["pdf_present01"]; ?>"><br><br>
            答辩02：<input id="name" name="pdf_present02" type="text" maxlength="4" size="4" value="<?php echo $row["pdf_present02"]; ?>"><br><br>
            答辩03：<input id="name" name="pdf_present03" type="text" maxlength="4" size="4" value="<?php echo $row["pdf_present03"]; ?>"><br><br>
            报告01：<input id="name" name="pdf_report01" type="text" maxlength="4" size="4" value="<?php echo $row["pdf_report01"]; ?>"><br><br>
            报告02：<input id="name" name="pdf_report02" type="text" maxlength="4" size="4" value="<?php echo $row["pdf_report02"]; ?>"><br><br>
            报告03：<input id="name" name="pdf_report03" type="text" maxlength="4" size="4" value="<?php echo $row["pdf_report03"]; ?>"><br><br>
            <button type="submit">save</button>
          </form>
          <p>Suggestions: <span id="txtHint"></span></p>

        <?php
        }
        ?>

      </div>
    </div>

  </div><!--/.main-->

</body>

</html>