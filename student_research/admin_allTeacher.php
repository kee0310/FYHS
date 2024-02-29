<!-- 
  This page are use to display all teachers and the number of their groups.
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

  <title>学生课外实践活动 | 老师组别人数</title>

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
      <div class="panel-heading">老师组别人数</div>

      <div class="panel-body">
        <table data-toggle="table" data-pagination="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
          <thead>
            <tr>
              <th data-sortable="true">老师姓名</th>
              <th data-sortable="true">老师编号</th>
              <th data-sortable="true">组别数量</th>
              <th data-sortable="true">状态（超出 / 达到上线）</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $result = mysqli_query(
              $conn,
              "SELECT a.*, (SELECT count(*) FROM zgroup_research b WHERE b.teacher_name = a.teacher_name) AS total
                FROM zteacher_detail a

                ORDER BY total DESC
              "
            );
            while ($row = mysqli_fetch_array($result)) {
            ?>

              <tr>
                <td><?= $row["teacher_name"]; ?></td>
                <td><?= $row["teacher_id"]; ?></td>
                <td><?= $row["total"]; ?></td>
                <td>
                  <?php
                  if ($row["total"] > 4) {
                    echo '<span style="color:red">超出</span>';
                  } elseif ($row["total"] == 4) {
                    echo '<span style="color:green">达到上线</span>';
                  } else {
                    echo '-';
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