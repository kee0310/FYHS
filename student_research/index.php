<?php
require('connect.php');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">

	<title>综合实践活动课程</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">

</head>

<style>
	.panel-content ul {
		list-style: none;
		padding: 0;
		margin: 0;
	}

	.panel-content ul li {
		padding-left: 2em;
		text-indent: -1.6em;
	}

	.panel-content ul li::before {
		content: '❀';
		color: #7b98ff;
		font-size: x-large;
		padding-right: 10px;
	}

	.carousel-indicators li {
		padding: 0 20px;
	}

	.carousel-indicators li:hover {
		transform: scale(1.1) !important;
	}

	.carousel-indicators .active {
		transform: scale(1.1) !important;
	}
</style>

<body>
	<?php
	$header = file_get_contents('header.php');
	echo $header;
	?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="panel panel-default" style="margin-top: 100px">
			<div class="panel-heading">
				前言
			</div>
			<div class="panel-body">
				<div class="panel-content">
					<i class="fa fa-quote-left" style="opacity: 20%; font-size: 30px;"></i>
					<div align="center"><i>古人云：“授人以鱼 ，不如授人以渔。”</i></div><br>
					<div align="center">
						<p style="max-width: 800px" align="left">
							学校教育的目的不应只是传授知识；老师不应只是“传道、授业、解惑也”。教育应以培养学生自主学习的能力为目标 ，提高学生独立思考和自我管理的能力
							，同时为学生提供未来独立学习所需的技巧和能力。<br><br>

							创新与创意是教育重要之环节。宽柔中学古来分校有必要不停推动创新，才能增强学生在国际上的竞争力，促进社会、经济与科技的发展。
							因此，在此需求下，学校应从教育观念的转变、教育体制的改革、教师创新能力和水平的提高，在学校中建立和完善创新发明教育体系，才能培养更多适应文化创意产业发展的创新型人才。<br><br>

							联课活动是本校的办学特色之一，此计划以联课活动团体为出发点，让学生自主开展计划进行研发、探究与实践。以期达到提高学生独立思考与自主学习的能力。
						</p>
					</div>
					<div align="right">
						<i class="fa fa-quote-right" style="opacity: 20%; font-size: 30px;"></i>
					</div>
				</div>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				宗旨及目标
			</div>
			<div class="panel-body">
				<div class="panel-content">
					<ul>
						<li>以学生作为学习的主体，通过学生独立地分析、探索、实践、质疑、创造等方法来实现学习目标。</li>
						<li>倡导学生主动参与、乐于探究、勤于动手，培养学生搜集和信息处理的能力、获取新知识的能力、分析和解决问题的能力以及交流与合作的能力。</li>
						<li>允许学生有选择学习内容、学习方式、学习方法的权利，在全面发展之余也照顾学生特长发展的要求，鼓励学生发展自己的优势和特长。</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				系统简介
			</div>
			<div class="panel-body" align="center">
				<div id="main-slide" class="carousel slide" data-ride="carousel" data-interval="false" autoplay="false"
					style="padding-bottom: 100px; padding-top:50px;">
					<ol class="carousel-indicators" style="width: 100%; bottom: 50px; padding: 0 20px; margin: 0; left:0;">
						<li data-target="#main-slide" data-slide-to="0" class="active"></li>
						<li data-target="#main-slide" data-slide-to="1"></li>
						<li data-target="#main-slide" data-slide-to="2"></li>
						<li data-target="#main-slide" data-slide-to="3"></li>
					</ol>

					<div class="carousel-inner" role="listbox" style="max-width: 900px">
						<div class="item active">
							<img class="img-responsive" src="img/01.jpg" title="答辩说明">
						</div>
						<div class="item">
							<img class="img-responsive" src="img/02.jpg" title="答辩说明">
						</div>
						<div class="item">
							<img class="img-responsive" src="img/03.jpg" title="答辩说明">
						</div>
						<div class="item">
							<img class="img-responsive" src="img/04.jpg" title="答辩说明">
						</div>


						<div class="left carousel-control">
							<a href="#main-slide" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							</a>
						</div>

						<div class="right carousel-control">
							<a href="#main-slide" data-slide="next">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>

					</div>
				</div>
			</div>
		</div>
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
</body>

</html>