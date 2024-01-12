<?php
include('connect.php');;
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>学生课外实践活动</title>

  <!-- Get Header -->
  <?php
  session_start();
  include("header.php");
  require('../connect.php');
  ?>

</head>

<style>
  input {
    background: none;
    outline: none;
    border: none;
    border-bottom: 1px solid dimgray;
    background-clip: text !important;
    color: darkgray;
    font-family: "Consolas", 'Courier New', "kaiti";
    width: 100%;
    transition: .2s;
    margin-top: 20px;

    &:focus {
      border-bottom: 1px solid gray;
      box-shadow: rgba(255, 255, 255, .1) 0 7px 5px -4px;

      &::-webkit-outer-spin-button,
      &::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
    }

    &::-webkit-input-placeholder {
      color: grey;
    }

    &::-ms-reveal {
      filter: invert(70%);
    }

    &::-webkit-outer-spin-button,
    &::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    &[type=number] {
      appearance: textfield;
      -moz-appearance: textfield;
      background: none;
    }
  }

  .submit-btn {
    background-image: linear-gradient(115deg, #000000 20%, dimgray, #000000 80%);
    border-radius: 8px;
    padding: 0px 20px;
    outline: 1px solid black;
    margin-bottom: 10px;
  }
</style>

<body>
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="">管理员登入</a></li>
      </ol>
    </div>

    <!-- Login Panel -->
    <div align="center">
      <div class="login-panel panel panel-default" style="max-width: 400px; margin-top: 100px;">
        <div class="panel-heading">管理员登入</div>

        <!-- Form Start -->
        <form class="panel-body" action="" method="post" name="login">
          <div style="max-width: 250px; text-align: left;">
            <input type="text" id="id" name="id" placeholder="编号" autocomplete="off" required />
            <!-- Validate id -->
            <div style="color: firebrick; font-size: smaller;">
              <?php
              if (isset($_REQUEST['id'])) {
                $id = $_REQUEST['id'];

                // get user details from database
                $query = "SELECT * FROM `zadmin_detail` WHERE admin_id='$id'";
                $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                $row = mysqli_fetch_assoc($result);

                // check if id exsist
                $num_rows = mysqli_num_rows($result);
                if ($num_rows == 0) {
                  echo '⚠ <i>编号错误</i>';
                }

                // set session 
                $_SESSION['id'] = $id;
              }
              ?>
            </div>

            <input type="password" placeholder="密码" name="password" required />
            <!-- Validate password -->
            <div style="color: firebrick; font-size: smaller;">
              <?php
              if (isset($_REQUEST['password'])) {
                $password = $_REQUEST['password'];

                if ($num_rows == 1) {
                  // check if password correct 
                  if ($row['admin_password'] == $password) {
                    echo "<meta http-equiv=REFRESH CONTENT=1;url=admin_dashboard01.php>";
                  } else {
                    echo '⚠ <i>密码错误</i>';
                  }
                }
              }
              ?>
            </div>
          </div>

          <button type="submit" class="submit-btn">Login</button>
        </form>

      </div>
    </div>
  </div>
</body>

</html>