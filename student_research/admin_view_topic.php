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

  <style>
    .f {
      font-family: 楷体, KaiTi;
      font-size: 13pt;
      line-height: 1.6;
    }

    .g {
      font-family: 楷体, KaiTi;
      font-size: 13pt;
      line-height: 1.6;
      padding-left: 5px;
    }

    .h {
      font-family: 楷体, KaiTi;
      font-size: 13pt;
      line-height: 1.2;
      padding-left: 5px;
      padding-right: 5px;
    }
  </style>
</head>

<body onload="window.print()">

  <table style="width: 100%">
    <tbody>
      <tr>
        <td>


          <table style="width: 100%; border-collapse: collapse;" border="1">
            <thead>
              <tr>
                <th style="font-family: 楷体, KaiTi; font-size: 16pt; line-height: 1.6;" colspan="2"><?php echo date("Y"); ?>年实践活动计划申请表</th>
              </tr>


              <?php
              $id = $_GET['id'];
              $result = mysqli_query($conn, "SELECT * FROM zgroup_research WHERE  group_id = $id");

              while ($row = mysqli_fetch_array($result)) {
              ?>

                <tr>
                  <td style="width: 20%" class="f" align="center">队伍编号</td>
                  <td class="g" align="justify">
                    <?php echo  $row["group_id"]; ?>
                </tr>
                <tr>
                  <td class="f" align="center">项目名称</td>
                  <td class="g" align="justify">
                    <?php echo $row["research_topic"]; ?><br>
                    <?php echo $row["research_topic_en"]; ?>
                  </td>
                </tr>
                <tr>
                  <td class="f" align="center">学习方向</td>
                  <td class="g" align="justify">
                    <?php echo $row["research_direct"]; ?><br>
                    <?php echo $row["research_tag"]; ?>
                  </td>
                </tr>
                <tr>
                  <td class="f" align="center">项目简介</td>
                  <td class="h" align="justify"><?php echo $row["research_desc"]; ?></td>
                </tr>
                <tr>
                  <td class="f" align="center">指导老师</td>
                  <td class="g" align="justify"><?php echo $row["teacher_name"]; ?></td>
                </tr>
                <tr>
                  <td class="f" align="center">评语</td>
                  <td class="g" align="justify"><?php echo $row["teacher_comment"]; ?></td>
                </tr>
                <tr>
                  <td class="f" align="center">填写日期</td>
                  <td class="g" align="justify"><?php echo $row["research_date"]; ?></td>
                </tr>
              <?php
              }
              ?>

            </thead>
          </table>
        </td>

      </tr>
    </tbody>
  </table>

</body>

</html>