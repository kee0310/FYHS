<!-- 

	This is the login page for student.
	* Ref table in database: "zstudent_detail"

	- It will verify the id and password.
	  * Ref column: "student_id", "student_password" 
		
	- Student will be redirect to "student_index.php".
	- Student will be redirect to "student_first_login.php" if they are first time login. 
		* Ref column: "student_tf" 

-->
<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <title>综合实践活动课程</title>

  <!-- Get Header -->
  <?php
  session_start();
  include("header.php");
  include('connect.php');;
  ?>

</head>

<style>
  .panel {
    background: url('https://images.unsplash.com/photo-1550627951-a398399005a7?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8YmxhY2slMjBsaW5lc3xlbnwwfHwwfHx8MA%3D%3D');
    font-size: larger;
    max-width: 350px;
    width: 100vw;
    box-shadow: 1px 2px 20px rgba(255, 255, 255, .2);
    margin: 0;
    margin-top: 10vh;
    padding: 0;
    border-radius: 20px;
  }

  .login-heading {
    background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSy5Nz9j25lckauSdBdPi_54hkZxE8WyTqSJg&usqp=CAU') center;
    background-size: cover;
    background: none;
    font-size: 40px;
    padding: 20px;
    color: white;
    text-shadow: 2px 3px 5px rgba(0, 0, 0, .3);
    clip-path: polygon(0% 0%,
        100% 0%,
        100% 80%,
        0% 100%);
  }

  .panel-body {
    color: brown;
    background: white;
    border-radius: 50px 0 0 0;
    text-align: left;

    & .fa {
      background: #272727;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      filter: brightness(90%);
      padding-right: 10px;
      padding-top: 10px;

      & span {
        font-family: kaiti;
        padding-left: 10px;
      }
    }

    & a {
      color: brown;

      &:hover {
        color: dodgerblue;
      }
    }
  }

  input {
    background: none;
    outline: none;
    border: none;
    border-bottom: 1px solid black;
    background-clip: text !important;
    color: #000000db;
    font-family: "Consolas", 'Courier New', "kaiti";
    width: 100%;
    transition: .2s;


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

    &::-ms-reveal {
      filter: invert(20%);
    }

    &::-webkit-input-placeholder {
      color: #000000ad;
    }
  }

  .submit-btn {
    background: black;
    border-radius: 30px;
    margin: 30px 0;
    width: 100%;
  }

  input::-webkit-input-placeholder {
    color: #000000ad;
  }
</style>

<body>
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="">学生登入</a></li>
      </ol>
    </div>

    <!-- Login Panel -->
    <div style="display: flex; justify-content: center;">
      <div class="panel col-xs-10 col-sm-8 col-md-6" align="center">
        <div class="login-heading">登入</div>

        <!-- Form Start -->
        <form class="panel-body" action="" method="post" name="login">

          <div style="display: grid; padding: 40px ;">
            <div style="margin-top: 20px;">
              <i class="fa fa-id-card"><span>学号</span></i><br>
              <input id="id" type="text" name="id" placeholder="学生证号码" autocomplete="off" oninvalid="this.setCustomValidity('请输入学号 (e.g. 200134)')" oninput="this.setCustomValidity(''); this.value = this.value.toUpperCase()" required />
            </div>
            <!-- Validate id -->
            <div>
              <?php
              if (isset($_REQUEST['id'])) {
                $id = $_REQUEST['id'];

                // get user details from database
                $query = "SELECT * FROM `zstudent_detail` WHERE student_id='$id'";
                $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                $row = mysqli_fetch_assoc($result);

                // get user details from database
                $query1 = "SELECT teacher_id FROM `zteacher_detail` WHERE teacher_id='$id'";
                $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));

                // check if id exist
                $num_rows = mysqli_num_rows($result);
                $num_rows1 = mysqli_num_rows($result1);
                if ($num_rows == 0 && $num_rows1 == 0) {
                  echo '⚠ <i>学号错误</i>';
                } elseif ($num_rows > 1) {
                  echo '⚠ <i>账号重复，请联络电脑中心</i>';
                } elseif ($num_rows1 >= 1) {
                  echo '⚠ <i>请使用<a href="teacher_login.php"><u>教师登入</u></a></i> ';
                }

                // set session 
                $_SESSION['id'] = $id;
              }
              ?>
            </div>

            <div style="margin-top: 30px;">
              <i class="fa fa-key"><span>密码</span></i>
              <input id="password" type="password" name="password" placeholder="乱码 + 身份证号码" oninvalid="this.setCustomValidity('请输入乱码 + 身份证号码 (e.g. 8G124938017728)')" oninput="this.setCustomValidity('')" required />
            </div>
            <!-- Validate password -->
            <div>
              <?php
              if (isset($_REQUEST['password'])) {
                $password = $_REQUEST['password'];

                if ($num_rows == 1) {
                  // redirect student to different page if first time login
                  if ($row['student_tf'] == 1) {
                    // check if password correct 
                    if ($row['student_password'] == $password) {
                      mysqli_query($conn, "UPDATE zstudent_detail SET student_tf='2' WHERE student_id='$id'"); // set student_tf to 2
                      echo "<meta http-equiv=REFRESH CONTENT=1;url=student_first_login.php>";
                      exit();
                    } else {
                      echo '⚠ <i>密码错误</i>';
                    }
                  } elseif ($row['student_tf'] == 2) {
                    // check if password correct 
                    if ($row['student_password_new'] == $password) {
                      echo "<meta http-equiv=REFRESH CONTENT=1;url=student_index.php>";
                      exit();
                    } else {
                      echo '⚠ <i>密码错误</i>';
                    }
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

  <script>
    let id = document.querySelector("#id");

    // Prevent typing more than specific digit
    id.addEventListener("input", () => {
      if (id.value.length > 6) {
        id.value = id.value.substr(0, 6);
      }
    });

    // Remember id
    let remember = function() {
      localStorage.setItem("id_remembered", id.value);
    };
    id.addEventListener("input", remember);
    id.addEventListener("change", remember);
    id.value = localStorage.getItem("id_remembered");
  </script>
</body>

</html>