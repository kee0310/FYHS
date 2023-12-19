<?php
require('connect.php');
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">

	<title>综合实践活动课程</title>

	<style>
		h2 {
			background: gray;
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			width: fit-content;
			font-family: 楷体, KaiTi !important;
			font-weight: bold !important;
			padding: 10px;
		}

		.login-heading {
			background: rgb(71, 232, 233);
			background: var(--main-color);
			font-family: 楷体, KaiTi;
			padding-top: 40px;
			font-size: 40px;
			height: 150px;
			color: white;
			font-weight: bold;
			text-shadow: 2px 3px 5px rgba(0, 0, 0, .3);
			clip-path: polygon(0% 0%,
					100% 0%,
					100% 80%,
					0% 100%);
		}

		.panel {
			background: rgba(255, 255, 255, 0.6) !important;
			font-size: larger !important;
			padding: 0 !important;
			max-width: 400px;
		}

		/* Hide arrow for input (Chrome, Safari, Edge, Opera) */
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}

		/* Hide arrow for input (Firefox) */
		input[type=number] {
			-moz-appearance: textfield;
			background: none;
		}

		::-ms-reveal {
			filter: invert(50%);
		}

		button[type=submit] {
			margin: auto;
			padding: 3px 15px;
			font-size: larger;
			font-family: arial;
			width: 100%;
			border-radius: 20px;
			border: none;
			width: 80%;
			background: var(--main-color);
			font-weight: bold;
		}

		button[type=submit]:hover {
			background: var(--second-color);
		}

		form .fa {
			background: var(--main-color);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			filter: brightness(90%);
		}

		form input:-webkit-autofill,
		form input:-webkit-autofill:hover,
		form input:-webkit-autofill:focus,
		form input:-webkit-autofill:active,
		form input {
			border: none;
			border-bottom: 1px solid transparent;
			border-image: var(--second-color);
			border-image-slice: 1;
			margin-bottom: 20px;
			background: none !important;
			-webkit-background-clip: text !important;
			-webkit-text-fill-color: grey !important;
			margin-left: 10px;
		}

		form input:focus {
			outline: none;
		}
	</style>
</head>

<body>
	<?php
	require('db.php');
	// If form submitted, insert values into the database.
	if (isset($_REQUEST['username'])) {
		// removes backslashes
		$username = stripslashes($_REQUEST['username']);
		//escapes special characters in a string
		$username = mysqli_real_escape_string($con, $username);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con, $password);

		$query = "SELECT * FROM `zstudent_detail` WHERE student_number='$username'";

		$result = mysqli_query($con, $query) or die(mysqli_error($con));
		$row = mysqli_fetch_assoc($result);
		$student_tf = $row["student_tf"];

		if ($student_tf == 1) {

			//Checking is user existing in the database or not
			$query = "SELECT * FROM `zstudent_detail` WHERE student_number='$username' and student_password='$password'";
			$result = mysqli_query($con, $query) or die(mysqli_error($con));
			$rows = mysqli_num_rows($result);


			$_SESSION['username'] = $username;

			if ($rows == 1) {

				$_SESSION['username'] = $username;
				$query = "UPDATE zstudent_detail SET student_tf='2' WHERE student_number='$username'";
				$result = mysqli_query($con, $query);


				echo "<meta http-equiv=REFRESH CONTENT=1;url=student_first_login.php>";
				exit();

			} else {
				echo "<div class='form'>
				<h3>Username/password is incorrect.</h3>
				<br/>Click here to <a href='student_login.php'>Login</a></div>";
			}
		} elseif ($student_tf == 2) {

			//Checking is user existing in the database or not
			$query = "SELECT * FROM `zstudent_detail` WHERE student_number='$username' and student_password_new='$password'";
			$result = mysqli_query($con, $query) or die(mysqli_error($con));
			$rows = mysqli_num_rows($result);

			$_SESSION['username'] = $username;


			if ($rows == 1) {

				$_SESSION['username'] = $username;
				echo "<meta http-equiv=REFRESH CONTENT=1;url=student_subject_all_list.php>";

				exit();

			} else {
				echo "<div class='form'>
				<h3>Username/password is incorrect.</h3>
				<br/>Click here to <a href='student_login.php'>Login</a></div>";
			}
		} else {

			echo "<div class='form'>
				<h3>Username/password is incorrect.</h3>
				<br/>Click here to <a href='student_login.php'>Login</a></div>";
		}

	} else {

		?>
		<?php
		$header = file_get_contents('header.php');
		echo $header;
		?>

		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

			<div class="row">
				<ol class="breadcrumb">
					<li><a href="index.php"><i class="fa fa-home"></i></a></li>
					<li><a href="">学生登入</a></li>
				</ol>
			</div><!--/.row-->


			<div style="display: flex; justify-content: center; margin-top: 50px;">
				<div class="panel col-xs-10 col-sm-8 col-md-6" align="center">
					<div class="login-heading">登入</div>

					<!-- Form Start -->
					<form class="panel-body" action="" method="post" name="login" style="padding: 20px; padding-top: 50px;">
						<?php
						require('connect.php');
						date_default_timezone_set("Asia/Kuala_Lumpur");
						$date = date('YmdHis', time());

						$start_time_view = 20230101000000;
						$end_time_view = 20240101000000;

						if ($start_time_view > $date) {
							echo '登记日期';
						} elseif ($end_time_view < $date) {
							echo '登记日期';
						} else {
							?>

							<div>
								<i class="fa fa-id-card"></i>
								<input id="username" type="number" name="username" placeholder="学号"
									oninvalid="this.setCustomValidity('请输入学号 (e.g. 200134)')" oninput="this.setCustomValidity('')" required />
							</div>
							<div>
								<i class="fa fa-key" aria-hidden="true"></i>
								<input id="password" type="password" name="password" placeholder="乱码 + 身份证号码"
									autocomplete="current-password" oninvalid="this.setCustomValidity('请输入乱码 + 身份证号码 (e.g. 8G124938017728)')"
									oninput="this.setCustomValidity('')" required />
							</div><br>
							<div align="center">
								<button type="submit" class="btn btn-primary">Login</button>
							</div>

							<?php
						}
						?>
					</form>
					<!-- Form End -->


				</div>
			</div>
		</div><!--/.main-->
	<?php } ?>



	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
	<script>
		!function ($) {
			$(document).on("click", "ul.nav li.parent > a > span.icon", function () {
				$(this).find('em:first').toggleClass("glyphicon-minus");
			});
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
			if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
			if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>

	<script>
		let username = document.querySelector("#username");

		// Prevent typing more than specific digit
		username.addEventListener("input", () => {
			if (username.value.length > 6) {
				username.value = username.value.substr(0, 6);
			}
		});

		// Prevent typing symbol
		username.onkeydown = function (e) {
			if (!((e.keyCode > 95 && e.keyCode < 106)
				|| (e.keyCode > 47 && e.keyCode < 58)
				|| e.keyCode == 8)) {
				return false;
			}
		}
	</script>
</body>

</html>