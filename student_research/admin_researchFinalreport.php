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

  <title>学生课外实践活动 | 最终报告</title>

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
      <div class="panel-heading">各项实践最终报告：10%</div>

      <div class="panel-body">
        <table data-toggle="table" data-pagination="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
          <thead>
            <tr>
              <th data-sortable="true">序号</th>
              <th data-sortable="true">队伍编号</th>
              <th data-sortable="true">中文项目名称</th>
              <th data-sortable="true">英文项目名称</th>
              <th data-sortable="true">指导老师</th>
              <th data-sortable="true">活动报告</th>
              <th data-sortable="true">允许删除</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $result = mysqli_query(
              $conn,
              " SELECT b.group_id, b.research_topic, b.research_topic_en, b.teacher_name, a.*
                
                FROM zgroup_finalreport a

                LEFT JOIN zgroup_research b ON a.group_id = b.group_id
                COLLATE utf8_unicode_ci
							"
            );
            $i = 0;

            while ($row = mysqli_fetch_array($result)) {
              $i++;
            ?>

              <tr>
                <td><?= $i; ?></td>
                <td><?= $row["group_id"]; ?></td>
                <td><?= $row["research_topic"]; ?></td>
                <td><?= $row["research_topic_en"]; ?></td>
                <td><?= $row["teacher_name"]; ?></td>
                <td><a href="pdf/finalreport/<?= $row["pdf_file"]; ?>" target="_blank"><?= $row["pdf_file"]; ?></a></td>
                <td>
                  <?php
                  if ($row["editable"] == 1) {
                    echo '<a href="exe/change_editable.php?table=zgroup_finalreport&id=' . $row["group_id"] . '&editable=0"><span style="color:green">能够</span></a>';
                  } elseif ($row["editable"] == 0) {
                    echo '<a href="exe/change_editable.php?table=zgroup_finalreport&id=' . $row["group_id"] . '&editable=1"><span style="color:red">不能够</span></a>';
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

  </div><!--/.main-->

</body>

</html>