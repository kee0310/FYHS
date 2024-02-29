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

  <title>学生课外实践活动 | 计划书</title>

</head>

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
      <div class="panel-heading">各项实践计划计划书：教务处 10%、联课处 10% = 20%</div>

      <div class="panel-body">
        <table data-toggle="table" data-pagination="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
          <thead>
            <tr>
              <th data-sortable="true">队伍编号</th>
              <th data-sortable="true">项目名称</th>
              <th data-sortable="true">指导老师</th>
              <th data-sortable="true">计划书</th>
              <th data-sortable="true">预算案</th>
              <th data-sortable="true">总数额 (RM)</th>
              <th data-sortable="true">提交时间</th>
              <th data-sortable="true">允许删除</th>
              <th data-sortable="true">教务处</th>
              <th data-sortable="true">联课处</th>
              <th data-sortable="true">加减分</th>
              <th data-sortable="true">总分</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $result = mysqli_query(
              $conn,
              "SELECT a.*, b.research_topic, b.teacher_name, c.budget_id,
                (SELECT SUM(budget_amount) FROM zgroup_budget WHERE group_id = a.group_id) as totalamt

                FROM zgroup_proposal a

                LEFT JOIN zgroup_research b ON a.group_id = b.group_id
                COLLATE utf8_unicode_ci

                LEFT JOIN zgroup_budget c ON a.group_id = c.group_id
                COLLATE utf8_unicode_ci

                GROUP BY b.group_id
              "
            );

            while ($row = mysqli_fetch_array($result)) {
              $group_id = $row["group_id"];
              $marktotal = $row["pdf_mark01"] + $row["pdf_mark02"] + $row["pdf_mark03"];
            ?>

              <tr>
                <td><?= $row["group_id"]; ?></td>
                <td><?= $row["research_topic"]; ?></td>
                <td><?= $row["teacher_name"]; ?></td>
                <td><a href="pdf/proposal/<?= $row["pdf_file"]; ?>" target="_blank"><?= $row["pdf_file"]; ?></a></td>

                <td>
                  <?php
                  if ($row["budget_id"] != null) {
                  ?>
                    <a class="printbtn" style="cursor: pointer" onclick="printPdf('<?= $row['group_id'] ?>'); openPopup()"><?= $row["research_topic"] ?></a>
                  <?php
                  } else {
                    echo '-';
                  }
                  ?>
                </td>

                <td><?= isset($row["totalamt"]) ? $row["totalamt"] : '-'; ?></td>
                <td><?= $row["pdf_date"]; ?></td>

                <?php
                if ($row["editable"] == 1) {
                  echo '<td><a href="exe/change_editable.php?table=zgroup_proposal&id=' . $row["group_id"] . '&editable=0"><span style="color:green">能够</span></a></td>';
                } elseif ($row["editable"] == 0) {
                  echo '<td><a href="exe/change_editable.php?table=zgroup_proposal&id=' . $row["group_id"] . '&editable=1"><span style="color:red">不能够</span></a></td>';
                } else {
                  echo '<td>Error</td>';
                }

                if ($department == 'academic') {
                  echo '<td>
                          <form role="form" action="updatemark/update_pdf_mark01_exe.php" method="post">
                          <input type="hidden" name="pdf_markname" value="' . $id . '">
                          <input type="hidden" name="pdf_id" value="' . $row["pdf_id"] . '">
                          <input type="hidden" name="group_id" value="' . $row["group_id"] . '">
                          <input id="name" name="pdf_mark01" type="text" maxlength="4" size="4" value="' . $row["pdf_mark01"] . '">
                          <button type="submit">save</button>
                          </form>
                        </td>';
                } else {
                  echo '<td>' . $row["pdf_mark01"] . '</td>';
                }

                if ($department == 'co_curricular') {
                  echo '<td>
                          <form role="form" action="updatemark/update_pdf_mark02_exe.php" method="post">
                          <input type="hidden" name="pdf_markname" value="' . $id . '">
                          <input type="hidden" name="pdf_id" value="' . $row["pdf_id"] . '">
                          <input type="hidden" name="group_id" value="' . $row["group_id"] . '">
                          <input id="name" name="pdf_mark02" type="text" maxlength="4" size="4" value="' . $row["pdf_mark02"] . '">
                          <button type="submit">save</button>
                          </form>
                        </td>';
                } else {
                  echo '<td>' . $row["pdf_mark02"] . '</td>';
                }

                if ($department == 'admin') {
                  echo '<td>
                          <form role="form" action="updatemark/update_pdf_mark03_exe.php" method="post">
                          <input type="hidden" name="pdf_markname" value="' . $id . '">
                          <input type="hidden" name="pdf_id" value="' . $row["pdf_id"] . '">
                          <input type="hidden" name="group_id" value="' . $row["group_id"] . '">
                          <input id="name" name="pdf_mark03" type="text" maxlength="4" size="4" value="' . $row["pdf_mark03"] . '">
                          <button type="submit">save</button>
                          </form>
                        </td>';
                } else {
                  echo '<td>' . $row["pdf_mark03"] . '</td>';
                }
                ?>

                <td><?= $marktotal; ?></td>
              </tr>

            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>

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