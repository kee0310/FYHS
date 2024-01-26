<!--

	This page will be display for first time login student.
	* Ref table in database: "zstudent_detail"

	- "student_login_number" will be generate randomly if null.
	- It will combine with old password to form a "student_password_new".
	- Student will need to logout and login again with their new password.

-->
<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <title>综合实践活动课程 | 首次登入</title>

  <?php
  session_start();
  include("exe/auth.php");
  require("header_student_first_login.php");
  include('connect.php');;
  ?>

</head>

<style type="text/css">
  .circle {
    height: 100px;
    width: 100px;
    background: linear-gradient(to right,
        #05abe0,
        #05abe0,
        #040ea3,
        #040ea3,
        #05abe0,
        #05abe0);
    background-size: 400%;
    animation: glowing-button 20s linear infinite;
    color: white;
    border-radius: 50%;
    box-shadow: 5px 5px 10px 0px rgba(0, 0, 0, 0.5);
    padding: 2px;

    & span {
      border-radius: inherit;
      background: black;
      background-size: 200%;
      padding: 10px;
      width: 100%;
      height: 100%;
      font-size: clamp(18px, 1.5vw, 200px);
      color: var(--font-color);
      transition: 0.2s;
      overflow: visible;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 50px;
      font-weight: bold;
      text-shadow: 3px 3px 4px rgba(255, 255, 255, 0.2);
    }
  }

  .text {
    position: absolute;
    z-index: -1;
    padding: 20px 60px;
    left: 110px;
    box-shadow: 8px 8px 8px 0px rgba(0, 0, 0, 0.3) !important;
  }

  .panel-body p span {
    color: firebrick;
    font-weight: bold;
  }
</style>

<body>

  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="panel panel-default" style="margin-top: 100px;">
      <div class="panel-heading">首次登入</div>

      <?php
      $id = $_SESSION['id'];
      $result = mysqli_query($conn, "SELECT * FROM zstudent_detail where student_id='$id'");

      while ($row = mysqli_fetch_array($result)) {
        $student_name = $row["student_name"];
        $student_login_number = $row["student_login_number"];
        $student_password = $row["student_password"];

        // get chinese name only
        $student_name = preg_replace('/\P{Han}+/u', '', $student_name);
        if ($student_name == null) {
          $student_name = $row["student_name"]; // get full name if don't have chinese name
        }

        if (version_compare(PHP_VERSION, '7.0.0', '<') && !function_exists('random_int')) {
          /**
           * Generates pseudo-random integers
           *
           * @param int $min
           * @param int $max
           * @return int Returns random integer in the range $min to $max, inclusive.
           */
          function random_int($min, $max)
          {
            mt_srand();

            return mt_rand($min, $max);
          }
        }

        // assign 2 random characters if student login number is null
        if ($student_login_number == null) {
          $characters = '023456789abcdefghijkmnopqrstuvwxyz';
          $charactersLength = strlen($characters);
          $randomString = '';

          for ($i = 0; $i < 2; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
          }
          $student_login_number = $randomString;
        }

        // set new password
        $student_password_new = $student_login_number . $student_password;
        mysqli_query(
          $conn,
          "UPDATE zstudent_detail 
					SET student_login_number='$student_login_number',
							student_password_new='$student_password_new'
					WHERE student_id='$id'"
        );
      }
      ?>

      <!-- Start Panel Content -->
      <div class="panel-body">

        <!-- Display new password -->
        <div style="display: flex; align-items: center; margin: 50px 0px">
          <div class="circle">
            <span>
              <?php echo $student_login_number ?>
            </span>
          </div>
          <div class="panel panel-default text">
            <?php echo $student_password ?>
          </div>
        </div>

        <p>
          你好， <?php echo $student_name ?>！<br>
          以上是你的 <span>2 位数乱码</span> 与及 <span>登入密码（身份证号码）</span></br>
          &emsp; 2 位数乱码：
          <span>
            <?php echo $student_login_number ?>
          </span> <br>
          &emsp;身份证号码：
          <span>
            <?php echo $student_password ?>
          </span><br><br>

          新密码：
          <input id="textbox" style="display: none;" value="<?php echo $student_password_new ?>" />
          <mark style="background-color: yellow;">
            <?php echo $student_password_new ?>
          </mark>

          <!-- Copy password to clipboard 
          * disabled, 
          * issue: writeText() are not able to be use on unsecure network

          &ensp;<i class="fa fa-copy" onclick="copyText()" style="cursor: pointer; font-size: large;"></i>
          <small id="copyText" style="visibility: hidden; color: grey;">&ensp;copied!</small></br>
          -->

          <br>
          请立即<a href="exe/logout.php">登出</a>，并使用新密码重新登入
        </p><br>
      </div>
    </div>
  </div>

  <script>
    var text = document.getElementById("textbox");

    function copyText() {

      text.select();
      text.setSelectionRange(0, 99999);

      navigator.clipboard.writeText(text.value);

      document.getElementById("copyText").style.visibility = "visible";
    }
  </script>
</body>

</html>