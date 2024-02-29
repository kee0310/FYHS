<!-- 
  This page are use to display all student budget form. 
  And allow admin to change it editable status.
  Will be redirect to admin_view_budget.php to view it's further details.
-->

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

  <title>学生课外实践活动 | 预算案</title>

  <style>
    .popup {
      left: 100%;
      top: 0%;
      height: 100%;
      position: fixed;
      padding: 20px;
      border-left: solid 1px grey;
      background-color: #f7f7f8;
      visibility: hidden;
      transform: translate(0%, 0%) scale(1);
      transition: transform 0.4s;
      z-index: 1000;
      margin-top: 50px;
    }

    .open-popup {
      visibility: visible;
      transform: translate(-100%, 0%) scale(1);
    }

    .close-popup {
      visibility: visible;
      transform: translate(-0%, 0%) scale(1);
    }

    .closebtn {
      background-color: gainsboro;
      height: 10px;
      width: 10px;
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

    <div class="panel panel-default" style="margin-top: 20px;">
      <div class="panel-heading">各项实践计划预算案</div>

      <div class="panel-body">
        <table data-toggle="table" data-pagination="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
          <thead>
            <tr>
              <th data-sortable="true">队伍编号</th>
              <th data-sortable="true">项目名称</th>
              <th data-sortable="true">组长姓名</th>
              <th data-sortable="true">班级</th>
              <th data-sortable="true">指导老师</th>
              <th data-sortable="true">预算总数额</th>
              <th data-sortable="true">填写日期</th>
              <th data-sortable="true">允许删除</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $result = mysqli_query(
              $conn,
              "SELECT a.*, b.research_topic, b.teacher_name, c.student_name, c.student_class, 
                (SELECT SUM(budget_amount) FROM zgroup_budget WHERE group_id = a.group_id) as totalamt

                FROM zgroup_budget a
                
                LEFT JOIN zgroup_research b ON b.group_id = a.group_id
                COLLATE utf8_unicode_ci

                LEFT JOIN zstudent_detail c ON a.group_id = c.student_id
                COLLATE utf8_unicode_ci

                GROUP BY a.group_id
              "
            );
            while ($row = mysqli_fetch_array($result)) {
            ?>

              <tr>
                <td><?= $row["group_id"]; ?></td>
                <td>
                  <a class="printbtn" style="cursor: pointer" onclick="printPdf('<?= $row['group_id']; ?>'); openPopup()"><?= $row["research_topic"]; ?>
                </td>
                <td><?= $row["student_name"]; ?></td>
                <td><?= $row["student_class"]; ?></td>
                <td><?= $row["teacher_name"]; ?></td>
                <td>RM <?= $row["totalamt"]; ?></td>
                <td><?= $row["budget_date"]; ?></td>
                <td>
                  <?php
                  if ($row["editable"] == 1) {
                    echo '<a href="exe/change_editable.php?table=zgroup_budget&id=' . $row["group_id"] . '&editable=0"><span style="color:green">能够</span></a>';
                  } elseif ($row["editable"] == 0) {
                    echo '<a href="exe/change_editable.php?table=zgroup_budget&id=' . $row["group_id"] . '&editable=1"><span style="color:red">不能够</span></a>';
                  } else {
                    echo 'Error';
                  }
                  ?>
                </td>
              </tr>

            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>

    <script>
      function showUser(str) {
        if (str == "") {
          document.getElementById("txtHint").innerHTML = "";
          return;
        } else {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("txtHint").innerHTML = this.responseText;
            }
          };
          xmlhttp.open("GET", "getuser.php?q=" + str, true);
          xmlhttp.send();
        }
      }
    </script>


    <!-- Popup panel -->
    <div id="popup" class="popup" class="panel panel-default">
      <span onclick="closePopup()" style="color: white; background-color: red; padding: 5px 8px; border-radius: 3px; opacity: 0.7;; cursor: pointer;"><i class="fa-solid fa-xmark"></i></span>
      <div id="frPDF">The div that should be appended</div>
    </div>
  </div><!--/.main-->


  <script>
    function openPopup() {
      let popup = document.getElementById("popup");
      popup.classList.remove("close-popup");
      popup.classList.add("open-popup");
    }

    function closePopup() {
      let popup = document.getElementById("popup");
      popup.classList.add("close-popup");
    }

    function printPdf(id) {
      let div = document.querySelector("#frPDF");
      div.outerHTML = '<iframe width="500" height="900" id="frPDF" src="admin_view_budget.php?id=' + id + '" frameborder="0"></iframe>'

      let iframe = document.frames ? window.frames.frames["frPDF"] : document.getElementById("frPDF");
      let ifWin = iframe.contentWindow || iframe;

      return false;
    }
  </script>

</body>

</html>