<?php
require('../connect.php');
include("../exe/auth_admin.php");
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>高一实践活动课程</title>

</head>

<style>
  table,
  th,
  td {
    font-family: 楷体, KaiTi;
    font-size: 10pt;
    border: 1px solid black;
    border-collapse: collapse;
    padding: 10px;

    & ol {
      margin: 0;
      padding: 0;
      padding-left: 20px;
    }
  }
</style>

<body>
  <div style="width: 100%" align="center">
    <img src="../img/fylogo1.jpg" style="width: 25%;height:auto">
    <p style="line-height: 1.3;">高一实践活动课程：答辩与报告评估表 Presentation and Report Evaluation Form</p>
  </div>

  <div style="height: 100px; font-family: 楷体, KaiTi; font-size: 12pt; line-height: 1.2; border: 3px ridge grey; padding: 2px 10px; margin-bottom: 20px">
    <?php
    $group_id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM zgroup_research a WHERE a.group_id='$group_id'");

    while ($row = mysqli_fetch_array($result)) {
    ?>
      队伍编号：<?= $row["group_id"]; ?>
      <br>
      指导老师：<?= $row["teacher_name"]; ?>
      <br>
      项目名称：<?= $row["research_topic"]; ?>
      <br>
      <div style="padding-left: 81px"><?= $row["research_topic_en"]; ?></div>
    <?php
    }
    ?>
  </div>

  <table width="100%">
    <tr style="height: 171px">
      <td colspan="2" style="vertical-align: top;">
        <?php
        $result = mysqli_query(
          $conn,
          "SELECT *
          
          FROM zstudent_group a
          
          LEFT JOIN zstudent_detail b 
          ON a.student_id=b.student_id

          where a.group_id='$group_id'
          
          ORDER BY a.group_leader DESC
			  "
        );
        while ($row = mysqli_fetch_array($result)) {
        ?>

          <?php
          if ($row['group_leader'] == 1) {
            echo "组长 Group Leader  ";
          } else {
            echo "组员 Member  ";
          }
          ?>
          学号：<?php echo $row['student_id']; ?>
          姓名：<?php echo $row['student_name']; ?>
          班级：<?php echo $row['student_class']; ?><br>

        <?php
        }
        ?>
      </td>
    </tr>
    <tr align="center">
      <td style="width:50%;">项目（答辩）Presentation</td>
      <td>备注 Comment</td>
    </tr>
    <tr>
      <td>
        <ol>
          <li>呈现内容清晰有条理、内容丰富。<br>The presentation was concise and informative. </li>
          <li>呈现内容包含实际例子和成果。<br>The presentation contained practical examples and result.</li>
          <li>演讲者以清晰、结构化的方式讲述了内容。<br>The presenter delivered the material in a clear and structured manner.</li>
          <li>演讲者对这个主题非常了解，并且了解相关问题。<br>The presenter was knowledgeable about the topic and any related issues.</li>
          <li>演讲者有效地回答问题。<br>The presenter answered questions effectively.</li>
          <li>演讲者有效地组织和准备。<br>The presenter was well organized and prepared.</li>
        </ol>
      </td>
      <td></td>
    </tr>
    <tr>
      <td>
        总的来说，我对此演示的评价是：<br>Overall, I would rate this presentation as:
      </td>
      <td align="center">分数Mark：（&nbsp;&nbsp;&nbsp;/30）</td>
    </tr>
    <tr align="center">
      <td style="width:50%;">项目（报告）Report</td>
      <td>备注 Comment</td>
    </tr>
    <tr>
      <td>
        <ol>
          <li>报告格式与架构<br>Report Format and Structure</li>
          <li>报告内容<br>Content</li>
          <li>语法<br>Grammar</li>
          <li>参考文献<br>Reference and Citation</li>
        </ol>
      </td>
      <td></td>
    </tr>
    <tr>
      <td>
        总的来说，我对此报告的评价是：<br>Overall, I would rate this report as:
      </td>
      <td align="center">分数Mark：（&nbsp;&nbsp;&nbsp;/30）</td>
    </tr>
    <tr>
      <td style="width:50%;padding: 5px;line-height: 2.2;" align="justify">其他评语 Additional Comments:</td>
      <td align="center"></td>
    </tr>
    <tr>
      <td style="padding: 5px;line-height: 2.2;" align="justify">评审姓名 / 签名 / 日期：Name / Signature / Date:</td>
      <td align="center"></td>
    </tr>
  </table>

</body>

</html>