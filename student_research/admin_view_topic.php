<?php
include('connect.php');;
include("exe/auth_admin.php");
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
        <td style="width: 50%;vertical-align: top;">


          <table style="width: 100%; border-collapse: collapse;" border="1">
            <thead>
              <tr>
                <th style="font-family: 楷体, KaiTi; font-size: 16pt; line-height: 1.6;font-weight: bold;width: 20%" colspan="2">2024 年实践活动计划申请表</th>
              </tr>


              <?php
              include('../connect.php');

              $id = $_GET['id'];
              $result = mysqli_query($conn, "
							
              SELECT *,
              
                RANK () OVER ( 
                PARTITION BY research_status
                ORDER BY group_id ASC
                ) group_rank
              
              FROM zgroup_research a

              LEFT JOIN zteacher_detail b
              ON a.teacher_id = b.teacher_id

              ");
              while ($row = mysqli_fetch_array($result)) {
              ?>

                <tr>
                  <td style="width: 20%" class="f" align="center">成员</td>
                  <td class="g" align="justify">
                    <?php
                    $group_id =  $row["group_id"];
                    echo '队伍编号: ' . $group_id . '<br><br>';

                    $result2 = mysqli_query($conn, "SELECT * FROM zstudent_detail a
                      LEFT JOIN zstudent_group b
                      ON a.student_id = b.student_id

                      WHERE b.group_id='$group_id'
                      ");
                    while ($row2 = mysqli_fetch_array($result2)) {
                      echo $row2["student_id"] . ' ' . $row2["student_class"] . ' ' . $row2["student_name"] . '<br>';
                    }
                    ?>
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
                  <td class="g" align="justify"><?php echo $row["research_start_date"]; ?></td>
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