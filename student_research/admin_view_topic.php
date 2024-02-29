<!-- 
  This page are use to view and print the student application details. 

  Connected file:
    admin_researchApplication.php
-->

<?php
include("exe/auth_admin.php");
include('connect.php');
?>

<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>学生课外实践活动</title>

</head>

<style>
  td {
    font-family: 楷体, KaiTi;
    font-size: 13pt;
    padding: 5px 10px;
    line-height: 1.6;

    &:first-child {
      text-align: center;
    }
  }
</style>

<body onload="window.print()">

  <table style="width: 100%; border-collapse: collapse;" border="1">
    <tr>
      <th style="font-family: 楷体, KaiTi; font-size: 16pt; line-height: 1.6;" colspan="2"><?php echo date("Y"); ?>年实践活动计划申请表</th>
    </tr>

    <?php
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM zgroup_research WHERE group_id = $id");
    while ($row = mysqli_fetch_array($result)) {
    ?>

      <tr>
        <td style="width: 20%">队伍编号</td>
        <td>
          <?= $row["group_id"]; ?>
      </tr>
      <tr>
        <td>项目名称</td>
        <td>
          <?= $row["research_topic"]; ?><br>
          <?= $row["research_topic_en"]; ?>
        </td>
      </tr>
      <tr>
        <td>学习方向</td>
        <td>
          <?= $row["research_direct"]; ?><br>
          <?= $row["research_tag"]; ?>
        </td>
      </tr>
      <tr>
        <td>项目简介</td>
        <td><?= $row["research_desc"]; ?></td>
      </tr>
      <tr>
        <td>指导老师</td>
        <td><?= $row["teacher_name"]; ?></td>
      </tr>
      <tr>
        <td>评语</td>
        <td><?= $row["teacher_comment"]; ?></td>
      </tr>
      <tr>
        <td>填写日期</td>
        <td><?= $row["research_date"]; ?></td>
      </tr>

    <?php
    }
    ?>

  </table>

</body>

</html>