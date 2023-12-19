<?php
require('connect.php');
include("auth_admin.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>选修课系统</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

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
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
</script>
<style type="text/css">
.material-icons.print{Font-size:45px ; color:#ffffff;}</style>

</head>

<body>
	<?php
	$header = file_get_contents('header_admin.php');
	echo $header;
	?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">


			<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
			</div><!--/.row-->

	
					
		<div class="row">

			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">增加课程</div>
					<div class="panel-body">

						<form role="form" action="add/admin_add_course_exe.php" method="post">
						
							<div class="col-md-6">										
								<div class="form-group">
									<label>课程名称</label>
									<input class="form-control" placeholder="课程名称" name="course_title">
								</div>
								<div class="form-group">
									<label>课程名称（英文）</label>
									<input class="form-control" placeholder="课程名称（英文）" name="course_english_title">
								</div>
								<div class="form-group">
									<label>指导老师</label>
									<input class="form-control" placeholder="指导老师" name="course_teacher">
								</div>
								<div class="form-group">
									<label>年份</label>
									<div class="radio">
										<label>
											<input type="radio" name="course_class_year" id="optionsRadios3" value="2019">2019
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="course_class_year" id="optionsRadios3" value="2020">2020
										</label>
									</div>
								</div>	
								<div class="form-group">
									<label>半年课程 / 全年课程</label>
									<div class="radio">
										<label>
											<input type="radio" name="course_half_one" id="optionsRadios3" value="1">半年课程
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="course_half_one" id="optionsRadios3" value="2">全年课程
										</label>
									</div>									
								</div>									
								<div class="form-group">
									<label>上半年 / 下半年</label>
									<div class="radio">
										<label>
											<input type="radio" name="course_class_upperlower" id="optionsRadios3" value="1">上半年
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="course_class_upperlower" id="optionsRadios3" value="2">下半年
										</label>
									</div>									
								</div>									
								<div class="form-group">
									<label>星期三 / 星期五</label>
									<div class="radio">
										<label>
											<input type="radio" name="course_class_day" id="optionsRadios3" value="1">星期三
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="course_class_day" id="optionsRadios3" value="2">星期五
										</label>
									</div>								
								</div>
								<div class="form-group">
									<label>学生年段要求</label>
									<div class="radio">
										<label>
											<input type="radio" name="course_form" id="optionsRadios3" value="4">不限年段
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="course_form" id="optionsRadios3" value="3">高三学生不能选修
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="course_form" id="optionsRadios3" value="2">高二学生不能选修
										</label>
									</div>								
								</div>
								<div class="form-group">
									<label>教师毕业科系</label>
									<input class="form-control" placeholder="教师毕业科系" name="course_teacher_studylevel">
								</div>									
								<div class="form-group">
									<label>执教年段</label>
									<input class="form-control" placeholder="执教年段" name="course_teacher_exp">
								</div>								
								<div class="form-group">
									<label>执教科目</label>
									<input class="form-control" placeholder="执教科目" name="course_teacher_subject">
								</div>								
								<div class="form-group">
									<label>上课场地</label>
									<input class="form-control" placeholder="上课场地" name="course_place">
								</div>	
								<div class="form-group">
									<label>课程类型</label>
									<div class="radio">
										<label>
											<input type="radio" name="course_type" id="optionsRadios3" value="考试辅导">考试辅导
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="course_type" id="optionsRadios3" value="大学预修">大学预修
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="course_type" id="optionsRadios3" value="职业试探">职业试探
										</label>
									</div>	
									<div class="radio">
										<label>
											<input type="radio" name="course_type" id="optionsRadios3" value="兴趣特色">兴趣特色
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="course_type" id="optionsRadios3" value="语文学习">语文学习
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="course_type" id="optionsRadios3" value="资优加强">资优加强
										</label>
									</div>									
								</div>								
							</div>
							<div class="col-md-6">																	<div class="form-group">
									<label>学生人数上限</label>
									<input class="form-control" placeholder="学生人数上限" name="course_student_limit">
								</div>		
								<div class="form-group">
									<label>选修条件</label>
									<textarea rows="5" cols="50" class="form-control" placeholder="选修条件" style="resize: none;" name="course_require"></textarea>
								</div>
								<div class="form-group">
									<label>课程简介</label>
									<textarea rows="5" cols="50" class="form-control" placeholder="课程简介" style="resize: none;" name="course_intro"></textarea>
								</div>
								<div class="form-group">
									<label>课程内容</label>
									<textarea rows="5" cols="50" class="form-control" placeholder="课程内容" style="resize: none;" name="course_content"></textarea>
								</div>
								<div class="form-group">
									<label>课程教材</label>
									<textarea rows="5" cols="50" class="form-control" placeholder="课程教材" style="resize: none;" name="course_material"></textarea>
								</div>
								<div class="form-group">
									<label>评分标准</label>
									<textarea rows="5" cols="50" class="form-control" placeholder="评分标准" style="resize: none;" name="course_mark"></textarea>
								</div>
								
							</div>
								
							<button type="submit" class="btn btn-primary">创建课程</button>
							
							
							
							
							
							
						</form>
							
					
					
					
					
					
					
					</div>
				</div>
			</div>
		</div><!--/.row-->



		
		
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
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
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
