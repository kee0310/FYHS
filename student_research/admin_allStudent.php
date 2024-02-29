<!-- 
  This page are use to display all student within the system. 
  Mainly use to check the haven't grouped student. 
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

  <title>学生课外实践活动 | 学生账号</title>

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
      <div class="panel-heading">学生账号
        <?php
        $result = mysqli_query(
          $conn,
          "SELECT count(*) AS `total`, (SELECT count(*) FROM zstudent_group) AS `target`  FROM zstudent_detail"
        );
        $row = mysqli_fetch_array($result);
        echo '（已组队：' . $row["target"] . ' / ' . $row["total"] . '）';
        ?>
      </div>

      <div class="panel-body">
        <table data-toggle="table" data-pagination="true" data-search="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true">
          <thead>
            <tr>
              <th data-sortable="true">学号</th>
              <th data-sortable="true">班级</th>
              <th data-sortable="true">姓名</th>
              <th data-sortable="true">身份证号码</th>
              <th data-sortable="true">新密码</th>
              <th data-sortable="true">电邮</th>
              <th data-sortable="true">登入状态</th>
              <th data-sortable="true">组队状态</th>
              <th data-sortable="true">队伍编号</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $result = mysqli_query(
              $conn,
              "SELECT a.*, b.group_id  

                FROM zstudent_detail a

                LEFT JOIN zstudent_group b
                ON a.student_id = b.student_id
                
                ORDER BY b.group_id ASC, a.student_id ASC
              "
            );
            while ($row = mysqli_fetch_array($result)) {
            ?>

              <tr>
                <td><?= $row["student_id"] ?></td>
                <td><?= $row["student_class"] ?></td>
                <td><?= $row["student_name"] ?></td>
                <td><?= $row["student_password"] ?></td>
                <td><?= isset($row["student_password_new"]) ? $row["student_password_new"] : '-'; ?></td>
                <td><?= $row["student_email"] ?></td>
                <?php
                if ($row["student_tf"] == 1) {
                  echo '<td><span style="color:red">未登入</span></td>';
                } else {
                  echo '<td><span style="color:green">已登入</span></td>';
                }

                if ($row["group_id"] == null) {
                  echo '<td><span style="color:red">未完成</span></td>';
                } else {
                  echo '<td><span style="color:green">已完成</span></td>';
                }
                ?>
                <td><?= isset($row["group_id"]) ? $row["group_id"] : '-'; ?></td>
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