<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>预订系统</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

	<!--Icons-->
	<script src="js/lumino.glyphs.js"></script>

	<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="lib/jquery.js" type="text/javascript"></script>
	<script src="src/facebox.js" type="text/javascript"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('a[rel*=facebox]').facebox({
				loadingImage: 'src/loading.gif',
				closeImage: 'src/closelabel.png'
			})
		})
	</script>
	<style>
		login {
			width: 100%;
			align: center;
		}
	</style>


</head>

<body>
	<?php
	include('connect.php');
	include("connect2.php");
	require('connect.php');
	require('db.php');
	include("exe/auth.php");

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$student_number2 = $_SESSION['username'];
	$query = "SELECT * FROM `reserve_shop` WHERE reserve_name='$student_number2'";

	$result = mysqli_query($con, $query) or die(mysql_error());
	$row = mysqli_fetch_assoc($result);

	if ($row["reserve_tf"] == 2) {

		date_default_timezone_set("Asia/Kuala_Lumpur");
		$date = date('Y-m-d/H:i:s', time());


		$student_number = $_POST['student_number'];
		$reserve_slot = $_POST['reserve_slot'];
		$intime = $date;


		$sql = "INSERT INTO reserve2_shop (reserve2_student_number,reserve2_slot,reserve2_in_time)
VALUES (N'$student_number',N'$reserve_slot',N'$intime')";





		if (mysqli_query($conn, $sql)) {


			$student_number2 = $_SESSION['username'];
			$reserve_tf = 2;
			mysql_query("UPDATE reserve_shop SET reserve_tf='$reserve_tf' WHERE reserve_name='$student_number2'");




			echo "<div class='form'>
				<div style='width: 100%' align='center'><h3>登记完成</h3></div>
				</div>";
			session_destroy();

			echo "<meta http-equiv=REFRESH CONTENT=3;url=http://www.fyk.edu.my>";

			exit();
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	} else {

		echo "<div class='form'>
				<div style='width: 100%' align='center'><h3>登记失败</h3></div>
				</div>";
		session_destroy();

		echo "<meta http-equiv=REFRESH CONTENT=3;url=http://www.fyk.edu.my>";
	}

	mysqli_close($conn);


	?>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
	<script>
		! function($) {
			$(document).on("click", "ul.nav li.parent > a > span.icon", function() {
				$(this).find('em:first').toggleClass("glyphicon-minus");
			});
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function() {
			if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function() {
			if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
</body>

</html>