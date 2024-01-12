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

<body>

  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="student_index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="">计划书</a></li>
      </ol>
    </div>

    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading" align="center">活动计划书</div>

        <div class="panel-body">

          <?php
          date_default_timezone_set("Asia/Kuala_Lumpur");
          $date = date('YmdHis', time());

          $start_time_view   = 20230301000000;
          $end_time_view     = 20240425235900;

          $id = $_SESSION['id'];
          $result = mysqli_query($conn, "SELECT count(*) as total,pdf_allow_edit from zgroup_proposal where group_id='$id'");
          $data = mysqli_fetch_assoc($result);

          $totalapply = $data['total'];
          $pdf_allow_edit = $data['pdf_allow_edit'];


          if ($start_time_view > $date) {
            echo "还未开放上载：2023年3月1日（星期三） 至 2023年3月25日（星期六）";
          } elseif ($end_time_view < $date) {
            echo "上载已经截止：2023年3月1日（星期三） 至 2023年3月25日（星期六）";
          } elseif ($totalapply >= 1) {

            if ($pdf_allow_edit == 1) {
              echo "已完成上载计划书。如需修改计划书，请将现有的计划书删除。";
              echo '<a href="exe/delete_student_proposal.php?id=' . $id . '" title="删除计划书">删除计划书</a>';
            } else {
              echo "已完成上载计划书。如需修改计划书，请将现有的计划书删除。";
              echo '<span style="color: red">无法删除计划书</span>';
            }
          } else {
          ?>

            <form action="exe/add_student_proposal.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <p>
                  计划书内容包括：<br>
                  &ensp;• 绪论（计划背景与目的）。<br>
                  &ensp;• 执行方法的构思与计划。<br>
                  &ensp;• 涉及的预算案。<br>
                </p><br>
                <p>请将活动计划书保存成 PDF 档案。</p><br>

                <div class="panel-body">
                  <p>档案命名：<span style="color:red">组长学号</span> + proposal</p>
                  <p>例：162001proposal</p><br>
                  <input type="file" name="file" accept=".pdf" style="margin-left: 20px" />
                </div><br>

                <p>提交日期：2023 / 3 / 1 (三)&emsp;至&emsp;2023 / 3 / 25 (六)</p><br>

                <label style="cursor: pointer; display: flex; gap: 20px;">
                  <input type="checkbox" required>此预算案已获得小组成员全员认可并同意呈交。
                </label>

                <label style="cursor: pointer; display: flex; gap: 20px;">
                  <input type="checkbox" required>此计划书已获得指导老师审批并赞同呈交。
                </label>

                <div align="center"><button class="submit-btn" type="submit" name="btn-upload">上传计划书</button></div>
              </div>
            </form>

          <?php
          }
          ?>

        </div>
      </div>
    </div>
  </div>

</body>

</html>