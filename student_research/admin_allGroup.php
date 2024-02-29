<!-- 
  This page are use to display all groups and count it's total member. 
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

  <title>学生课外实践活动 | 组员人数</title>


</head>

<style>
  td {
    content: '-';
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
      <div class="panel-heading">组员人数
        <?php
        $result = mysqli_query($conn, "SELECT count(*) AS `total`, (SELECT count(*) FROM zgroup_research) AS `target` FROM zstudent_group WHERE student_id = group_id");
        $row = mysqli_fetch_array($result);
        echo '（已收集申请表：' . $row["target"] . ' / ' . $row["total"] . '）';
        ?>
      </div>

      <div class="panel-body">
        <table data-toggle="table" data-pagination="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
          <thead>
            <tr>
              <th data-sortable="true">队伍编号</th>
              <th data-sortable="true">组长姓名</th>
              <th data-sortable="true">班级</th>
              <th data-sortable="true">申请项目名称</th>
              <th data-sortable="true">指导老师</th>
              <th data-sortable="true">人数</th>
              <th data-sortable="true">人数状态</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $result = mysqli_query(
              $conn,
              "SELECT count(a.group_id) AS num, a.group_id, b.student_name, b.student_class, c.research_topic, c.teacher_name
                
                FROM zstudent_group a
                
                LEFT JOIN zstudent_detail b
                ON a.student_id = b.student_id
                
                LEFT JOIN zgroup_research c
                ON a.group_id = c.group_id

                COLLATE utf8_unicode_ci
                
                GROUP BY a.group_id
                ORDER BY num, a.group_id
              "
            );
            while ($row = mysqli_fetch_array($result)) {
            ?>

              <tr>
                <td><?= $row["group_id"] ?></td>
                <td><?= $row["student_name"] ?></td>
                <td><?= $row["student_class"] ?></td>
                <td><?= isset($row["research_topic"]) ? $row["research_topic"] : '-'; ?></td>
                <td><?= isset($row["teacher_name"]) ? $row["teacher_name"] : '-'; ?></td>
                <td><?= $row["num"] ?></td>
                <td>
                  <?php
                  if ($row["num"] >= 11) {
                    echo '<span style="color:red">超出</span>';
                  } elseif ($row["num"] <= 3) {
                    echo '<span style="color:blue">不足</span>';
                  } else {
                    echo '<span style="color:green">完成</span>';
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