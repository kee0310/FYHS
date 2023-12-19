<!doctype html>

<html lang="en">

<head>

	<title>宽柔中学古来分校 | 联课团体</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<style type="text/css">
		.material-icons.print {
			Font-size: 45px;
			color: #ffffff;
		}
	</style>

	<style>
		.button {
			background-color: #ADD8E6;
			border: none;
			color: black;
			padding: 8px 22px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 18px;
			margin: 2px 2px;
			cursor: pointer;
			border-radius: 8px;
			width: 180px;
		}
	</style>

</head>

<body>

	<!-- Container -->
	<div id="container">

		<!-- Start Header -->
		<?php
		$header = file_get_contents('header.php');
		echo $header;
		?>
		<!-- End Header -->


		<!-- Start Page Banner -->
		<div class="page-banner"
			style="background: url(img/subbanner03.jpg) center; background-size: cover; padding-top: 200px;">

			<div class="container">
				<div class="col-md-6">
					<h2 style="font-weight: bold; text-shadow: 3px 3px 2px rgb(0, 0, 0, 0.6), 0 0 2px rgb(0, 0, 0, 0.5)">联课团体</h2>
				</div>
				<ul class="breadcrumbs" style="text-shadow: 0px 0px 8px rgb(0, 0, 0, 1);">
					<a href="index@a38b.php">
						<li><i>首页 /&ensp;</i></li>
					</a>
					<a href="department_cocurricular.php">
						<li><i>联课活动处 /&ensp;</i></li>
					</a>
					<a href="">
						<li><i>联课团体</i></li>
					</a>
				</ul>
			</div>
		</div>
		<!-- End Page Banner -->


		<!-- Start Content -->
		<div id="content">
			<div class="container">
				<div class="page-content">



					<!-- first part start-->

					<div class="row">
						<div class="col-md-12">

							<!-- Classic Heading -->
							<h2 class="classic-title"><span>制服团体</span></h2>

							<!-- Start resource1 -->
							<div class="row">

								<?php
								include('connect.php');

								$query = "SELECT * FROM wcocurricular WHERE co_categories = 'A制服团体' ORDER BY co_id ASC";

								if ($result = $mysqli->query($query)) {

									while ($row = mysqli_fetch_array($result)) {

										echo '<!-- Start resource1 -->';
										echo '<div class="col-md-3 col-sm-6 col-xs-12">';
										echo '<div class="team-member">';
										echo '<div class="member-photo" align="center">';
										echo '<a href="co-curricular2.php?id=' . $row['co_id'] . '" title="' . $row['co_chname'] . ' "><img alt="" src="img/cocurricular/' . $row['co_logo'] . '" style="width: 70% ; height: auto"/></a>';
										echo '</div>';
										echo '<div style="height: 10px"></div>';
										echo '<div style="font-size: 24px;font-family: KaiTi;text-align: center;">' . $row['co_chname'] . ' <br>' . $row['co_engname'] . '<br><br>
					<a class="button" href="co-curricular2.php?id=' . $row['co_id'] . '" title="' . $row['co_chname'] . ' ">查看更多 <i class="fa fa-arrow-right pl-10"></i></a>
					</div>';

										echo '</div>';
										echo '</div>';
										echo '<!-- End resource1 -->';
									}
									/* free result set */
									$result->close();
								}

								/* close connection */
								$mysqli->close();
								?>



							</div>
							<!-- End resource1 -->

						</div>
					</div>
					<!-- first part end-->
					<div style="height:20px"></div>
					<!-- 2 part start-->

					<div class="row">
						<div class="col-md-12">

							<!-- Classic Heading -->
							<h2 class="classic-title"><span>表演艺术团体</span></h2>

							<!-- Start resource1 -->
							<div class="row">

								<?php
								include('connect.php');

								$query = "SELECT * FROM wcocurricular WHERE co_categories = 'B表演艺术团体' ORDER BY co_id ASC";

								if ($result = $mysqli->query($query)) {

									while ($row = mysqli_fetch_array($result)) {

										echo '<!-- Start resource1 -->';
										echo '<div class="col-md-3 col-sm-6 col-xs-12">';
										echo '<div class="team-member">';
										echo '<div class="member-photo" align="center">';
										echo '<a href="co-curricular2.php?id=' . $row['co_id'] . '" title="' . $row['co_chname'] . ' "><img alt="" src="img/cocurricular/' . $row['co_logo'] . '" style="width: 70% ; height: auto"/></a>';
										echo '</div>';
										echo '<div style="height: 10px"></div>';
										echo '<div style="font-size: 24px;font-family: KaiTi;text-align: center;">' . $row['co_chname'] . ' <br>' . $row['co_engname'] . '<br><br>
					<a class="button" href="co-curricular2.php?id=' . $row['co_id'] . '" title="' . $row['co_chname'] . ' ">查看更多 <i class="fa fa-arrow-right pl-10"></i></a>
					</div>';

										echo '</div>';
										echo '</div>';
										echo '<!-- End resource1 -->';
									}
									/* free result set */
									$result->close();
								}

								/* close connection */
								$mysqli->close();
								?>



							</div>
							<!-- End resource1 -->

						</div>
					</div>
					<!-- 2 part end-->
					<div style="height:20px"></div>
					<!-- 3 part start-->

					<div class="row">
						<div class="col-md-12">

							<!-- Classic Heading -->
							<h2 class="classic-title"><span>体育艺术团体</span></h2>

							<!-- Start resource1 -->
							<div class="row">

								<?php
								include('connect.php');

								$query = "SELECT * FROM wcocurricular WHERE co_categories = 'C体育艺术团体' ORDER BY co_id ASC";

								if ($result = $mysqli->query($query)) {

									while ($row = mysqli_fetch_array($result)) {

										echo '<!-- Start resource1 -->';
										echo '<div class="col-md-3 col-sm-6 col-xs-12">';
										echo '<div class="team-member">';
										echo '<div class="member-photo" align="center">';
										echo '<a href="co-curricular2.php?id=' . $row['co_id'] . '" title="' . $row['co_chname'] . ' "><img alt="" src="img/cocurricular/' . $row['co_logo'] . '" style="width: 70% ; height: auto"/></a>';
										echo '</div>';
										echo '<div style="height: 10px"></div>';
										echo '<div style="font-size: 24px;font-family: KaiTi;text-align: center;">' . $row['co_chname'] . ' <br>' . $row['co_engname'] . '<br><br>
					<a class="button" href="co-curricular2.php?id=' . $row['co_id'] . '" title="' . $row['co_chname'] . ' ">查看更多 <i class="fa fa-arrow-right pl-10"></i></a>
					</div>';

										echo '</div>';
										echo '</div>';
										echo '<!-- End resource1 -->';
									}
									/* free result set */
									$result->close();
								}

								/* close connection */
								$mysqli->close();
								?>



							</div>
							<!-- End resource1 -->

						</div>
					</div>
					<!-- 3 part end-->
					<div style="height:20px"></div>
					<!-- 4 part start-->

					<div class="row">
						<div class="col-md-12">

							<!-- Classic Heading -->
							<h2 class="classic-title"><span>音乐团体</span></h2>

							<!-- Start resource1 -->
							<div class="row">

								<?php
								include('connect.php');

								$query = "SELECT * FROM wcocurricular WHERE co_categories = 'D音乐团体' ORDER BY co_id ASC";

								if ($result = $mysqli->query($query)) {

									while ($row = mysqli_fetch_array($result)) {

										echo '<!-- Start resource1 -->';
										echo '<div class="col-md-3 col-sm-6 col-xs-12">';
										echo '<div class="team-member">';
										echo '<div class="member-photo" align="center">';
										echo '<a href="co-curricular2.php?id=' . $row['co_id'] . '" title="' . $row['co_chname'] . ' "><img alt="" src="img/cocurricular/' . $row['co_logo'] . '" style="width: 70% ; height: auto"/></a>';
										echo '</div>';
										echo '<div style="height: 10px"></div>';
										echo '<div style="font-size: 24px;font-family: KaiTi;text-align: center;">' . $row['co_chname'] . ' <br>' . $row['co_engname'] . '<br><br>
					<a class="button" href="co-curricular2.php?id=' . $row['co_id'] . '" title="' . $row['co_chname'] . ' ">查看更多 <i class="fa fa-arrow-right pl-10"></i></a>
					</div>';

										echo '</div>';
										echo '</div>';
										echo '<!-- End resource1 -->';
									}
									/* free result set */
									$result->close();
								}

								/* close connection */
								$mysqli->close();
								?>



							</div>
							<!-- End resource1 -->

						</div>
					</div>
					<!-- 4 part end-->
					<div style="height:20px"></div>
					<!-- 5 part start-->

					<div class="row">
						<div class="col-md-12">

							<!-- Classic Heading -->
							<h2 class="classic-title"><span>学术团体</span></h2>

							<!-- Start resource1 -->
							<div class="row">

								<?php
								include('connect.php');

								$query = "SELECT * FROM wcocurricular WHERE co_categories = 'E学术团体' ORDER BY co_id ASC";

								if ($result = $mysqli->query($query)) {

									while ($row = mysqli_fetch_array($result)) {

										echo '<!-- Start resource1 -->';
										echo '<div class="col-md-3 col-sm-6 col-xs-12">';
										echo '<div class="team-member">';
										echo '<div class="member-photo" align="center">';
										echo '<a href="co-curricular2.php?id=' . $row['co_id'] . '" title="' . $row['co_chname'] . ' "><img alt="" src="img/cocurricular/' . $row['co_logo'] . '" style="width: 70% ; height: auto"/></a>';
										echo '</div>';
										echo '<div style="height: 10px"></div>';
										echo '<div style="font-size: 24px;font-family: KaiTi;text-align: center;">' . $row['co_chname'] . ' <br>' . $row['co_engname'] . '<br><br>
					<a class="button" href="co-curricular2.php?id=' . $row['co_id'] . '" title="' . $row['co_chname'] . ' ">查看更多 <i class="fa fa-arrow-right pl-10"></i></a>
					</div>';

										echo '</div>';
										echo '</div>';
										echo '<!-- End resource1 -->';
									}
									/* free result set */
									$result->close();
								}

								/* close connection */
								$mysqli->close();
								?>



							</div>
							<!-- End resource1 -->

						</div>
					</div>
					<!-- 5 part end-->
					<div style="height:20px"></div>
					<!-- 6 part start-->

					<div class="row">
						<div class="col-md-12">

							<!-- Classic Heading -->
							<h2 class="classic-title"><span>学艺团体</span></h2>

							<!-- Start resource1 -->
							<div class="row">

								<?php
								include('connect.php');

								$query = "SELECT * FROM wcocurricular WHERE co_categories = 'F学艺团体' ORDER BY co_id ASC";

								if ($result = $mysqli->query($query)) {

									while ($row = mysqli_fetch_array($result)) {

										echo '<!-- Start resource1 -->';
										echo '<div class="col-md-3 col-sm-6 col-xs-12">';
										echo '<div class="team-member">';
										echo '<div class="member-photo" align="center">';
										echo '<a href="co-curricular2.php?id=' . $row['co_id'] . '" title="' . $row['co_chname'] . ' "><img alt="" src="img/cocurricular/' . $row['co_logo'] . '" style="width: 70% ; height: auto"/></a>';
										echo '</div>';
										echo '<div style="height: 10px"></div>';
										echo '<div style="font-size: 24px;font-family: KaiTi;text-align: center;">' . $row['co_chname'] . ' <br>' . $row['co_engname'] . '<br><br>
					<a class="button" href="co-curricular2.php?id=' . $row['co_id'] . '" title="' . $row['co_chname'] . ' ">查看更多 <i class="fa fa-arrow-right pl-10"></i></a>
					</div>';

										echo '</div>';
										echo '</div>';
										echo '<!-- End resource1 -->';
									}
									/* free result set */
									$result->close();
								}

								/* close connection */
								$mysqli->close();
								?>



							</div>
							<!-- End resource1 -->

						</div>
					</div>
					<!-- 6 part end-->
					<div style="height:20px"></div>
					<!-- 6 part start-->

					<div class="row">
						<div class="col-md-12">

							<!-- Classic Heading -->
							<h2 class="classic-title"><span>文艺团体</span></h2>

							<!-- Start resource1 -->
							<div class="row">

								<?php
								include('connect.php');

								$query = "SELECT * FROM wcocurricular WHERE co_categories = 'G文艺团体' ORDER BY co_id ASC";

								if ($result = $mysqli->query($query)) {

									while ($row = mysqli_fetch_array($result)) {

										echo '<!-- Start resource1 -->';
										echo '<div class="col-md-3 col-sm-6 col-xs-12">';
										echo '<div class="team-member">';
										echo '<div class="member-photo" align="center">';
										echo '<a href="co-curricular2.php?id=' . $row['co_id'] . '" title="' . $row['co_chname'] . ' "><img alt="" src="img/cocurricular/' . $row['co_logo'] . '" style="width: 70% ; height: auto"/></a>';
										echo '</div>';
										echo '<div style="height: 10px"></div>';
										echo '<div style="font-size: 24px;font-family: KaiTi;text-align: center;">' . $row['co_chname'] . ' <br>' . $row['co_engname'] . '<br><br>
					<a class="button" href="co-curricular2.php?id=' . $row['co_id'] . '" title="' . $row['co_chname'] . ' ">查看更多 <i class="fa fa-arrow-right pl-10"></i></a>
					</div>';

										echo '</div>';
										echo '</div>';
										echo '<!-- End resource1 -->';
									}
									/* free result set */
									$result->close();
								}

								/* close connection */
								$mysqli->close();
								?>



							</div>
							<!-- End resource1 -->

						</div>
					</div>
					<!-- 6 part end-->
					<div style="height:20px"></div>
					<!-- 6 part start-->

					<div class="row">
						<div class="col-md-12">

							<!-- Classic Heading -->
							<h2 class="classic-title"><span>运动团体</span></h2>

							<!-- Start resource1 -->
							<div class="row">

								<?php
								include('connect.php');

								$query = "SELECT * FROM wcocurricular WHERE co_categories = 'H运动团体' ORDER BY co_id ASC";

								if ($result = $mysqli->query($query)) {

									while ($row = mysqli_fetch_array($result)) {

										echo '<!-- Start resource1 -->';
										echo '<div class="col-md-3 col-sm-6 col-xs-12">';
										echo '<div class="team-member">';
										echo '<div class="member-photo" align="center">';
										echo '<a href="co-curricular2.php?id=' . $row['co_id'] . '" title="' . $row['co_chname'] . ' "><img alt="" src="img/cocurricular/' . $row['co_logo'] . '" style="width: 70% ; height: auto"/></a>';
										echo '</div>';
										echo '<div style="height: 10px"></div>';
										echo '<div style="font-size: 24px;font-family: KaiTi;text-align: center;">' . $row['co_chname'] . ' <br>' . $row['co_engname'] . '<br><br>
					<a class="button" href="co-curricular2.php?id=' . $row['co_id'] . '" title="' . $row['co_chname'] . ' ">查看更多 <i class="fa fa-arrow-right pl-10"></i></a>
					</div>';

										echo '</div>';
										echo '</div>';
										echo '<!-- End resource1 -->';
									}
									/* free result set */
									$result->close();
								}

								/* close connection */
								$mysqli->close();
								?>



							</div>
							<!-- End resource1 -->

						</div>
					</div>
					<!-- 6 part end-->
					<div style="height:20px"></div>
					<!-- 6 part start-->

					<div class="row">
						<div class="col-md-12">

							<!-- Classic Heading -->
							<h2 class="classic-title"><span>服务团体</span></h2>

							<!-- Start resource1 -->
							<div class="row">

								<?php
								include('connect.php');

								$query = "SELECT * FROM wcocurricular WHERE co_categories = 'I服务团体' ORDER BY co_id ASC";

								if ($result = $mysqli->query($query)) {

									while ($row = mysqli_fetch_array($result)) {

										echo '<!-- Start resource1 -->';
										echo '<div class="col-md-3 col-sm-6 col-xs-12">';
										echo '<div class="team-member">';
										echo '<div class="member-photo" align="center">';
										echo '<a href="co-curricular2.php?id=' . $row['co_id'] . '" title="' . $row['co_chname'] . ' "><img alt="" src="img/cocurricular/' . $row['co_logo'] . '" style="width: 70% ; height: auto"/></a>';
										echo '</div>';
										echo '<div style="height: 10px"></div>';
										echo '<div style="font-size: 24px;font-family: KaiTi;text-align: center;">' . $row['co_chname'] . ' <br>' . $row['co_engname'] . '<br><br>
					<a class="button" href="co-curricular2.php?id=' . $row['co_id'] . '" title="' . $row['co_chname'] . ' ">查看更多 <i class="fa fa-arrow-right pl-10"></i></a>
					</div>';

										echo '</div>';
										echo '</div>';
										echo '<!-- End resource1 -->';
									}
									/* free result set */
									$result->close();
								}

								/* close connection */
								$mysqli->close();
								?>



							</div>
							<!-- End resource1 -->

						</div>
					</div>
					<!-- 6 part end-->





				</div>
			</div>
		</div>
		<!-- End content -->


		<!-- Start Footer -->

		<?php
		$footer = file_get_contents('footer.php');
		echo $footer;
		?>


		<!-- End Footer -->

	</div>
	<!-- End Container -->

	<!-- Go To Top Link -->
	<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

	<script type="text/javascript" src="js/script.js"></script>

</body>

</html>