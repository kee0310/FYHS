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
  form .budget_list {
    padding-bottom: 50px;
    display: flex;
    flex-wrap: wrap;
    gap: 10px 30px;


    & input {
      border-radius: 5px;
      border: none;
      color: black;
    }
  }

  input[type="text"] {
    margin-left: 50px;
    width: 55%;
    min-width: 200px;
    text-align: center;
  }

  input[type="number"] {
    margin-left: 50px;
    text-align: center;
    min-width: 200px;
    width: 20%;
    appearance: textfield;
    -moz-appearance: textfield;
  }

  ::-webkit-outer-spin-button,
  ::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }


  .btn-del-input,
  .btn-add-input {
    border: none;
    border-radius: 50%;
    min-width: 35px;
    max-height: 35px;
    font-size: large;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .btn-del-input {
    background: red;
    margin-right: 90%;
    margin-bottom: -80px;
  }

  .btn-add-input {
    background: green;
    transform: scale(1.2);
  }

  .delete:hover {
    filter: brightness(70%);
  }
</style>

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
          <br>

          <?php
          date_default_timezone_set("Asia/Kuala_Lumpur");
          $date = date('YmdHis', time());

          $start_time_view   = 20230301000000;
          $end_time_view     = 20240425235900;

          $id = $_SESSION['id'];
          $result = mysqli_query($conn, "SELECT count(*) as total,editable from zgroup_budget where group_id='$id'");
          $data = mysqli_fetch_assoc($result);

          $totalapply = $data['total'];
          $editable = $data['editable'];


          if ($start_time_view > $date) {
            echo "还未开放填写：2023年3月01日（星期三） 至 2023年3月25日（星期六）";
          } elseif ($end_time_view < $date) {
            echo "填写已经截止：2023年3月01日（星期三） 至 2023年3月25日（星期六）";

            // if budget exist
          } elseif ($totalapply >= 1) {
            $result = mysqli_query($conn, "SELECT * FROM zgroup_budget where group_id='$id'");

            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
              $i++;
          ?>

              <div class="panel-body">
                <div class="col-sm-11 col-xs-10 budget_list">
                  <div>项目<?php echo $i; ?>： <?php echo $row['budget_title']; ?></div>
                  <div>预算： RM <?php echo $row['budget_amount']; ?></div>
                  <div>状态：
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
                  <div>备注、回馈：<?php echo $row['budget_comment']; ?></div>
                </div>
                <div class="col-sm-1 col-xs-2" align="right" style="width: min-content; padding: 10px 0;" ;>
                  <?php
                  // delete application form if is leader
                  if ($row['group_id'] == $id && $row['editable'] == 1) {
                    echo '<a class="delete" href="exe/delete_student_budget.php?id=' . $row['budget_id'] . '" style="font-size: larger;" title="删除此项目"><i class="fa fa-trash-can" style="color: white; background: red; background-clip: text; -webkit-text-stroke: 8px transparent; position: absolute; padding: 10px;"></i></a>';
                  } else {
                    echo '<div title="无法删除"><i class="fa fa-trash-can" style="color: grey; position: absolute; padding: 10px;"></i></div>';
                  }
                  ?>
                </div>
              </div><br>

            <?php
            }
            ?>

            <form role="form" action="exe/add_student_budget.php" method="post">
              <input type="hidden" name="group_id" value="<?php echo $id ?>">

              <fieldset class="inputs-set" id="email-list" class="input-field" onchange="">
              </fieldset>


              <?php
              // delete application form if is leader
              $result = mysqli_query($conn, "SELECT * FROM zgroup_budget where group_id='$id'");
              $row = mysqli_fetch_array($result);
              if ($row['group_id'] == $id && $row['editable'] == 1) {
              ?>

                <div align="center">
                  <button class="btn-add-input" onclick="addField();" type="button">＋</button>
                  <div class="btn-add-input-text">添加项目</div>
                </div>

              <?php
              }
              ?>

              <div align="center"><button type="submit" class="submit-btn newbtn" style="display: none">确认</button></div>
            </form>

          <?php
          } else {
          ?>

            <form role="form" action="exe/add_student_budget.php" method="post">
              <input type="hidden" name="group_id" value="<?php echo $id ?>">

              <p class="panel-body" style="margin: 30px 0;">
                备注：请在填写预算时，以<span style="color: red">整数</span>进行填写。
              </p><br>

              <fieldset class="inputs-set" id="email-list" class="input-field">
                <div class="budget_list">
                  <input type="text" name="budget_title[]" placeholder="项目1" required />
                  <input type="number" name="budget_amount[]" placeholder="(RM) 0" required />
                </div>
              </fieldset>

              <div align="center">
                <button class="btn-add-input" onclick="addField();" type="button">＋</button>
                <div class="btn-add-input-text">添加项目</div>
              </div>

              <div style="display: grid; gap: 20px; ">
                <br><br>
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


  <script>
    const myForm = document.getElementById("email-list");

    function addField() {
      // Create elements
      const nef_wrapper = document.createElement("div");
      const nef = document.createElement("input");
      const nef2 = document.createElement("input");
      const btnAdd = document.createElement("button");
      const btnDel = document.createElement("button");


      // Add Class to main wrapper
      nef_wrapper.classList.add("budget_list");


      // set button DEL
      btnDel.type = "button";
      btnDel.classList.add("btn-del-input");
      btnDel.innerText = "─";


      // set Input field
      nef.type = "text";
      nef.name = "budget_title[]";
      nef.setAttribute("required", "");


      // set Input field
      nef2.type = "number";
      nef2.name = "budget_amount[]";
      nef2.setAttribute("required", "");
      nef2.setAttribute("placeholder", "(RM) 0");

      let i = document.querySelectorAll('.budget_list').length;

      i += 1;
      if (i > 8) {
        document.querySelector('.btn-add-input').style.display = "none";
        document.querySelector('.btn-add-input-text').style.display = "none";
      }

      if (i > 0) {
        document.querySelector(".newbtn").style.display = 'block';
      }

      nef.setAttribute("placeholder", "项目" + i);
      //append elements to main wrapper
      nef_wrapper.appendChild(btnDel);
      nef_wrapper.appendChild(nef);
      nef_wrapper.appendChild(nef2);

      // append element to DOM
      myForm.appendChild(nef_wrapper);

      btnDel.addEventListener("click", removeEmailField);
    }

    //remove element from DOM
    function removeEmailField(el) {
      const field = el.target.parentElement;
      document.querySelector('.btn-add-input').style.display = "block";
      document.querySelector('.btn-add-input-text').style.display = "block";
      field.remove();

      let j = document.querySelectorAll('.budget_list').length;
      if (j < 2) {
        document.querySelector(".newbtn").style.display = 'none';
      }
    }
  </script>

</body>

</html>