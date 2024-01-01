<!-- 

	This is the first page of the program.
  Use to introduce the practical activity.

-->
<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">

	<title>综合实践活动课程 | 首页</title>

	<?php include("header.php"); ?><!-- Get Header -->

</head>

<style>
	#arrow {
		position: absolute;
		margin-top: -100px;
		left: 48%;
		width: 24px;
		height: 24px;
		border-left: 3px solid grey;
		border-bottom: 3px solid silver;
		-webkit-transform: rotateZ(-45deg);
		transform: rotateZ(-45deg);
		-webkit-animation: rotate1 1.5s infinite;
		animation: rotate1 1.5s infinite;
		box-sizing: border-box;
		animation-delay: 2s;
		opacity: 0;
	}

	@-webkit-keyframes rotate1 {
		0% {
			-webkit-transform: rotateY(0) rotateZ(-45deg) translate(0, 0);
			opacity: 0;
		}

		50% {
			opacity: 1;
		}

		100% {
			-webkit-transform: rotateY(720deg) rotateZ(-45deg) translate(-20px, 20px);
			opacity: 0;
		}
	}

	@keyframes rotate1 {
		0% {
			transform: rotateY(0) rotateZ(-45deg) translate(0, 0);
			opacity: 0;
		}

		50% {
			opacity: 1;
		}

		100% {
			transform: rotateY(720deg) rotateZ(-45deg) translate(-20px, 20px);
			opacity: 0;
		}
	}

	.carousel-indicators li {
		padding: 0 20px;

		&:hover {
			transform: scale(1.1);
		}
	}

	.carousel-indicators .active {
		transform: scale(1.1) !important;
	}
</style>

<body>

	<div class="main col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">

		<!-- Main Title -->
		<div class="title" style="padding: 40vh 0; font-size: clamp(40px, 5vw, 60px); ">
			<span class="cssanimation leRollFromRight sequence" style="animation-delay:1000ms; ">综合实践活动课程</span>
		</div>
		<a id="arrow" href="#num1"></a>

		<!-- Intro 1 -->
		<div id="num1" style="padding-top: 100px; " align="center">
			<div class="title" data-aos="fade-up">
				<span>前言</span>
			</div>
			<div class="content" style="max-width: 900px;" data-aos="fade-up" data-aos-delay="200">
				<div align="left">
					<i class="fa fa-quote-left" style="font-size: 30px; opacity: 40%"></i>
				</div>
				<div style="max-width: 800px; padding: 50px 0" align="left">
					<div align="center"><i>古人云：“授人以鱼 ，不如授人以渔。”</i></div><br>
					学校教育的目的不应只是传授知识；老师不应只是“传道、授业、解惑也”。教育应以培养学生自主学习的能力为目标 ，提高学生独立思考和自我管理的能力
					，同时为学生提供未来独立学习所需的技巧和能力。<br><br>

					创新与创意是教育重要之环节。宽柔中学古来分校有必要不停推动创新，才能增强学生在国际上的竞争力，促进社会、经济与科技的发展。
					因此，在此需求下，学校应从教育观念的转变、教育体制的改革、教师创新能力和水平的提高，在学校中建立和完善创新发明教育体系，才能培养更多适应文化创意产业发展的创新型人才。<br><br>

					联课活动是本校的办学特色之一，此计划以联课活动团体为出发点，让学生自主开展计划进行研发、探究与实践。以期达到提高学生独立思考与自主学习的能力。
				</div>
				<div align="right">
					<i class="fa fa-quote-right" style="font-size: 30px; opacity: 40%"></i>
				</div>
			</div>
		</div>

		<!-- Intro 2 -->
		<div style="padding-top: 100px" align="center">
			<div class="title" data-aos="fade-up">
				<span>宗旨及目标</span>
			</div>
			<div class="content" style="max-width: 900px;" data-aos="fade-up" data-aos-delay="200">
				<ul align="left">
					<li>以学生作为学习的主体，通过学生独立地分析、探索、实践、质疑、创造等方法来实现学习目标。</li>
					<li>倡导学生主动参与、乐于探究、勤于动手，培养学生搜集和信息处理的能力、获取新知识的能力、分析和解决问题的能力以及交流与合作的能力。</li>
					<li>允许学生有选择学习内容、学习方式、学习方法的权利，在全面发展之余也照顾学生特长发展的要求，鼓励学生发展自己的优势和特长。</li>
				</ul>
			</div>
		</div>

		<!-- Intro 3 -->
		<div style="padding-top: 200px; overflow: hidden" align="center">
			<div class="title" data-aos="fade-up">
				<span>系统简介</span>
			</div>
			<div class="content" style="max-width: 900px; padding-bottom: 0;" data-aos="fade-up" data-aos-delay="200">
				<div id="main-slide" class="carousel slide" data-ride="carousel" data-interval="false" autoplay="false" style="padding-bottom: 100px;">
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
	</div>


	<!-- AOS initialization -->
	<script src="js/aos-init.js" type="text/javascript"></script>

	<!-- Smooth Scroll -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$("#arrow").on('click', function(event) {

				if (this.hash !== "") {
					var hash = this.hash;

					$('html, body').animate({
						scrollTop: $(hash).offset().top

					}, 800, function() {
						window.location.hash = hash;

					});
				}
			});
		});
	</script>

</body>

</html>