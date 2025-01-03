﻿<?php
include("exe/auth_admin.php");
include("header_admin.php");
include('connect.php');
?>

<!DOCTYPE html>
<html>

<head>
  <style type="text/css">
    td,
    th {
      text-align: center;
      vertical-align: middle;
    }

    .mark-col .fht-cell {
      min-width: 200px;
    }
  </style>

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


    <div class="panel panel-info" style="margin-top: 20px">
      <div class="panel-heading" style="font-family: 楷体, KaiTi; font-size: 16pt;line-height: 1.6; height:auto">
        学生名单分数
      </div>
      <div class="panel-body" style="font-family: 楷体, KaiTi; font-size: 12pt;line-height: 1.4;">
        分数1：20%：计划书<br>
        分数2：30%：实践报告（答辩前）<br>
        分数3：30%：答辩表现<br>
        分数4：10%：实践报告（答辩后）<br>
        分数5：10%：指导老师评分<br>
        总分：100%
      </div>
      <div class="panel-body ">
        <table data-toggle="table" data-pagination="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" style="font-family: 楷体, KaiTi; font-size: 12pt;line-height: 1.4;">
          <thead>
            <tr>
              <th data-sortable="true">年份</th>
              <th data-sortable="true">队伍编号</th>
              <th data-sortable="true">职位</th>
              <th data-sortable="true">学号</th>
              <th data-sortable="true">班级</th>
              <th data-sortable="true">姓名</th>
              <th data-sortable="true">项目</th>
              <th data-sortable="true">指导老师</th>
              <th class="mark-col" data-sortable="true">各项分数（%）</th>
              <th data-sortable="true">总分</th>
              <th data-sortable="true">等级</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $result = mysqli_query($conn, "SELECT * FROM zstudent_mark_2023 ORDER BY group_id ASC");
            while ($row = mysqli_fetch_array($result)) {
              // count mark
              $mark01 = $row['mark_pdf01'] + $row['mark_pdf02'] + $row['mark_pdf03'];
              $mark02 = ($row['mark_report01'] + $row['mark_report02'] + $row['mark_report03']) / 3;
              $mark03 = ($row['mark_present01'] + $row['mark_present02'] + $row['mark_present03']) / 3;
              $totalmark = $mark01 + $mark02 + $mark03 + $row['mark_finalreport'] + $row['mark_individual'];
            ?>

              <tr>
                <td><?php echo $row['year']; ?></td>
                <td>
                  <?php echo $row['group_id']; ?><br>
                  <a href="resource/<?php echo $row['year']; ?>/proposal/<?php echo $row['group_id']; ?>p.pdf" target="_blank">Proposal</a><br>
                  <a href="resource/<?php echo $row['year']; ?>/report/<?php echo $row['group_id']; ?>r.pdf" target="_blank">Report</a><br>
                  <a href="resource/<?php echo $row['year']; ?>/finalreport/<?php echo $row['group_id']; ?>f.pdf" target="_blank">FinalReport</a>
                </td>
                <td><?php echo $row['mark_role']; ?></td>
                <td><?php echo $row['student_id']; ?></td>
                <td><?php echo $row['student_class']; ?></td>
                <td><?php echo $row['student_name']; ?></td>
                <td><?php echo $row['mark_topic']; ?><br><?php echo $row['mark_topiceg']; ?></td>
                <td><?php echo $row['mark_teacher']; ?></td>

                <td>
                  <div style="display: flex; ">
                    <div style="width: 50%">
                      <div style="border-bottom: 1px solid gainsboro; border-right: 1px solid gainsboro; width: 100%">计划书:</div>
                      <div style="border-bottom: 1px solid gainsboro; border-right: 1px solid gainsboro;">报告:</div>
                      <div style="border-bottom: 1px solid gainsboro; border-right: 1px solid gainsboro;">答辩:</div>
                      <div style="border-bottom: 1px solid gainsboro; border-right: 1px solid gainsboro;">最终报告:</div>
                      <div style="border-right: 1px solid gainsboro;">老师评分:</div>
                    </div>

                    <div style="width: 50%">
                      <div style="border-bottom: 1px solid gainsboro;"><?php echo round($mark01, 1); ?></div>
                      <div style="border-bottom: 1px solid gainsboro;"><?php echo round($mark02, 1); ?></div>
                      <div style="border-bottom: 1px solid gainsboro;"><?php echo round($mark03, 1); ?></div>
                      <div style="border-bottom: 1px solid gainsboro;"><?php echo $row['mark_finalreport']; ?></div>
                      <div><?php echo $row['mark_individual']; ?></div>
                    </div>
                  </div>
                </td>

                <td><?php echo round($totalmark, 1) . '%'; ?></td>

                <td><?php echo $row['mark_grade']; ?></td>

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