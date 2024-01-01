<!DOCTYPE html>
<?php
require('connect.php');
require('db.php');
include("exe/auth.php");
?>
<html lang="en">

<head>
	<!-- Basic Page Needs
    ================================================== -->
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>宽柔中学古来分校 Foon Yew High School - Kulai Student Portal</title>
	<meta name="description" content="宽柔中学古来分校 Foon Yew High School - Kulai">
	<meta name="keywords" content="宽柔中学古来分校 Foon Yew High School - Kulai">

	<!-- Favicons
    ================================================== -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

	<!-- Slider
    ================================================== -->
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
	<link href="css/owl.theme.css" rel="stylesheet" media="screen">

	<!-- Stylesheet
    ================================================== -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="js/modernizr.custom.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<style>
		login {
			width: 100%;
			align: center;
		}

		.button {
			background-color: #fcac45;
			border: none;
			color: black;
			font-weight: bold;
			padding: 10px 30px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 2px 2px;
			cursor: pointer;
			border-radius: 8px;
			width: 200px;
		}
	</style>
</head>

<body>
	<!-- Navigation
    ==========================================-->
	<nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php" title="宽柔中学古来分校">宽柔中学古来分校</a>
				<a class="navbar-brand" href="#" style="font-size: 12px;padding: 20px">
					<?php
					include('connect.php');


					$id = $_SESSION['username'];
					$result = mysql_query("
							
							SELECT *
							FROM reserve_shop
							WHERE reserve_name = '$id'
							");
					while ($row = mysql_fetch_array($result)) {
						echo $row['reserve_name'];
						echo '&nbsp;&nbsp;';
						echo $row['student_name'];
					}
					?>
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<?php
			$headerstudent = file_get_contents('headerstudent.php');
			echo $headerstudent;
			?>
			<!-- /.navbar-collapse -->



		</div><!-- /.container-fluid -->
	</nav>

	<!-- Team Page
    ==========================================-->
	<div id="tf-team" class="text-center">
		<div class="overlay">
			<div class="container">
				<div class="section-title center">
					<h2 style="font-style: normal;">自强不息 • 厚德载物</h2>
					<div class="line">
						<hr>
					</div>
				</div>

				<div id="team" class="owl-carousel owl-theme row">

				</div>

			</div>
		</div>
	</div>

	<!-- About Us Page
    ==========================================-->
	<div id="tf-about" class="text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="section-title center">
						<h2>我的订单 <strong>My Order</strong></h2>
						<div class="line">
							<hr>
						</div>
					</div>


					<?php
					require('connect.php');
					date_default_timezone_set("Asia/Kuala_Lumpur");
					$date = date('YmdHis', time());


					$start_time_view =	20220509090000;
					$end_time_view =	20220511235900;



					if ($start_time_view > $date) {

						echo '开放订餐时间：9/5/2022 星期一（9.00 am）开始到 11/5/2022 星期三（11.59 pm）';
					} elseif ($end_time_view < $date) {

						echo '开放订餐时间：9/5/2022 星期一（9.00 am）开始到 11/5/2022 星期三（11.59 pm）';
					} else {

					?>



						<div class="section-title center">
							<div align="center">
								<?php


								include('connect.php');


								$id = $_SESSION['username'];
								$result = mysql_query("
							
							SELECT *
							FROM reserve_shop
							WHERE reserve_name = '$id'
							");
								while ($row = mysql_fetch_array($result)) {
									echo $row['reserve_name'];
									echo '&nbsp;&nbsp;';
									echo $row['student_name'];
									echo '&nbsp;&nbsp;';
									echo $row['student_class'];
								}
								?>

								<div style="height: 10px"></div>
								<table style="width: 100%; border: 1px solid #000">
									<thead>
										<tr>
											<th style="width: 20%; text-align: center;font-size: 14px;line-height: 3.6;">日期</th>
											<th style="width: 10%; text-align: center;font-size: 14px;">档口</th>
											<th style="width: 30%; text-align: center;font-size: 14px;">餐点</th>
											<th style="width: 20%; text-align: center;font-size: 14px;">RM</th>
											<th style="width: 20%; text-align: center;font-size: 14px;">取消</th>
										</tr>
									</thead>
									<?php
									include('connect.php');
									$id = $_SESSION['username'];

									$result = mysql_query(" 
							SELECT a.reserve_fd3_food_id,c.reserve_fd2_date,c.reserve_fd2_store,c.reserve_fd2_name,c.reserve_fd2_price,a.reserve_fd3_id
							FROM reserve_fd3 a
							JOIN reserve_shop b ON b.reserve_name = a.reserve_fd3_student_number
							JOIN reserve_fd2 c ON c.reserve_fd2_id = a.reserve_fd3_food_id
							WHERE a.reserve_fd3_student_number ='$id'
							");
									while ($row = mysql_fetch_array($result)) {
										echo '<tr>';
										echo '<td style="text-align: center;font-size: 14px;line-height: 3.6;">' . $row['reserve_fd2_date'] . '</td>';
										echo '<td style="text-align: center;font-size: 14px;">' . $row['reserve_fd2_store'] . '</td>';
										echo '<td style="text-align: center;font-size: 14px;">' . $row['reserve_fd2_name'] . '</td>';
										echo '<td style="text-align: center;font-size: 14px;">' . $row['reserve_fd2_price'] . '</td>';
										echo '<td style="text-align: center;font-size: 14px;">
								<form action="reserve_food_cancel.php" method="post" name="fd3id">
								<input type="hidden" name="fd3id" value="' . $row["reserve_fd3_id"] . '" readonly>
								<div align="center"><input name="submit" type="submit" value="取消" /></div>
								</form>
					</td>';
										echo '</tr>';
									}
									?>
									</tbody>
								</table>
								<div style="height: 30px"></div>

								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-body tabs">
											<ul class="nav nav-tabs">

												<?php


												include('connect.php');
												$result = mysql_query("
							
							SELECT *
							FROM reserve_fd1 
							");
												while ($row = mysql_fetch_array($result)) {

													echo '<li><a href="#';
													echo $row['reserve_fd1_date'];
													echo '" data-toggle="tab">';
													echo $row['reserve_fd1_date'];
													echo '</a></li>';
												}
												?>

											</ul>

											<div class="tab-content">

												<div class="tab-pane fade in active" id="-">
													<div style="height: 20px"></div>
													<table style="width: 100%">
														<thead>
															<tr>

																<th style="width: 10%; text-align: center;font-size: 14px;">档口编号</th>
																<th style="width: 40%; text-align: center;font-size: 14px;">食物</th>
																<th style="width: 15%; text-align: center;font-size: 14px;">价钱 (RM)</th>
																<th style="width: 15%; text-align: center;font-size: 14px;">早餐 / 午餐</th>
																<th style="width: 20%; text-align: center;font-size: 14px;">订购</th>
															</tr>
														</thead>
														<tbody>
															<?php
															include('connect.php');

															$date = '-no';
															$id = $_SESSION['username'];

															$result = mysql_query("
			
									SELECT *
									FROM reserve_shop
									WHERE reserve_name = '$id'

			");
															$row = mysql_fetch_assoc($result);
															$student_class = $row['student_class'];


															$result = mysql_query("SELECT * FROM reserve_fd2 where reserve_fd2_date = '$date'");
															while ($row = mysql_fetch_array($result)) {
																echo '<tr>';
																echo '<td style="text-align: center;font-size: 14px;line-height: 3.6;">' . $row["reserve_fd2_store"] . '</td>';
																echo '<td style="text-align: center;font-size: 14px;">' . $row["reserve_fd2_name"] . '</td>';
																echo '<td style="text-align: center;font-size: 14px;">' . $row["reserve_fd2_price"] . '</td>';

																if ($row["reserve_fd2_ma"] == "m") {

																	echo "<td style='text-align: center'>早餐</td>";
																} elseif ($row["reserve_fd2_ma"] == "a") {

																	echo "<td style='text-align: center'>午餐</td>";
																} else {

																	echo "<td style='text-align: center'>其它</td>";
																}

																echo '<td style="text-align: center;font-size: 14px;">
								<form action="reserve_food_slot_exe.php" method="post" name="login">
								<input type="hidden" name="student_number" value="' . $_SESSION['username'] . '" readonly>
								<input type="hidden" name="student_class" value="' . $student_class . '" readonly>
								<input type="hidden" name="food_id" value="' . $row["reserve_fd2_id"] . '" readonly>
								<input type="hidden" name="food_store" value="' . $row["reserve_fd2_store"] . '" readonly>
								<input type="hidden" name="food_date" value="' . $row["reserve_fd2_date"] . '" readonly>
								<input type="hidden" name="food_ma" value="' . $row["reserve_fd2_ma"] . '" readonly>
								<div align="center"><input name="submit" type="submit" value="订购" /></div>
								</form>
								</td>';
																echo '</tr>';
															}

															?>
														</tbody>
													</table>
												</div>


												<div class="tab-pane fade" id="17-May">
													<div style="height: 20px"></div>
													<table style="width: 100%">
														<thead>
															<tr>

																<th style="width: 10%; text-align: center;font-size: 14px;">档口编号</th>
																<th style="width: 40%; text-align: center;font-size: 14px;">食物</th>
																<th style="width: 15%; text-align: center;font-size: 14px;">价钱 (RM)</th>
																<th style="width: 15%; text-align: center;font-size: 14px;">早餐 / 午餐</th>
																<th style="width: 20%; text-align: center;font-size: 14px;">订购</th>
															</tr>
														</thead>
														<tbody>
															<?php
															include('connect.php');

															$date = '17-May';
															$id = $_SESSION['username'];
															$result = mysql_query("SELECT * FROM reserve_fd2 where reserve_fd2_date = '$date'");
															while ($row = mysql_fetch_array($result)) {
																echo '<tr>';
																echo '<td style="text-align: center;font-size: 14px;line-height: 3.6;">' . $row["reserve_fd2_store"] . '</td>';
																echo '<td style="text-align: center;font-size: 14px;">' . $row["reserve_fd2_name"] . '</td>';
																echo '<td style="text-align: center;font-size: 14px;">' . $row["reserve_fd2_price"] . '</td>';

																if ($row["reserve_fd2_ma"] == "m") {

																	echo "<td style='text-align: center'>早餐</td>";
																} elseif ($row["reserve_fd2_ma"] == "a") {

																	echo "<td style='text-align: center'>午餐</td>";
																} else {

																	echo "<td style='text-align: center'>其它</td>";
																}

																echo '<td>
								<form action="reserve_food_slot_exe.php" method="post" name="login">
								<input type="hidden" name="student_number" value="' . $_SESSION['username'] . '" readonly>
								<input type="hidden" name="student_class" value="' . $student_class . '" readonly>
								<input type="hidden" name="food_id" value="' . $row["reserve_fd2_id"] . '" readonly>
								<input type="hidden" name="food_store" value="' . $row["reserve_fd2_store"] . '" readonly>
								<input type="hidden" name="food_date" value="' . $row["reserve_fd2_date"] . '" readonly>
								<input type="hidden" name="food_ma" value="' . $row["reserve_fd2_ma"] . '" readonly>
								<div align="center"><input name="submit" type="submit" value="订购" /></div>
								</form>
								</td>';
																echo '</tr>';
															}

															?>
														</tbody>
													</table>
												</div>


												<div class="tab-pane fade" id="18-May">
													<div style="height: 20px"></div>
													<table style="width: 100%">
														<thead>
															<tr>

																<th style="width: 10%; text-align: center;font-size: 14px;">档口编号</th>
																<th style="width: 40%; text-align: center;font-size: 14px;">食物</th>
																<th style="width: 15%; text-align: center;font-size: 14px;">价钱 (RM)</th>
																<th style="width: 15%; text-align: center;font-size: 14px;">早餐 / 午餐</th>
																<th style="width: 20%; text-align: center;font-size: 14px;">订购</th>
															</tr>
														</thead>
														<tbody>
															<?php
															include('connect.php');

															$date = '18-May';
															$id = $_SESSION['username'];
															$result = mysql_query("SELECT * FROM reserve_fd2 where reserve_fd2_date = '$date'");
															while ($row = mysql_fetch_array($result)) {
																echo '<tr>';
																echo '<td style="text-align: center;font-size: 14px;line-height: 3.6;">' . $row["reserve_fd2_store"] . '</td>';
																echo '<td style="text-align: center;font-size: 14px;">' . $row["reserve_fd2_name"] . '</td>';
																echo '<td style="text-align: center;font-size: 14px;">' . $row["reserve_fd2_price"] . '</td>';

																if ($row["reserve_fd2_ma"] == "m") {

																	echo "<td style='text-align: center'>早餐</td>";
																} elseif ($row["reserve_fd2_ma"] == "a") {

																	echo "<td style='text-align: center'>午餐</td>";
																} else {

																	echo "<td style='text-align: center'>其它</td>";
																}

																echo '<td>
								<form action="reserve_food_slot_exe.php" method="post" name="login">
								<input type="hidden" name="student_number" value="' . $_SESSION['username'] . '" readonly>
								<input type="hidden" name="student_class" value="' . $student_class . '" readonly>
								<input type="hidden" name="food_id" value="' . $row["reserve_fd2_id"] . '" readonly>
								<input type="hidden" name="food_store" value="' . $row["reserve_fd2_store"] . '" readonly>
								<input type="hidden" name="food_date" value="' . $row["reserve_fd2_date"] . '" readonly>
								<input type="hidden" name="food_ma" value="' . $row["reserve_fd2_ma"] . '" readonly>
								<div align="center"><input name="submit" type="submit" value="订购" /></div>
								</form>
								</td>';
																echo '</tr>';
															}

															?>
														</tbody>
													</table>
												</div>



												<div class="tab-pane fade" id="19-May">
													<div style="height: 20px"></div>
													<table style="width: 100%">
														<thead>
															<tr>

																<th style="width: 10%; text-align: center;font-size: 14px;">档口编号</th>
																<th style="width: 40%; text-align: center;font-size: 14px;">食物</th>
																<th style="width: 15%; text-align: center;font-size: 14px;">价钱 (RM)</th>
																<th style="width: 15%; text-align: center;font-size: 14px;">早餐 / 午餐</th>
																<th style="width: 20%; text-align: center;font-size: 14px;">订购</th>
															</tr>
														</thead>
														<tbody>
															<?php
															include('connect.php');

															$date = '19-May';
															$id = $_SESSION['username'];
															$result = mysql_query("SELECT * FROM reserve_fd2 where reserve_fd2_date = '$date'");
															while ($row = mysql_fetch_array($result)) {
																echo '<tr>';
																echo '<td style="text-align: center;font-size: 14px;line-height: 3.6;">' . $row["reserve_fd2_store"] . '</td>';
																echo '<td style="text-align: center;font-size: 14px;">' . $row["reserve_fd2_name"] . '</td>';
																echo '<td style="text-align: center;font-size: 14px;">' . $row["reserve_fd2_price"] . '</td>';

																if ($row["reserve_fd2_ma"] == "m") {

																	echo "<td style='text-align: center'>早餐</td>";
																} elseif ($row["reserve_fd2_ma"] == "a") {

																	echo "<td style='text-align: center'>午餐</td>";
																} else {

																	echo "<td style='text-align: center'>其它</td>";
																}

																echo '<td>
								<form action="reserve_food_slot_exe.php" method="post" name="login">
								<input type="hidden" name="student_number" value="' . $_SESSION['username'] . '" readonly>
								<input type="hidden" name="student_class" value="' . $student_class . '" readonly>
								<input type="hidden" name="food_id" value="' . $row["reserve_fd2_id"] . '" readonly>
								<input type="hidden" name="food_store" value="' . $row["reserve_fd2_store"] . '" readonly>
								<input type="hidden" name="food_date" value="' . $row["reserve_fd2_date"] . '" readonly>
								<input type="hidden" name="food_ma" value="' . $row["reserve_fd2_ma"] . '" readonly>
								<div align="center"><input name="submit" type="submit" value="订购" /></div>
								</form>
								</td>';
																echo '</tr>';
															}

															?>
														</tbody>
													</table>
												</div>


												<div class="tab-pane fade" id="20-May">
													<div style="height: 20px"></div>
													<table style="width: 100%">
														<thead>
															<tr>

																<th style="width: 10%; text-align: center;font-size: 14px;">档口编号</th>
																<th style="width: 40%; text-align: center;font-size: 14px;">食物</th>
																<th style="width: 15%; text-align: center;font-size: 14px;">价钱 (RM)</th>
																<th style="width: 15%; text-align: center;font-size: 14px;">早餐 / 午餐</th>
																<th style="width: 20%; text-align: center;font-size: 14px;">订购</th>
															</tr>
														</thead>
														<tbody>
															<?php
															include('connect.php');

															$date = '20-May';
															$id = $_SESSION['username'];
															$result = mysql_query("SELECT * FROM reserve_fd2 where reserve_fd2_date = '$date'");
															while ($row = mysql_fetch_array($result)) {
																echo '<tr>';
																echo '<td style="text-align: center;font-size: 14px;line-height: 3.6;">' . $row["reserve_fd2_store"] . '</td>';
																echo '<td style="text-align: center;font-size: 14px;">' . $row["reserve_fd2_name"] . '</td>';
																echo '<td style="text-align: center;font-size: 14px;">' . $row["reserve_fd2_price"] . '</td>';

																if ($row["reserve_fd2_ma"] == "m") {

																	echo "<td style='text-align: center'>早餐</td>";
																} elseif ($row["reserve_fd2_ma"] == "a") {

																	echo "<td style='text-align: center'>午餐</td>";
																} else {

																	echo "<td style='text-align: center'>其它</td>";
																}

																echo '<td>
								<form action="reserve_food_slot_exe.php" method="post" name="login">
								<input type="hidden" name="student_number" value="' . $_SESSION['username'] . '" readonly>
								<input type="hidden" name="student_class" value="' . $student_class . '" readonly>
								<input type="hidden" name="food_id" value="' . $row["reserve_fd2_id"] . '" readonly>
								<input type="hidden" name="food_store" value="' . $row["reserve_fd2_store"] . '" readonly>
								<input type="hidden" name="food_date" value="' . $row["reserve_fd2_date"] . '" readonly>
								<input type="hidden" name="food_ma" value="' . $row["reserve_fd2_ma"] . '" readonly>
								<div align="center"><input name="submit" type="submit" value="订购" /></div>
								</form>
								</td>';
																echo '</tr>';
															}

															?>
														</tbody>
													</table>
												</div>


												<div class="tab-pane fade" id="21-May">
													<div style="height: 20px"></div>
													<table style="width: 100%">
														<thead>
															<tr>

																<th style="width: 10%; text-align: center;font-size: 14px;">档口编号</th>
																<th style="width: 40%; text-align: center;font-size: 14px;">食物</th>
																<th style="width: 15%; text-align: center;font-size: 14px;">价钱 (RM)</th>
																<th style="width: 15%; text-align: center;font-size: 14px;">早餐 / 午餐</th>
																<th style="width: 20%; text-align: center;font-size: 14px;">订购</th>
															</tr>
														</thead>
														<tbody>
															<?php
															include('connect.php');

															$date = '21-May';
															$id = $_SESSION['username'];
															$result = mysql_query("SELECT * FROM reserve_fd2 where reserve_fd2_date = '$date'");
															while ($row = mysql_fetch_array($result)) {
																echo '<tr>';
																echo '<td style="text-align: center;font-size: 14px;line-height: 3.6;">' . $row["reserve_fd2_store"] . '</td>';
																echo '<td style="text-align: center;font-size: 14px;">' . $row["reserve_fd2_name"] . '</td>';
																echo '<td style="text-align: center;font-size: 14px;">' . $row["reserve_fd2_price"] . '</td>';

																if ($row["reserve_fd2_ma"] == "m") {

																	echo "<td style='text-align: center'>早餐</td>";
																} elseif ($row["reserve_fd2_ma"] == "a") {

																	echo "<td style='text-align: center'>午餐</td>";
																} else {

																	echo "<td style='text-align: center'>其它</td>";
																}

																echo '<td>
								<form action="reserve_food_slot_exe.php" method="post" name="login">
								<input type="hidden" name="student_number" value="' . $_SESSION['username'] . '" readonly>
								<input type="hidden" name="student_class" value="' . $student_class . '" readonly>
								<input type="hidden" name="food_id" value="' . $row["reserve_fd2_id"] . '" readonly>
								<input type="hidden" name="food_store" value="' . $row["reserve_fd2_store"] . '" readonly>
								<input type="hidden" name="food_date" value="' . $row["reserve_fd2_date"] . '" readonly>
								<input type="hidden" name="food_ma" value="' . $row["reserve_fd2_ma"] . '" readonly>
								<div align="center"><input name="submit" type="submit" value="订购" /></div>
								</form>
								</td>';
																echo '</tr>';
															}

															?>
														</tbody>
													</table>
												</div>



												<div class="tab-pane fade" id="1-Jun">
													<div style="height: 20px"></div>
													<table style="width: 100%">
														<thead>
															<tr>

																<th style="width: 10%; text-align: center;font-size: 14px;">档口编号</th>
																<th style="width: 40%; text-align: center;font-size: 14px;">食物</th>
																<th style="width: 15%; text-align: center;font-size: 14px;">价钱 (RM)</th>
																<th style="width: 15%; text-align: center;font-size: 14px;">早餐 / 午餐</th>
																<th style="width: 20%; text-align: center;font-size: 14px;">订购</th>
															</tr>
														</thead>
														<tbody>
															<?php
															include('connect.php');

															$date = '1-Jun';
															$id = $_SESSION['username'];
															$result = mysql_query("SELECT * FROM reserve_fd2 where reserve_fd2_date = '$date'");
															while ($row = mysql_fetch_array($result)) {
																echo '<tr>';
																echo '<td style="text-align: center;font-size: 14px;line-height: 3.6;">' . $row["reserve_fd2_store"] . '</td>';
																echo '<td style="text-align: center;font-size: 14px;">' . $row["reserve_fd2_name"] . '</td>';
																echo '<td style="text-align: center;font-size: 14px;">' . $row["reserve_fd2_price"] . '</td>';

																if ($row["reserve_fd2_ma"] == "m") {

																	echo "<td style='text-align: center'>早餐</td>";
																} elseif ($row["reserve_fd2_ma"] == "a") {

																	echo "<td style='text-align: center'>午餐</td>";
																} else {

																	echo "<td style='text-align: center'>其它</td>";
																}

																echo '<td>
								<form action="reserve_food_slot_exe.php" method="post" name="login">
								<input type="hidden" name="student_number" value="' . $_SESSION['username'] . '" readonly>
								<input type="hidden" name="student_class" value="' . $student_class . '" readonly>
								<input type="hidden" name="food_id" value="' . $row["reserve_fd2_id"] . '" readonly>
								<input type="hidden" name="food_store" value="' . $row["reserve_fd2_store"] . '" readonly>
								<input type="hidden" name="food_date" value="' . $row["reserve_fd2_date"] . '" readonly>
								<input type="hidden" name="food_ma" value="' . $row["reserve_fd2_ma"] . '" readonly>
								<div align="center"><input name="submit" type="submit" value="订购" /></div>
								</form>
								</td>';
																echo '</tr>';
															}

															?>
														</tbody>
													</table>
												</div>

											</div>
										</div>
									</div><!--/.panel-->
								</div><!--/.col-->

							</div>



							<small><em>开放订餐时间：9/5/2022 星期一（9.00 am）开始到 11/5/2022 星期三（11.59 pm）<br>如有问题或状况，请电邮至相关部门单位<em></small>
						</div>




					<?php } ?>

				</div>
			</div>
		</div>
	</div>





	<nav id="footer">
		<div class="container">
			<div class="pull-left fnav">
				<img src="img/logo.png" style="width: 150px; height: auto">
				<p>Foon Yew High School - Kulai Student Portal © 2022</p>
			</div>
			<div class="pull-right fnav">
				<ul class="footer-social">
					<li><a href="https://www.facebook.com/fykulai" title="宽柔中学古来分校 官方脸书" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://www.facebook.com/宽柔中学古来分校联课活动处-118908328177404/" title="宽柔中学古来分校 联课活动处" target="_blank"><i class="fa fa-facebook"></i></a></li>
				</ul>
			</div>
		</div>
	</nav>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/SmoothScroll.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.js"></script>

	<script src="js/owl.carousel.js"></script>

	<!-- Javascripts
    ================================================== -->
	<script type="text/javascript" src="js/main.js"></script>

</body>

</html>