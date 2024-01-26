<!-- 

	This is the first page of the student page.
  Use to introduce the practical activity.

-->
<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>综合实践活动课程</title>

  <?php
  session_start();
  include("exe/auth.php");
  require("header_student.php");
  include('connect.php');
  ?>
</head>

<style>
  table {
    border-radius: 15px;
    overflow: hidden;
    border: 1px solid black;
    margin-bottom: 50px;
    width: 100%;

    & th {
      padding: 10px;
      border: 1px solid black;
      background: rgba(0, 0, 0, 0.5);
      overflow: hidden;
      text-align: center;
    }

    & td {
      background: rgba(255, 255, 255, 0.2);
      overflow: hidden;
      padding: 10px;
      border: 1px solid black;
      max-width: 500px;
    }
  }


  details {
    margin-bottom: 10px;
    border-radius: 15px;
    background: rgba(255, 255, 255, 0.1);
    overflow: hidden;

    & summary {
      padding: 10px 20px;
      font-size: 1.3em;
      cursor: pointer;
      display: flex;
      flex-wrap: wrap;
      background: rgba(0, 0, 0, 0.5);
      align-items: center;
      transition: margin 150ms ease-out;
    }

    & #content {
      padding: 20px;
      color: #ddd;
      font-size: 1.1em;
      opacity: 0;
      transition: opacity 150ms ease-out;
    }

    & .member div {
      display: flex;
      align-items: center;

      & i {
        width: 40px;
        text-align: center;
        transform: scale(0.8);
      }
    }

    & .circle {
      display: flex;
      align-items: center;
      justify-content: center;
      aspect-ratio: 1 / 1;
      outline: 3px solid white;
      border-radius: 50%;
      min-width: 45px;
      max-width: 100%;
      font-size: x-large;
      background: var(--second-color);
      font-weight: bold;
      color: white;
      text-shadow: 2px 2px rgba(255, 255, 255, 0.2);
      margin: 10px 0;
      margin-right: 20px;
      z-index: 10;
    }

    & .crown {
      background: gold;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      font-size: x-large;
      padding-right: 10px;
      transition: 0.2s;
      position: absolute;
      transform: rotate(35deg) translate(10px, -32px);
      visibility: hidden;
      font-size: large;
    }

    &[open] summary {
      margin-bottom: 100px;
    }

    &[open] #content {
      margin-top: -100px;
      animation: none;
      opacity: 1;
      animation: cssAnimation .8s;
    }
  }

  @keyframes cssAnimation {
    0% {
      opacity: 0;
    }

    100% {
      opacity: 1;
    }
  }

  .delete {
    width: 100%;
    padding: 20px;

    & a {
      background: #ff0000ab;
      color: white;
      padding: 10px;
      border-radius: 5px;
      text-decoration: none;
    }
  }

  tbody tr {
    text-align: center;
  }

  tbody tr :nth-child(3) {
    text-align: right;
  }
</style>

<body>

  <div class="main col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="">首页</a></li>
      </ol>
    </div>


    <!-- Display Student Mark -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          学生分数
        </div>
        <div class="panel-body">
          <div class="panel-content">
            分数1：计划书<br>
            分数2：实践报告（答辩前）<br>
            分数3：答辩表现<br>
            分数4：实践报告（答辩后）<br>
            分数5：指导老师评分
          </div>
          <table class="panel-content">
            <thead>
              <tr>
                <th>队伍编号</th>
                <th>中文名称</th>
                <th>英文名称</th>
                <th>总分（%）</th>
                <th>评级</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $result = mysqli_query($conn, "SELECT * from zstudent_mark where student_id='$id'");

              while ($row = mysqli_fetch_array($result)) {
              ?>

                <tr>
                  <td><?php echo $row['group_id']; ?></td>
                  <td><?php echo $row['mark_topic']; ?></td>
                  <td><?php echo $row['mark_topiceg']; ?></td>
                  <td>
                    <?php
                    $mark01 = $row['mark_pdf01'] + $row['mark_pdf02'] + $row['mark_pdf03'];
                    $mark02 = ($row['mark_report01'] + $row['mark_report02'] + $row['mark_report03']) / 3;
                    $mark03 = ($row['mark_present01'] + $row['mark_present02'] + $row['mark_present03']) / 3;

                    $totalmark = $mark01 + $mark02 + $mark03 + $row['mark_finalreport'] + $row['mark_individual'];

                    echo round($totalmark, 1);
                    ?>
                  </td>
                  <td><?php echo $row['mark_grade']; ?></td>
                </tr>

              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>


    <!-- Display Student Details -->
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          学生个人资料
        </div>
        <div class="panel-body">
          <div class="panel-content">
            <?php
            $id = $_SESSION['id'];
            $group_id = "";
            $result = mysqli_query($conn, "SELECT * FROM zstudent_detail where zstudent_detail.student_id='$id'");
            $row = mysqli_fetch_assoc($result);

            // Define student name
            $student_name = $row['student_name'];
            $ch_name = preg_replace('/\P{Han}+/u', '', $student_name);
            $en_name = trim(strtolower(preg_replace('/[^a-zA-Z0-9\' ]/', '', $student_name)));
            ?>

            <p>中文名：<?php echo $ch_name; ?></p>
            <p>英文名：<?php echo ucwords($en_name); ?></p>
            <p>学号：<?php echo $id ?></p>
            <p>班级：<?php echo $row['student_class']; ?></p><br>
            <p>如显示的资料有错误，请电邮到 <a href="mailto:sinfatt@fyk.edu.my" title="电邮">sinfatt@fyk.edu.my</a>。</p>
          </div>
        </div>
      </div>
    </div>


    <!-- Display Group Member -->
    <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          <i class="fa-solid fa-user-group"></i> 成员
        </div>
        <div class="panel-body">
          <div class="panel-content">
            <div class="accordion">

              <?php
              // get group_id
              $result = mysqli_query($conn, "SELECT * FROM zstudent_group WHERE student_id='$id'");
              $row = mysqli_fetch_assoc($result);
              $num_rows = mysqli_num_rows($result);

              if ($num_rows != 0) {
                $group_id = $row['group_id'];
                $_SESSION['group_id'] = $group_id;

                // get all member with same group code
                $result = mysqli_query($conn, "SELECT * FROM zstudent_group a LEFT JOIN zstudent_detail b
																					ON a.student_id=b.student_id
																					where a.group_id='$group_id'
																					ORDER BY a.group_leader DESC
																				");

                $num_rows = mysqli_num_rows($result);

                while ($row = mysqli_fetch_array($result)) {

                  // Define group leader
                  if ($row['group_leader'] == 1) {
                    $group_leader = "组长";
                  } else {
                    $group_leader = "组员";
                  }

                  // Define student name
                  $student_name = $row['student_name'];
                  $student_id = $row['student_id'];
                  $student_class = $row['student_class'];
                  $student_email = $row['student_email'];
                  $ch_name = preg_replace('/\P{Han}+/u', '', $student_name);
                  $en_name = trim(strtolower(preg_replace('/[^a-zA-Z0-9\' ]/', '', $student_name)));
                  $first_character = strtoupper(mb_substr(($ch_name ? $ch_name :  $en_name),  0, 1,  "utf-8"));
              ?>

                  <details>
                    <summary>
                      <div class="circle"><?php echo $first_character; ?></div>
                      <div class="crown"><i class="fa-solid fa-crown"></i></div>
                      <div>
                        <div>
                          <?php echo $ch_name; ?>
                        </div>
                        <div>
                          <?php echo ucwords($en_name); ?>
                        </div>
                      </div>
                    </summary>

                    <div id="content" class="member">
                      <div id="leader"><i class="fa-solid fa-user-gear"></i>职位：<?php echo $group_leader; ?></div>
                      <div><i class="fa-regular fa-address-card"></i>学号：<?php echo $student_id; ?></div>
                      <div><i class="fa-solid fa-door-open"></i>班级：<?php echo $student_class; ?></div>
                      <div><i class="fa-regular fa-envelope"></i>电邮：<a href="mailto:<?php echo $student_email; ?>" title="电邮"><?php echo $student_email; ?></a></div>
                    </div>

                    <?php
                    // remove member
                    if ($group_id == $id && $student_id != $id) {
                      echo '<div class="delete" align="right"><a href="exe/delete_group_member.php?id=' . $student_id . '"><i class="fa-solid fa-user-slash"></i> 移除组员</a></div>';
                    }
                    ?>
                  </details>

                <?php
                }
                // add member
                if ($num_rows < 10 && $group_id == $id) {
                ?>

                  <details>
                    <summary style="display: flex; justify-content: center;"><span style="font-size: larger;"><i class="fa fa-plus"></i></span></summary>
                    <div id="content">
                      <form role="form" action="exe/add_group_member.php" method="post" style="display: grid;"><br>
                        <div>请输入学号</div>
                        <input type="hidden" name="group_id" value="<?php echo $id; ?>">
                        <input type="text" name="student_id" autocomplete="off" oninput="this.value = this.value.toUpperCase()" style="color: black;" required /><br>
                        <div align="center"><button type="submit" class="btn btn-primary" style="transform: scale(1.4)"><i class="fa-solid fa-user-plus"></i> 添加组员</button></div><br>
                      </form>
                    </div>
                  </details>

                <?php
                }
                // start group 
              } else {
                $result = mysqli_query($conn, "SELECT count(*) as total,group_leader from zstudent_group where student_id='$id'");
                $row = mysqli_fetch_assoc($result);
                ?>

                <div align="center" style="font-size: larger"><b>未组队</b></div>
                <form role="form" action="exe/add_group.php" method="post" align="center">
                  <p style="font-size: 18px; font-weight: 500">开始组队的学生，系统将自动默认为组长。</p>
                  <p style="font-size: 18px; font-weight: 500">( 4 至 10 位同学为一组 )</p>
                  <input type="hidden" name="student_id" value="<?php echo $id; ?>">
                  <input type="hidden" name="group_id" value="<?php echo $id; ?>">
                  <button type="submit" class="btn btn-primary" style="font-size: larger; margin: 10px"><i class="fa-solid fa-users"></i> 开始组队</button>
                </form>

              <?php
              }
              ?>

            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Display Student Research -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          实践活动项目
        </div>
        <div class="panel-body">
          <div class="panel-content">

            <?php
            $result = mysqli_query($conn, "SELECT * FROM zgroup_research where group_id='$group_id'");
            $num_rows = mysqli_num_rows($result);

            if ($num_rows == 1) {
              while ($row = mysqli_fetch_array($result)) {

                // delete application form if is leader
                if ($group_id == $id && $row['apply_allow_edit'] == 1) {
                  echo '<div class="delete" align="right"><a href="exe/delete_student_application.php?id=' . $id . '" style="font-size: larger; margin: 10px;"><i class="fa fa-trash-can" style="transform: scale(0.8)"></i></a></div>';
                }
            ?>
                <div style="font-size: xx-large" align="center"><?php echo $row['research_topic'] ?></div>
                <div style="font-size: large" align="center"><?php echo $row['research_topic_en'] ?></div>
                <br>

                <div align="center">
                  <div>
                    <b style="font-size: x-large; color: #009fff;"><?php echo $row['research_direct'] ?></b>
                  </div>
                  <div style="font-size: large; color: darkgray"><?php echo $row['research_tag'] ?></div>
                </div>

                <div align="center">
                  <div style="padding: 80px 0; max-width: 900px;" align="left"><?php echo $row['research_desc'] ?></div>
                </div>
                <br>


                <div class="panel-body" style="border-radius: 10px; border: 1px solid rgba(255, 255, 255, .3);">
                  <div>指导老师：
                    <?php echo $row["teacher_name"]; ?>
                  </div>

                  <div>
                    项目是否批准：
                    <b>
                      <?php
                      if ($row['status'] == null) {
                        echo "<span style='color: CornflowerBlue'>未审查</span>";
                      } elseif ($row['status'] == 0) {
                        echo "<span style='color: red'>不批准</span>";
                      } elseif ($row['status'] == 1) {
                        echo "<span style='color: MediumSeaGreen'>批准</span>";
                      } else {
                        echo "Error";
                      }
                      ?>
                    </b>
                  </div>

                  <div>
                    备注、回馈：<?php echo $row['teacher_comment']; ?>
                  </div>
                </div>

              <?php
              }
            } else {
              ?>

              <div align="center" style="font-size: larger"><b>暂无</b>
                <p style="font-size: 18px; font-weight: 500">请组长填写活动申请表格</p>
                <?php
                // redirect to application form if is leader
                if ($group_id == $id) {
                  echo '<a href="student_research_application.php" class="btn btn-primary" style="font-size: larger; margin: 10px">开始填写 <i class="fa-solid fa-pen" style="transform: scale(0.8)"></i></a>';
                }
                ?>
              </div>

            <?php
            }
            ?>
          </div>

        </div>
      </div>
    </div>

    <!-- Display Student Research Budget -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          活动预算案
        </div>
        <div class="panel-body">
          <div class="panel-content">


            <?php
            $result = mysqli_query($conn, "SELECT * FROM zgroup_budget where group_id='$group_id'");
            $num_rows = mysqli_num_rows($result);

            if ($num_rows > 0) {
              // delete budget form if is leader
              if ($group_id == $id) {
                echo '<div class="delete" align="right"><a href="student_research_budget.php" style="font-size: larger; margin: 10px; background: #30a5ff;">修改 <i class="fas fa-pen-to-square" style="transform: scale(0.8); "></i></a></div>';
              }
            ?>
              <table data-toggle="table" data-select-item-name="toolbar1" style="font-size: 12pt;line-height: 1.4;">
                <thead>
                  <tr>
                    <th>编号</th>
                    <th>项目</th>
                    <th>数额（RM）</th>
                    <th>审批</th>
                    <th>备注、回馈</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while ($row = mysqli_fetch_array($result)) {
                  ?>

                    <tr>
                      <td><?php echo $row['budget_id']; ?></td>
                      <td style="width: 40%;"><?php echo $row['budget_title']; ?></td>
                      <td style="width: 10%;"><input type="text" name="budget_amount[]" value="<?php echo $row['budget_amount']; ?>" style="background: none; border: none; width: 100%; text-align: right;" disabled></td>
                      <td> <b>
                          <?php
                          if ($row['status'] == null) {
                            echo "<span style='color: CornflowerBlue'>未审查</span>";
                          } elseif ($row['status'] == 0) {
                            echo "<span style='color: red'>不批准</span>";
                          } elseif ($row['status'] == 1) {
                            echo "<span style='color: MediumSeaGreen'>批准</span>";
                          } elseif ($row['status'] == 2) {
                            echo "<span style='color: CornflowerBlue'>待审查</span>";
                          } else {
                            echo "Error";
                          }
                          ?>
                        </b></td>
                      <td style="width: 30%;"><?php echo $row['budget_comment']; ?></td>
                    </tr>

                  <?php
                  }
                  $result = mysqli_query($conn, "SELECT SUM(budget_amount)FROM zgroup_budget WHERE group_id='$group_id'");
                  $row = $result->fetch_assoc()
                  ?>

                </tbody>
              </table>
              <div align="center">总额:&ensp;<b style="border-bottom: 3px double; color: gold; font-size: larger">RM <?php echo $row['SUM(budget_amount)']; ?></b></div>

            <?php
            } elseif ($num_rows == 0) {
            ?>

              <div align="center" style="font-size: larger"><b>暂无</b>
                <p style="font-size: 18px; font-weight: 500">请组长填写活动预算表格</p>
                <?php
                // redirect to application form if is leader
                if ($group_id == $id) {
                  echo '<a href="student_research_budget.php" class="btn btn-primary" style="font-size: larger; margin: 10px">开始填写 <i class="fa-solid fa-pen" style="transform: scale(0.8)"></i></a>';
                }
                ?>
              </div>

            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>


    <!-- Display Student Research Proposal -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          活动计划书
        </div>
        <div class="panel-body">
          <div class="panel-content">

            <?php
            $result = mysqli_query($conn, "SELECT * FROM zgroup_proposal where group_id='$group_id'");
            $num_rows = mysqli_num_rows($result);

            if ($num_rows == 1) {
              while ($row = mysqli_fetch_array($result)) {
            ?>

                <div class="col-sm-11 col-xs-10">
                  <div style="display: flex; flex-wrap: wrap;">活动计划书：<a href="pdf/proposal/<?php echo $row['pdf_file']; ?>" target="_blank" title="<?php echo $row['pdf_file']; ?>"><?php echo $row['pdf_file']; ?></a><br></div>
                  <div style="display: flex; flex-wrap: wrap;">提交日期：<?php echo $row['pdf_date']; ?></div><br>
                </div>
                <div class="delete col-sm-1 col-xs-2" align="right" style="width: min-content; padding: 10px 0;" ;>
                  <?php
                  // delete application form if is leader
                  if ($group_id == $id && $row['pdf_allow_edit'] == 1) {
                    echo '<a href="exe/delete_student_proposal.php?id=' . $id . '" style="font-size: larger;"><i class="fa fa-trash-can" style="transform: scale(0.8)"></i></a>';
                  }
                  ?>
                </div>

              <?php
              }
            } else {
              ?>

              <div align="center" style="font-size: larger"><b>暂无</b>
                <p style="font-size: 18px; font-weight: 500">请组长填写活动计划书</p>
                <?php
                // redirect to application form if is leader
                if ($group_id == $id) {
                  echo '<a href="student_research_proposal.php" class="btn btn-primary" style="font-size: larger; margin: 10px">开始填写 <i class="fa-solid fa-pen" style="transform: scale(0.8)"></i></a>';
                }
                ?>
              </div>

            <?php
            }
            ?>
          </div>
        </div>

      </div>
    </div>

    <!-- Display Student Research Report -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          活动报告
        </div>
        <div class="panel-body">
          <div class="panel-content">

            <?php
            $result = mysqli_query($conn, "SELECT * FROM zgroup_report where group_id='$group_id'");
            $num_rows = mysqli_num_rows($result);

            if ($num_rows != 0) {
              while ($row = mysqli_fetch_array($result)) {
            ?>

                <div class="col-sm-11 col-xs-10">
                  <div style="display: flex; flex-wrap: wrap;">活动报告：<a href="pdf/report/<?php echo $row['pdf_file']; ?>" target="_blank" title="<?php echo $row['pdf_file']; ?>"><?php echo $row['pdf_file']; ?></a><br></div>
                  <div style="display: flex; flex-wrap: wrap;">提交日期：<?php echo $row['pdf_date']; ?></div><br>
                </div>
                <div class="delete col-sm-1 col-xs-2" align="right" style="width: min-content; padding: 10px 0;" ;>
                  <?php
                  // delete report if is leader
                  if ($group_id == $id && $row['pdf_allow_edit'] == 1) {
                    echo '<a href="exe/delete_student_report.php?id=' . $id . '" style="font-size: larger;"><i class="fa fa-trash-can" style="transform: scale(0.8)"></i></a>';
                  }
                  ?>
                </div>

              <?php
              }
            } else {
              ?>

              <div align="center" style="font-size: larger"><b>暂无</b>
                <p style="font-size: 18px; font-weight: 500">请组长填写活动报告</p>
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
    </div>

    <!-- Display Student Research Final Report -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          最终活动报告
        </div>
        <div class="panel-body">
          <div class="panel-content">

            <?php
            $result = mysqli_query($conn, "SELECT * FROM zgroup_finalreport where group_id='$group_id'");
            $num_rows = mysqli_num_rows($result);

            if ($num_rows != 0) {
              while ($row = mysqli_fetch_array($result)) {
            ?>

                <div class="col-sm-11 col-xs-10">
                  <div style="display: flex; flex-wrap: wrap;">最终活动报告：<a href="pdf/finalreport/<?php echo $row['pdf_file']; ?>" target="_blank" title="<?php echo $row['pdf_file']; ?>"><?php echo $row['pdf_file']; ?></a><br></div>
                  <div style="display: flex; flex-wrap: wrap;">提交日期：<?php echo $row['pdf_date']; ?></div><br>
                </div>
                <div class="delete col-sm-1 col-xs-2" align="right" style="width: min-content; padding: 10px 0;" ;>
                  <?php
                  // delete report if is leader
                  if ($group_id == $id && $row['pdf_allow_edit'] == 1) {
                    echo '<a href="exe/delete_student_finalreport.php?id=' . $id . '" style="font-size: larger;"><i class="fa fa-trash-can" style="transform: scale(0.8)"></i></a>';
                  }
                  ?>
                </div>

              <?php
              }
            } else {
              ?>

              <div align="center" style="font-size: larger"><b>暂无</b>
                <p style="font-size: 18px; font-weight: 500">请组长填写最终活动报告</p>
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
    </div>

    <script>
      const details = document.querySelectorAll("details");

      // Add the onclick listeners.
      details.forEach((detail) => {
        detail.addEventListener("toggle", () => {
          if (detail.open) setTargetDetail(detail);
        });
      });

      // Close all the details that are not targetDetail.
      function setTargetDetail(targetDetail) {
        details.forEach((detail) => {
          if (detail !== targetDetail) {
            detail.open = false;
          }
        });
      }

      let leader = document.getElementById('leader').textContent;

      if (leader.includes("组长")) {
        document.querySelector(".crown").style.visibility = "visible";
      }
    </script>

</body>

</html>