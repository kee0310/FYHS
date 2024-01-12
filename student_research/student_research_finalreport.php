<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>综合实践活动课程</title>

  <?php
  session_start();
  include('connect.php');;
  include("exe/auth.php");
  include("exe/auth_student_leader.php");

  //$result = mysqli_query($conn, "SELECT admin_survey_onoff from zadmin_detail");
  //$data = mysqli_fetch_assoc($result);

  $surveyonoff = 0; //$data['admin_survey_onoff']

  if ($surveyonoff == 1) {
    include("header_student_survey_on.php");
  } elseif ($surveyonoff == 0) {
    include("header_student.php");
  }
  ?>
</head>

<style>
  input[type="text"] {
    color: black;
    width: 100%;
  }
</style>

<body>

  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="student_index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="">最终报告</a></li>
      </ol>
    </div>


    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading" align="center">上传最终活动报告（修改后）</div>

        <div class="panel-body">

          <?php
          date_default_timezone_set("Asia/Kuala_Lumpur");
          $date = date('YmdHis', time());

          $start_time_view   = 20230301000000;
          $end_time_view     = 20251025235900;

          $id = $_SESSION['id'];
          $result = mysqli_query($conn, "SELECT count(*) as total, pdf_allow_edit from zgroup_finalreport where group_id='$id'");
          $data = mysqli_fetch_assoc($result);

          $totalapply = $data['total'];
          $pdf_allow_edit = $data['pdf_allow_edit'];

          if ($start_time_view > $date) {
            echo "还未开放上载：-";
          } elseif ($end_time_view < $date) {
            echo "上载已经截止：-";
          } elseif ($totalapply >= 1) {
            if ($pdf_allow_edit == 1) {
              echo "已完成上载最终报告。如需修改最终报告，请将现有的最终报告删除。";
              echo '<a href="exe/delete_student_finalreport.php?id=' . $id . '" title="删除最终报告">删除最终报告</a>';
            } else {
              echo "已完成上载最终报告。如需修改最终报告，请将现有的最终报告删除。";
              echo '<span style="color: red">无法删除最终报告</span>';
            }
          } else {
          ?>

            <form action="exe/add_student_finalreport.php" method="post" enctype="multipart/form-data">
              <p>请将最终的活动报告（修改后）存成 PDF 档案。</p>

              <div class="panel-body">
                <p>档案命名：<span style="color:red"></span>组长学号 + finalreport</p>
                <p>例：162001finalreport</p>
                <br>
                <input type="file" name="file" accept=".pdf" /><br>
              </div>
              <br>
              <div>提交日期：2023年8月1日（星期二） 至 2023年9月23日（星期六）</div>

              <div align="center"><button type="submit" name="btn-upload" class="submit-btn">upload</button></div>
            </form>

          <?php
          }
          ?>

        </div>
      </div>
    </div>

    <!-- Change research topic -->
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading" align="center">修改项目名称</div>

        <div class="panel-body">

          <?php
          $result = mysqli_query($conn, "SELECT * FROM zgroup_research a LEFT JOIN zstudent_group b ON a.group_id=b.group_id COLLATE utf8_unicode_ci WHERE b.student_id='$id'");
          $num_rows = mysqli_num_rows($result);

          // if research existed, display change form
          if ($num_rows != 0) {
            while ($row = mysqli_fetch_array($result)) {
              $group_id = $row['group_id'];
          ?>

              <form role="form" action="" method="post" enctype="multipart/form-data">

                <p>
                  请各组组长针对项目名称进行修正，请留意<br>
                  （1）名称将打印在成绩册，使用字眼请务必正确 / 准确。<br>
                  （2）英文名称需与中文名称相符。<br>
                  （3）如无法自行翻译英文名称，请向英文老师寻求协助。
                </p>
                <br>
                <input type="hidden" name="student_id" value="<?php echo $id ?>">
                <div>中文：</div>
                <input type="text" name="research_topic" value="<?php echo $row['research_topic'] ?>" />
                <br><br>
                <div>英文：</div>
                <input type="text" name="research_topic_en" value="<?php echo $row['research_topic_en'] ?>" oninput="this.setCustomValidity(''); this.value = this.value.toUpperCase()" />

                <?php
                if (isset($_REQUEST['research_topic']) or isset($_REQUEST['research_topic_en'])) {
                  $research_topic = $_REQUEST['research_topic'];
                  $research_topic_en = $_REQUEST['research_topic_en'];

                  // update research_topic if is leader
                  if ($group_id == $id) {
                    mysqli_query($conn, "UPDATE zgroup_research SET research_topic='$research_topic', research_topic_en='$research_topic_en' WHERE group_id='$id'");
                    echo "<meta http-equiv=REFRESH CONTENT=1;url=student_index.php>";
                    exit();
                  } else {
                    // prompt message for member
                    echo '<script>alert("组员无法进行添加 / 修改")</script>';
                  }
                }
                ?>
                <br><br>

                <div align="center"><button type="submit" name="btn-upload" class="submit-btn">保存</button></div>
              </form>

            <?php
            }

            // dislay if research not existed
          } else {
            ?>

            <div align="center" style="font-size: larger"><b>暂无</b>
              <p style="font-size: 18px; font-weight: 500">请组长填写活动申请表格</p>
              <?php
              // redirect to application form if is leader
              if ($group_id == $id) {
                echo '<a href="student_research_report.php" class="btn btn-primary" style="font-size: larger; margin: 10px">开始填写 <i class="fa-solid fa-pen" style="transform: scale(0.8)"></i></a>';
              }
              ?>
            </div>

          <?php
          }
          ?>

        </div>
      </div>
    </div>

</body>

</html>