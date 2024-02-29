<!-- 
  This page are use to display all grouped student and their group detail. 
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

  <title>学生课外实践活动 | 组别排列</title>

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
      <div class="panel-heading">组别排列</div>

      <div class="panel-body">
        <table data-toggle="table" data-pagination="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
          <thead>
            <tr>
              <th data-sortable="true">队伍编号</th>
              <th data-sortable="true">职位</th>
              <th data-sortable="true">班级</th>
              <th data-sortable="true">学号</th>
              <th data-sortable="true">姓名</th>
              <th data-sortable="true">登入状态</th>
              <th data-sortable="true">组队时间</th>
            </tr>
          </thead>

          <tbody>

            <?php
            $result = mysqli_query(
              $conn,
              "SELECT a.*, b.student_name, b.student_class, b.student_tf

                FROM zstudent_group a
                
                LEFT JOIN zstudent_detail b ON a.student_id = b.student_id
                
                ORDER BY a.group_id, a.group_leader DESC, a.group_time 
              "
            );
            while ($row = mysqli_fetch_array($result)) {
            ?>

              <tr>
                <td><?= $row["group_id"] ?></td>
                <td>
                  <?php
                  if ($row["group_leader"] == 1) {
                    echo '<span style="color:red">组长</span>';
                  } else {
                    echo '<span style="color:green">组员</span>';
                  }
                  ?>
                </td>
                <td><?= $row["student_class"] ?></td>
                <td><?= $row["student_id"] ?></td>
                <td><?= $row["student_name"] ?></td>
                <td>
                  <?php
                  if ($row["student_tf"] == 1) {
                    echo '<span style="color:red">未登入</span>';
                  } else {
                    echo '<span style="color:green">已登入</span>';
                  }
                  ?>
                </td>
                <td><?= $row["group_time"] ?></td>
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