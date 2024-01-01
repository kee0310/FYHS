<!-- 

	This is the login page for student.
	Ref table in database: "zstudent_detail"

	Student will be redirect to "student_subject_all_list.php".

	( Student will be redirect to "student_first_login.php" if they are first time login. 
		Ref column: "student_tf" )

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
	require('exe/connect.php');
	?>

</head>

<style>
	.panel {
		background: rgba(255, 255, 255, .3);
		font-size: larger;
		max-width: 400px;
		box-shadow: 1px 2px 20px rgba(255, 255, 255, .2);
		margin-top: 10vh;
	}

	.login-heading {
		background: linear-gradient(115deg, #379ecf, #000000 80%);
		background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSy5Nz9j25lckauSdBdPi_54hkZxE8WyTqSJg&usqp=CAU') center;
		background-size: cover;
		padding-top: 60px;
		font-size: 40px;
		height: 200px;
		color: white;
		font-weight: bold;
		text-shadow: 2px 3px 5px rgba(0, 0, 0, .3);
		clip-path: polygon(0% 0%,
				100% 0%,
				100% 80%,
				0% 100%);
	}

	.panel-body {
		color: brown;
		padding: 20px;
		display: grid;
		justify-content: center;
		background: none;

		& .fa {
			background: linear-gradient(115deg, #379ecf, #000000 90%);
			background-clip: text;
			-webkit-text-fill-color: transparent;
			filter: brightness(90%);
			padding-right: 10px;
			padding-top: 10px;
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
		color: #0000007a;
		font-family: "Consolas", 'Courier New', "kaiti";
		width: 100%;
		transition: .2s;

		&:focus {
			border-bottom: 1px solid #007db9;
		}

		&::-webkit-outer-spin-button,
		&::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}

		&[type=number] {
			-moz-appearance: textfield;
			background: none;
		}

		&::-ms-reveal {
			filter: invert(20%);
		}

		&::-webkit-input-placeholder {
			color: #0000007a;
		}
	}

	.submit-btn {
		background-image: linear-gradient(115deg, #000000 20%, #379ecf, #000000 80%);
		width: 100%;
		text-transform: uppercase;
		transition: 0.5s;
		background-size: 200% auto;
		color: white;
		border-radius: 30px;
		display: block;
		border: none;
		background-position: right center;
		margin-top: 50px;

		&:hover {
			background-position: left center;
			color: #fff;
			text-decoration: none;
		}
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
					<div style="display: flex; margin-top: 20px;">
						<i class="fa fa-id-card"></i>
						<input id="username" type="number" name="username" placeholder="学号" autocomplete="off" oninvalid="this.setCustomValidity('请输入学号 (e.g. 200134)')" oninput="this.setCustomValidity('')" required />
					</div>
					<!-- Validate username -->
					<div>
						<?php
						if (isset($_REQUEST['username'])) {
							$username = $_REQUEST['username'];

							// get user details from database
							$query = "SELECT * FROM `zstudent_detail` WHERE student_number='$username'";
							$result = mysqli_query($link, $query) or die(mysqli_error($link));
							$row = mysqli_fetch_assoc($result);

							// get user details from database
							$query1 = "SELECT teacher_number FROM `zteacher_detail` WHERE teacher_number='$username'";
							$result1 = mysqli_query($link, $query1) or die(mysqli_error($link));

							// check if username exsist
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
							$_SESSION['username'] = $username;
						}
						?>
					</div>

					<div style="display: flex; margin-top: 20px;">
						<i class="fa fa-key" aria-hidden="true"></i>
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
										mysqli_query($link, "UPDATE zstudent_detail SET student_tf='2' WHERE student_number='$username'"); // set student_tf to 2
										echo "<meta http-equiv=REFRESH CONTENT=1;url=student_first_login.php>";
										exit();
									} else {
										echo '⚠ <i>密码错误</i>';
									}
								} elseif ($row['student_tf'] == 2) {
									// check if password correct 
									if ($row['student_password_new'] == $password) {
										echo "<meta http-equiv=REFRESH CONTENT=1;url=student_subject_all_list.php>";
										exit();
									} else {
										echo '⚠ <i>密码错误</i>';
									}
								}
							}
						}
						?>
					</div>

					<button type="submit" class="submit-btn">Login</button>
				</form>

			</div>
		</div>
	</div>

	<script>
		let username = document.querySelector("#username");

		// Prevent typing more than specific digit
		username.addEventListener("input", () => {
			if (username.value.length > 6) {
				username.value = username.value.substr(0, 6);
			}
		});

		// Prevent typing symbol
		username.onkeydown = function(e) {
			if (!((e.keyCode > 95 && e.keyCode < 106) ||
					(e.keyCode > 47 && e.keyCode < 58) ||
					e.keyCode == 8)) {
				return false;
			}
		}

		// Remember username
		let remember = function() {
			localStorage.setItem("id_remembered", username.value);
		};
		username.addEventListener("input", remember);
		username.addEventListener("change", remember);
		username.value = localStorage.getItem("id_remembered");
	</script>
</body>

</html>