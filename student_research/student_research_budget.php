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
  include("header_student.php");
  ?>

</head>

<body>

  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="student_index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="">预算案</a></li>
      </ol>
    </div>

    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading" align="center">活动预算案</div>
        <div class="panel-body">

          <?php
          date_default_timezone_set("Asia/Kuala_Lumpur");
          $date = date('YmdHis', time());

          $start_time_view   = 20230301000000;
          $end_time_view     = 20240425235900;

          $id = $_SESSION['id'];
          $result = mysqli_query($conn, "SELECT count(*) as total,budget_allow_edit from zgroup_budget where group_id='$id'");
          $data = mysqli_fetch_assoc($result);

          $totalapply = $data['total'];
          $budget_allow_edit = $data['budget_allow_edit'];


          if ($start_time_view > $date) {
            echo "还未开放填写：2023年3月01日（星期三） 至 2023年3月25日（星期六）";
          } elseif ($end_time_view < $date) {
            echo "填写已经截止：2023年3月01日（星期三） 至 2023年3月25日（星期六）";
          } elseif ($totalapply >= 1) {

            if ($budget_allow_edit == 1) {
              echo "已完成填写预算案。如需修改，请将现有的预算案删除。";
              echo '<a href="exe/delete_add_student_budget.php?id=' . $id . '" title="删除预算案">删除预算案</a>';
            } else {
              echo "已完成填写预算案。如需修改，请将现有的预算案删除。";
              echo '<span style="color: red">无法删除预算案</span>';
            }
          } else {


          ?>
            <form role="form" action="exe/add_student_budget.php" method="post">
              <div class="col-md-12">
                <input type="hidden" name="group_id" value="<?php echo $id ?>">
                <input type="hidden" name="budget_allow_edit" value="1">
                <input type="hidden" name="budget_approved" value="2">
                <input type="hidden" name="budget_103" value="2">
                <input type="hidden" name="budget_203" value="2">
                <input type="hidden" name="budget_303" value="2">
                <input type="hidden" name="budget_403" value="2">
                <input type="hidden" name="budget_503" value="2">
                <input type="hidden" name="budget_603" value="2">
                <input type="hidden" name="budget_703" value="2">
                <input type="hidden" name="budget_803" value="2">

              </div>

              <p class="panel-body" style="margin: 30px 0;">
                备注：请在填写预算时，以<span style="color: red">整数</span>进行填写。
              </p><br>

              <div class="form-group">
                <label class="col-md-2 control-label" for="name">项目1：</label>
                <div class="col-md-7">
                  <input id="name" name="budget_101" type="text" placeholder="项目" class="form-control">
                </div>
                <div class="col-md-3">
                  <input id="name" name="budget_102" type="number" value="0" oninput="this.value = Math.round(this.value);" placeholder="预算（RM）" class="form-control">
                </div>
              </div>
              <br><br>
              <div class="form-group">
                <label class="col-md-2 control-label" for="name">项目2：</label>
                <div class="col-md-7">
                  <input id="name" name="budget_201" type="text" placeholder="项目" class="form-control">
                </div>
                <div class="col-md-3">
                  <input id="name" name="budget_202" type="number" value="0" oninput="this.value = Math.round(this.value);" placeholder="预算（RM）" class="form-control">
                </div>
              </div>
              <br><br>
              <div class="form-group">
                <label class="col-md-2 control-label" for="name">项目3：</label>
                <div class="col-md-7">
                  <input id="name" name="budget_301" type="text" placeholder="项目" class="form-control">
                </div>
                <div class="col-md-3">
                  <input id="name" name="budget_302" type="number" value="0" oninput="this.value = Math.round(this.value);" placeholder="预算（RM）" class="form-control">
                </div>
              </div>
              <br><br>
              <div class="form-group">
                <label class="col-md-2 control-label" for="name">项目4：</label>
                <div class="col-md-7">
                  <input id="name" name="budget_401" type="text" placeholder="项目" class="form-control">
                </div>
                <div class="col-md-3">
                  <input id="name" name="budget_402" type="number" value="0" oninput="this.value = Math.round(this.value);" placeholder="预算（RM）" class="form-control">
                </div>
              </div>
              <br><br>
              <div class="form-group">
                <label class="col-md-2 control-label" for="name">项目5：</label>
                <div class="col-md-7">
                  <input id="name" name="budget_501" type="text" placeholder="项目" class="form-control">
                </div>
                <div class="col-md-3">
                  <input id="name" name="budget_502" type="number" value="0" oninput="this.value = Math.round(this.value);" placeholder="预算（RM）" class="form-control">
                </div>
              </div>
              <br><br>
              <div class="form-group">
                <label class="col-md-2 control-label" for="name">项目6：</label>
                <div class="col-md-7">
                  <input id="name" name="budget_601" type="text" placeholder="项目" class="form-control">
                </div>
                <div class="col-md-3">
                  <input id="name" name="budget_602" type="number" value="0" oninput="this.value = Math.round(this.value);" placeholder="预算（RM）" class="form-control">
                </div>
              </div>
              <br><br>
              <div class="form-group">
                <label class="col-md-2 control-label" for="name">项目7：</label>
                <div class="col-md-7">
                  <input id="name" name="budget_701" type="text" placeholder="项目" class="form-control">
                </div>
                <div class="col-md-3">
                  <input id="name" name="budget_702" type="number" value="0" oninput="this.value = Math.round(this.value);" placeholder="预算（RM）" class="form-control">
                </div>
              </div>
              <br><br>
              <div class="form-group">
                <label class="col-md-2 control-label" for="name">项目8：</label>
                <div class="col-md-7">
                  <input id="name" name="budget_801" type="text" placeholder="项目" class="form-control">
                </div>
                <div class="col-md-3">
                  <input id="name" name="budget_802" type="number" value="0" oninput="this.value = Math.round(this.value);" placeholder="预算（RM）" class="form-control">
                </div>
              </div>
              <br><br><br><br>

              <div style="display: grid; gap: 20px; ">
                <label style="cursor: pointer; display: flex; gap: 20px;">
                  <input type="checkbox" name="budget_policy01" value="1" required>此预算案已获得小组成员全员认可并同意呈交。
                </label>
                <label style="cursor: pointer; display: flex; gap: 20px;">
                  <input type="checkbox" name="budget_policy02" value="1" required>此预算案已获得指导老师审批并赞同呈交。
                </label>
              </div>

              <div align="center"><button type="submit" class="submit-btn">提交活动预算案</button></div>
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