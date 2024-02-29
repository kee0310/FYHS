<!-- 
  This page are use to display all student application form. 
  And allow admin to change it status, editable status and make comment.
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

  <title>学生课外实践活动 | 申请表</title>

</head>

<style type="text/css">
  .change_edit {
    display: grid;
    text-align: center;
    gap: 5px;
    height: 100%;
    background: inherit;

    & a {
      border: 1px solid gainsboro;
      padding: 5px;
      border-radius: 20px;
      background: inherit;

      &:hover {
        filter: brightness(90%);
        text-decoration: none;
      }

      &:first-child {
        color: green;
      }

      &:nth-child(2) {
        color: red;
      }

      &:last-child {
        color: blue;
      }
    }
  }

  .printbtn {
    color: #30a5ff;
    cursor: pointer;

    &:hover {
      text-decoration: underline;
    }
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
      <div class="panel-heading">各项实践计划申请表</div>

      <div class="panel-body">
        <table data-toggle="table" data-pagination="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
          <thead>
            <tr>
              <th data-sortable="true">队伍编号</th>
              <th data-sortable="true">项目名称</th>
              <th data-sortable="true">学习方向</th>
              <th data-sortable="true">指导老师</th>
              <th data-sortable="true">&emsp;审核状态&emsp;</th>
              <th data-sortable="true">填写日期</th>
              <th data-sortable="true">允许删除</th>
              <th data-sortable="true">评语</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM zgroup_research a ORDER BY `status`, research_date");
            while ($row = mysqli_fetch_array($result)) {
            ?>

              <tr>
                <td><?= $row["group_id"]; ?></td>
                <td>
                  <div class="printbtn" style="" name="btnChangeSource" onclick="window.open('admin_view_topic.php?id=<?= $row['group_id']; ?>')"><?= $row["research_topic"]; ?></div>
                </td>
                <td><?= $row["research_direct"]; ?></td>
                <td><?= $row["teacher_name"]; ?></td>
                <td style="text-align: center">
                  <div style=" text-align: center;">
                    <?php
                    // display and allow status change by click
                    if ($row["status"] == null) {
                      echo '<b style="color:blue; font-family: kaiti; font-size: larger">未审查</b>';
                    } elseif ($row["status"] == 0) {
                      echo '<b style="color:blue; font-family: kaiti; font-size: larger"">待审查</b>';
                    } elseif ($row["status"] == 1) {
                      echo '<b style="color:red; font-family: kaiti; font-size: larger"">不批准</b>';
                    } elseif ($row["status"] == 2) {
                      echo '<b style="color:green; font-family: kaiti; font-size: larger"">已批准</b>';
                    } else {
                      echo '<span>-</span>';
                    }
                    ?>
                  </div>
                  <br>
                  <div class="change_edit">
                    <a href="exe/change_status.php?table=zgroup_research&id=<?= $row["group_id"]; ?>&status=2">批准</a>
                    <a href="exe/change_status.php?table=zgroup_research&id=<?= $row["group_id"]; ?>&status=1">不批准</a>
                    <a href="exe/change_status.php?table=zgroup_research&id=<?= $row["group_id"]; ?>&status=0">待审查</a>
                  </div>
                </td>
                <td><?= $row["research_date"]; ?></td>

                <?php
                if ($row["editable"] == 1) {
                  echo '<td><a href="exe/change_editable.php?table=zgroup_research&id=' . $row["group_id"] . '&editable=0"><span style="color:green">能够</span></a></td>';
                } elseif ($row["editable"] == 0) {
                  echo '<td><a href="exe/change_editable.php?table=zgroup_research&id=' . $row["group_id"] . '&editable=1"><span style="color:red">不能够</span></a></td>';
                } else {
                  echo '<td>Error</td>';
                }
                ?>

                <td>
                  <form action="changecomment01.php" method="post" name="login">
                    <input class="form-control" type="hidden" name="id" value="<?= $row["group_id"]; ?>" />
                    <textarea class="form-control" rows="4" cols="80" name="teacher_comment"><?= $row["teacher_comment"]; ?></textarea>
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

        <div id="frPDF" style="display: none;">The div that should be appended</div>
      </div>
    </div>
  </div><!--/.main-->
  <!--
  <script>
    function printPdf(id) {
      let div = document.querySelector("#frPDF");
      div.outerHTML = '<iframe id="frPDF" style="display: none;" src="admin_view_topic.php?id=' + id + '" frameborder="0"></iframe>'

      let iframe = document.frames ? window.frames.frames["frPDF"] : document.getElementById("frPDF");
      let ifWin = iframe.contentWindow || iframe;

      try {
        ifWin.focus();
        ifWin.print();
      } catch (e) {
        window.print(false);
      }

      return false;
    }
  </script>
-->
</body>

</html>