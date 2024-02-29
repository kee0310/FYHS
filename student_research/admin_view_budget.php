<!-- 
  This page are use to view and the student budget details. 

  Connected file:
    admin_researchApplication.php
-->

<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>学生课外实践活动</title>

  <!--Icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<style type="text/css">
  td,
  th {
    text-align: center;
    border: 1px solid grey;
    background: white;
  }

  th {
    background: #96c4f5;
  }

  .btn {
    border: 3px solid green;
    margin: 20px 10px;
    border-radius: 10px;
    color: black;
    background: white;
    text-align: center;
    padding: 5px;
    cursor: pointer;
    color: black;

    &:hover {
      background: gainsboro;
    }

    &:last-child {
      border: 3px solid red;
    }

  }

  a {
    text-decoration: none;
  }

  .submit-btn {
    background: #30a5ff;
    border: none;
    margin: 20px;
    padding: 5px 10px;
    color: white;
    cursor: pointer;

    &:hover {
      filter: brightness(90%);
    }
  }
</style>

<style>
  .popup {
    left: 50%;
    top: 25%;
    height: max-content;
    position: absolute;
    padding: 20px;
    border: solid 1px grey;
    border-radius: 15px;
    background-color: #ffffffed;
    transform: translate(-50%, -50%) scale(0);
    transition: transform 0.4s;
    z-index: 1000;
    margin-top: 50px;
  }

  .open-popup {
    visibility: visible;
    transform: translate(-50%, -50%) scale(1);
  }

  .close-popup {
    transform: translate(-50%, -50%) scale(0);
  }

  .closebtn {
    background-color: gainsboro;
    height: 10px;
    width: 10px;
  }
</style>

<body>

  <?php
  include('connect.php');

  $id = $_GET['id'];
  $result = mysqli_query(
    $conn,
    "SELECT a.research_topic , b.* 

      FROM zgroup_research a
    
      LEFT JOIN zstudent_detail b 
      ON a.group_id = b.student_id
      COLLATE utf8_unicode_ci
      
      WHERE a.group_id='$id'
    "
  );
  $row = mysqli_fetch_assoc($result)
  ?>

  <div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt; margin: 30px 20px;" align="center">
    <b style="border-bottom: 1px solid; padding: 3px"><?= isset($row["research_topic"]) ? $row["research_topic"] : null; ?></b>
  </div>

  <div class="panel-body">
    <table style="font-family: 楷体, KaiTi; font-size: 12pt;line-height: 1.4;width: 100%; border-collapse: collapse;" border="1">
      <col width=50>
      <col width=200>
      <col width=100>
      <col width=100>
      <thead>
        <tr>
          <th>序号</th>
          <th>项目</th>
          <th>审批</th>
          <th>数额（RM）</th>
        </tr>
      </thead>

      <tbody>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM zgroup_budget WHERE group_id='$id'");
        $i = 0;
        $total = 0;
        $budget_comment = "";

        while ($row = mysqli_fetch_array($result)) {
          $i++;
          $total += $row['budget_amount'];
          $budget_comment = $row['budget_comment'];
        ?>

          <tr>
            <td><?= $i; ?></td>
            <td><?= $row['budget_title']; ?></td>
            <td>
              <?php
              // display and allow status change by click
              echo '<a href="exe/change_status_individual.php?table=zgroup_budget&id=' . $row["budget_id"] . '&gid=' . $id . '&status=' . $row["status"] . '">';
              if ($row["status"] == null) {
                echo '<span style="color:blue">未审查</span>';
              } elseif ($row["status"] == 0) {
                echo '<span style="color:blue">待审查</span>';
              } elseif ($row["status"] == 1) {
                echo '<span style="color:red">不批准</span>';
              } elseif ($row["status"] == 2) {
                echo '<span style="color:green">批准</span>';
              } else {
                echo '<span>-</span>';
              }
              echo '</a>';
              ?>
            </td>
            <td><?= $row['budget_amount']; ?></td>
          </tr>
          <div id="popup" class="popup" class="panel panel-default">
            <span onclick="closePopup()" style="color: white; background-color: red; padding: 5px 8px; border-radius: 3px; opacity: 0.7;; cursor: pointer;"><i class="fa-solid fa-xmark"></i></span>
            <br><br><br>
            评语:
            <form action="exe/changebudgetcomment.php?id=<?= $row["budget_id"]; ?>&gid=<?= $id ?>" method="post" name="login">
              <textarea class="form-control" rows="4" cols="50" name="budget_comment"><?= $row['budget_comment'] ?></textarea>
              <div align="center"><button class="submit-btn" type="submit" style="">保存</button></div>
            </form>
          </div>

        <?php
        }
        ?>

        <tr>
          <td></td>
          <td></td>
          <td><b>总额</b></td>
          <td><b><?= $total; ?></b></td>
        </tr>
      </tbody>
    </table>


  </div>

  <?php
  $result = mysqli_query($conn, "SELECT * FROM zgroup_budget WHERE group_id='$id'");
  $row = mysqli_fetch_assoc($result)
  ?>

  <div style="font-family: 楷体, KaiTi; margin: 30px 20px; min-height: 50px">
    评语: <?= $row["budget_comment"]; ?> <span onclick="openPopup()" class="submit-btn" style="color: #30a5ff; background: none;"><i class="fa fa-pen"></i>修改</span>
  </div>

  <div>
    <div class="btn" onclick="window.location.href = 'exe/change_status.php?table=zgroup_budget&id=<?php echo $id; ?>&status=2'"><i class="fa-solid fa-check" style="color: green"></i> 一键批准</div>
    <div class="btn" onclick="window.location.href = 'exe/change_status.php?table=zgroup_budget&id=<?php echo $id; ?>&status=1'"><i class="fa-solid fa-xmark" style="color: red"></i> 一键不批准</div>
  </div>

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
  </script>

</body>

</html>