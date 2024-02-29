<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>综合实践活动课程</title>


  <?php
  session_start();
  include("exe/auth.php");
  include("exe/auth_student_leader.php");
  include("header_student.php");
  include('connect.php');
  ?>

</head>

<style>
  .col-md-6 {
    padding: 5px !important;
  }

  form {
    display: grid;
  }

  form .column span {
    color: firebrick;
  }

  form .checkbox {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
  }

  form input {
    width: 100%;
    color: black;

    &::-webkit-calendar-picker-indicator {
      display: none;
      opacity: 0;
    }

    &[type="radio"] {
      display: none;

      &~label {
        cursor: pointer;
        font-size: large;
        color: white;
        text-shadow: 0px 0px 15px rgb(0, 0, 0, 1);
        transition: .3s;
        font-weight: normal;
      }

      &:checked+label {
        text-shadow: 0px 0px 15px rgb(255, 255, 255, .5);

        & div {
          background: var(--second-color);
          background-clip: text;
          -webkit-text-fill-color: white;
          -webkit-text-stroke: 4px transparent;
        }

        & span {
          color: #0064ff;
        }
      }
    }

    &[type="checkbox"] {
      display: none;

      &~label {
        cursor: pointer;
        font-size: large;
        color: white;
        transition: .3s;

        &::before {
          content: "";
          display: inline-block;
          width: 20px;
          height: 20px;

          margin-left: -30px;
          margin-top: 6px;
          position: absolute;
          outline: 1px solid white;
          transition: none;
        }
      }

      &:checked~label {
        color: white !important;
        text-decoration: none !important;
        text-shadow: 0px 0px 15px rgb(255, 255, 255, .5);

        &::before {
          content: "\2713";
          margin-top: -8px;
          text-shadow: 1px 1px 1px rgba(0, 0, 0, .2);
          font-size: x-large;
          color: #fff;
          outline: none;
          transition: .3s;
        }
      }
    }
  }

  #textbox1,
  #textbox2,
  #textbox3 {
    display: none;
    background: none;
    border: none;
    outline: none;
    border-bottom: 1px white solid;
    transition: .3s;
    color: white;
  }
</style>

<body>
  <div class="main col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="student_index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="">申请表格</a></li>
      </ol>
    </div>


    <!-- Display Student Mark -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          活动申请表格
        </div>

        <div class="panel-body">
          <?php

          date_default_timezone_set("Asia/Kuala_Lumpur");
          $date = date('YmdHis', time());

          $start_time_view   = 20230301000000;
          $end_time_view     = 20251025235900;

          $id = $_SESSION['id'];
          $result = mysqli_query($conn, "SELECT count(*) as total, editable from zgroup_research where group_id='$id'");
          $data = mysqli_fetch_assoc($result);

          $totalapply = $data['total'];
          $editable = $data['editable'];

          if ($start_time_view > $date) {
            echo "还未开放申请：-";
          } elseif ($end_time_view < $date) {
            echo "申请已经截止：-";
          } elseif ($totalapply >= 1) {
            if ($editable == 1) {
              echo "已完成上载申请表格。如需修改申请表格，请将现有的申请表格删除。";
              echo '<a href="exe/delete_student_application.php?id=' . $id . '" title="删除申请表格">删除申请表格</a>';
            } else {
              echo "已完成上载申请表格。如需修改申请表格，请将现有的申请表格删除。";
              echo '<span style="color: red">无法删除申请表格</span>';
            }
          } else {
          ?>

            <form name="apply" action="exe/add_student_application.php" method="post" enctype="multipart/form-data">
              <!-- Hidden property -->
              <input type="text" value="<?php echo $id; ?>" name="group_id" style="display: none;">

              <!-- Select topic -->
              <div class="panel-content">
                <div class="column">项目名称 <span>*</span></div>
                <div class="col-md-6 col-xs-12">
                  <input type="text" name="research_topic" placeholder="中文名称" oninvalid="this.setCustomValidity('请输入项目名称')" oninput="this.setCustomValidity('')" required>
                </div>
                <div class="col-md-6 col-xs-12">
                  <input type="text" name="research_topic_en" placeholder="英文名称" oninput="this.value = this.value.toUpperCase()">
                </div>
              </div>

              <!-- Select teacher -->
              <div class="panel-content">
                <div class="column">指导老师 <span>*</span></div>
                <div class="col-md-6 col-xs-12">
                  <input list="teachers" placeholder="" name="teacher_name">
                  <datalist id="teachers">
                    <?php
                    $result = mysqli_query($conn, "SELECT teacher_name FROM zteacher_detail WHERE teacher_role = 'teacher' ORDER BY teacher_id");
                    while ($row = mysqli_fetch_array($result)) {
                      echo '<option value="' . $row["teacher_name"] . '">';
                    }
                    ?>
                  </datalist>
                </div>
              </div>

              <!-- Research direction selector -->
              <div class="panel-content">
                <div class="column">学习方向 <span>*</span></div>
                <!-- Selector -->
                <div class="col-md-4 col-xs-12" onclick="switcher()">
                  <input type="radio" name="research_direct" id="direct1" class="switcher" value="以研究为主">
                  <label for="direct1" class="glass">
                    <span><i class="fa fa-book"></i></span>
                    <div>以研究为主</div>
                  </label>

                  <input type="radio" name="research_direct" id="direct2" class="switcher" value="以社会实践或社区服务为主">
                  <label for="direct2" class="glass">
                    <span><i class="fa fa-book"></i></span>
                    <div>以社会实践或社区服务为主</div>
                  </label>

                  <input type="radio" name="research_direct" id="direct3" class="switcher" value="以项目设计或技术实践为主">
                  <label for="direct3" class="glass">
                    <span><i class="fa fa-book"></i></span>
                    <div>以项目设计或技术实践为主</div>
                  </label>
                </div>

                <!-- Research tags 1 -->
                <div class="col-md-8 col-xs-12 direct direct1" style="padding: 20px 80px; display: none">
                  <div>
                    <input type="checkbox" name="research_tag[]" id="a1" value="制定方案" />
                    <label for="a1">制定方案</label>
                  </div>
                  <div>
                    <input type="checkbox" name="research_tag[]" id="a2" value="调查" />
                    <label for="a2">调查</label>
                  </div>
                  <div>
                    <input type="checkbox" name="research_tag[]" id="a3" value="访问" />
                    <label for="a3">访问</label>
                  </div>
                  <div>
                    <input type="checkbox" name="research_tag[]" id="a4" value="观察" />
                    <label for="a4">观察</label>
                  </div>
                  <div>
                    <input type="checkbox" name="research_tag[]" id="a5" value="实验" />
                    <label for="a5">实验</label>
                  </div>
                  <div>
                    <input type="checkbox" name="research_tag[]" id="a6" value="统计" />
                    <label for="a6">统计</label>
                  </div>
                  <div>
                    <input type="checkbox" name="research_tag[]" id="a7" value="信息收集与处理" />
                    <label for="a7">信息收集与处理</label>
                  </div>
                  <div>
                    <input type="checkbox" id="a8" class="other" />
                    <label for="a8">其他</label>
                    <input type="text" name="research_tag[]" id="textbox1" />
                  </div>
                </div>

                <!-- Research tags 2 -->
                <div class="col-md-8 col-xs-12 direct direct2" style="padding: 20px 80px; display: none">
                  <div>
                    <input type="checkbox" name="research_tag[]" id="b1" value="参观" />
                    <label for="b1">参观</label>
                  </div>
                  <div>
                    <input type="checkbox" name="research_tag[]" id="b2" value="考察" />
                    <label for="b2">考察</label>
                  </div>
                  <div>
                    <input type="checkbox" name="research_tag[]" id="b3" value="服务" />
                    <label for="b3">服务</label>
                  </div>
                  <div>
                    <input type="checkbox" name="research_tag[]" id="b4" value="宣传" />
                    <label for="b4">宣传</label>
                  </div>
                  <div>
                    <input type="checkbox" name="research_tag[]" id="b5" value="义务劳动" />
                    <label for="b5">义务劳动</label>
                  </div>
                  <div>
                    <input type="checkbox" name="research_tag[]" id="b6" value="经济活动" />
                    <label for="b6">经济活动</label>
                  </div>
                  <div>
                    <input type="checkbox" id="b7" class="other" />
                    <label for="b7">其他</label>
                    <input type="text" name="research_tag[]" id="textbox2" />
                  </div>
                </div>

                <!-- Research tags 3 -->
                <div class="col-md-8 col-xs-12 direct direct3" style="padding: 20px 80px; display: none">
                  <div>
                    <input type="checkbox" name="research_tag[]" id="c1" value="项目立项与研究" />
                    <label for="c1">项目立项与研究</label>
                  </div>
                  <div>
                    <input type="checkbox" name="research_tag[]" id="c2" value="设计" />
                    <label for="c2">设计</label>
                  </div>
                  <div>
                    <input type="checkbox" name="research_tag[]" id="c3" value="制作" />
                    <label for="c3">制作</label>
                  </div>
                  <div>
                    <input type="checkbox" name="research_tag[]" id="c4" value="研制" />
                    <label for="c4">研制</label>
                  </div>
                  <div>
                    <input type="checkbox" name="research_tag[]" id="c5" value="种植" />
                    <label for="c5">种植</label>
                  </div>
                  <div>
                    <input type="checkbox" name="research_tag[]" id="c6" value="养殖" />
                    <label for="c6">养殖</label>
                  </div>
                  <div>
                    <input type="checkbox" name="research_tag[]" id="c7" value="信息发布" />
                    <label for="c7">信息发布</label>
                  </div>
                  <div>
                    <input type="checkbox" name="research_tag[]" id="c8" value="科技小发明" />
                    <label for="c8">科技小发明</label>
                  </div>
                  <div>
                    <input type="checkbox" name="research_tag[]" id="c9" value="小制作" />
                    <label for="c9">小制作</label>
                  </div>
                  <div>
                    <input type="checkbox" id="c10" class="other" />
                    <label for="c10">其他</label>
                    <input type="text" name="research_tag[]" id="textbox3" />
                  </div>
                </div>
              </div>

              <!-- Research description -->
              <div class="panel-content">
                <div class="column">项目简介（简单叙述动机、目的、方法等等）<span>*</span></div>
                <textarea class="form-control" name="research_desc" rows="10" cols="50"></textarea>
                <script>
                  CKEDITOR.replace('research_desc', {
                    autoParagraph: false,
                    enterMode: CKEDITOR.ENTER_BR,
                    uiColor: '#000000a3'
                  });
                </script>
              </div>

              <div align="right">
                <button type="summit" class="submit-btn">提交</button>
              </div>

            </form>

          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </div>

  <script>
    let otherList = ['a8', 'b7', 'c10'];
    let textboxlist = ['textbox1', 'textbox2', 'textbox3'];

    for (let i = 0; i < otherList.length; i++) {
      let other = document.getElementById(otherList[i]);
      let textbox = document.getElementById(textboxlist[i]);

      other.addEventListener('click', function handleClick() {
        if (other.checked) {
          textbox.value = "";
          textbox.style.display = "block";
        } else {
          textbox.value = "";
          textbox.style.display = "none";
        }
      });

    }

    function switcher() {
      let departmentList = ["direct1", "direct2", "direct3"];

      for (let i = 0; i < departmentList.length; i++) {
        document.querySelector("." + departmentList[i]).style.display = "none";
        if (document.getElementById(departmentList[i]).checked) {
          document.querySelector("." + departmentList[i]).style.display = "block";
        }
      }
    }
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>
    $(".switcher").change(function() {
      $('input[type="checkbox"').prop('checked', false);
      $('#textbox1').hide();
      $('#textbox2').hide();
      $('#textbox3').hide();
    });
  </script>

</body>

</html>