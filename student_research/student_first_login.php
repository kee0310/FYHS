<?php
require('connect.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>综合实践活动课程</title>

	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="lib/jquery.js" type="text/javascript"></script>
	<script src="src/facebox.js" type="text/javascript"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$('a[rel*=facebox]').facebox({
				loadingImage: 'src/loading.gif',
				closeImage: 'src/closelabel.png'
			})
		})
	</script>

	<style type="text/css">
		.dot {
			height: 100px;
			width: 100px;
			background: var(--second-color);
			color: white;
			border-radius: 50%;
			display: flex;
			justify-content: center;
			align-items: center;
			font-size: 50px;
			font-weight: bold;
			opacity: 100%;
			box-shadow: 3px 2px 6px 0px rgba(0, 0, 0, 0.2);
			text-shadow: 3px 3px 4px rgba(0, 0, 0, 0.2);
		}

		.text {
			position: absolute;
			z-index: -1;
			padding: 20px 100px;
			padding-left: 120px;
		}
	</style>

</head>

<body>

	<?php
	$header = file_get_contents('header_student_first_login.php');
	echo $header;
	?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<?php
		include('connect.php');
		$id = $_SESSION['username'];
		$result = mysqli_query($link, "SELECT * FROM zstudent_detail where student_number='$id'");
		while ($row = mysqli_fetch_array($result)) {
			$student_login_number = $row["student_login_number"];
			if ($student_login_number != null) {

			} else {
				$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$charactersLength = strlen($characters);
				$randomString = '';
				for ($i = 0; $i < 2; $i++) {
					$randomString .= $characters[random_int(0, $charactersLength - 1)];
				}
				$student_login_number = $randomString;
				$student_password_new = $student_login_number . $row["student_password"];
				mysqli_query(
					$link,
					"UPDATE zstudent_detail 
						SET student_login_number='$student_login_number',
						    student_password_new='$student_password_new'
						WHERE student_number='$id'"
				);
			}
			?>


			<div class="panel panel-default" style="margin-top: 100px;">
				<div class="panel-heading">首次登入</div>

				<div style="display: flex; align-items: center; margin: 50px 20px">
					<div class="dot">
						<?php echo $student_login_number ?>
					</div>
					<div class="panel panel-default text">
						<?php echo $row["student_password"] ?>
					</div>
				</div>
				<div class="panel-body">

					<p>
						以上是你的 <span style="color: red">2 位数乱码</span> 与及 <span style="color: red">登入密码（身份证号码）</span></br>
						2位数乱码：
						<span style="color: red">
							<?php echo $student_login_number ?>
						</span> <br>
						身份证号码：
						<span style="color: red">
							<?php echo $row["student_password"] ?>
						</span><br><br>

						请立即<a href="student_logout.php">登出</a>，并使用新密码重新登入</br>

						新密码：
						<textarea id="textbox"
							style="display: none;"><?php echo $student_login_number . $row["student_password"] ?></textarea>
						<mark style="background-color: yellow;">
							<?php echo $student_login_number . $row["student_password"] ?>
						</mark>
						&ensp;<i class="fa fa-copy" onclick="copyText()" style="cursor: pointer; font-size: x-large;"></i>
					</p>
				</div>
			</div>
			<?php
		}
		?>
	</div><!--/.main-->

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
		function copyText() {
			var Text = document.getElementById("textbox");

			Text.select();

			navigator.clipboard.writeText(Text.value);

			alert(Text.value + " copied to clipboard!")
		}
	</script>
</body>

</html>