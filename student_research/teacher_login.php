<!-- 

	This is the login page for teacher.
	It can't be access directly from main page.
	Ref table in database: "zteacher_detail"

	Teacher will be redirect to "teacher_dashboard01.php"

-->
<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>学生课外实践活动 | 指导老师登入</title>

	<!-- Get Header -->
	<?php
	session_start();
	include("header.php");
	require('exe/connect.php');
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
			-moz-appearance: textfield;
			background: none;
		}
	}


	.submit-btn {
		background-image: linear-gradient(115deg, #000000 20%, dimgray, #000000 80%);
		transition: 0.5s;
		background-size: 200% auto;
		color: white;
		border-radius: 8px;
		display: block;
		border: none;
		background-position: right center;
		margin-top: 50px;
		margin-bottom: 10px;
		padding: 0px 20px;
		outline: 1px solid black;

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
				<li><a href="">指导老师登入</a></li>
			</ol>
		</div>

		<!-- Login Panel -->
		<div align="center">
			<div class="login-panel panel panel-default" style="max-width: 400px; margin-top: 100px;">
				<div class="panel-heading">指导老师登入</div>

				<!-- Form Start -->
				<form class="panel-body" action="" method="post" name="login">
					<div style="max-width: 250px; text-align: left;">
						<input type="number" id="username" name="username" placeholder="教师编号" autocomplete="off" required />
						<!-- Validate username -->
						<div style="color: firebrick; font-size: smaller;">
							<?php
							if (isset($_REQUEST['username'])) {
								$username = $_REQUEST['username'];

								// get user details from database
								$query = "SELECT * FROM `zteacher_detail` WHERE teacher_number='$username'";
								$result = mysqli_query($link, $query) or die(mysqli_error($link));
								$row = mysqli_fetch_assoc($result);

								// check if username exsist
								$num_rows = mysqli_num_rows($result);
								if ($num_rows == 0) {
									echo '⚠ <i>编号错误</i>';
								}

								// set session 
								$_SESSION['username'] = $username;
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
									if ($row['teacher_password'] == $password) {
										echo "<meta http-equiv=REFRESH CONTENT=1;url=teacher_dashboard01.php>";
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

	<script>
		let username = document.querySelector("#username");

		// Prevent typing more than specific digit
		username.addEventListener("input", () => {
			if (username.value.length > 3) {
				username.value = username.value.substr(0, 3);
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
	</script>

</body>

</html>