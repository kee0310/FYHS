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
<script src="ckeditor/ckeditor.js"></script>
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

		
			<?php
				include('connect.php');
				$id=$_GET['id'];

				$result = mysql_query("SELECT * FROM course_detail where course_id='$id'");
				while($row = mysql_fetch_array($result))
				{
					$title=$row['course_title'];
				
		
			?>
				
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">修改课程</div>
					<div class="panel-body">

						<form role="form" action="edit/admin_edit_course_exe.php" method="post">
						
							<div class="col-md-6">	
								<input type="hidden" name="course_id" value="<?php echo $row['course_id']; ?>">
								<div class="form-group">
									<label>0: 隐藏 / 1: 显示</label>
									<input class="form-control" value="<?php echo $row['course_showhide'];?>" name="course_showhide">								
								</div>
								<div class="form-group">
									<label>课程名称</label>
									<input class="form-control" value="<?php echo $row['course_title'];?>" name="course_title">
								</div>
								<div class="form-group">
									<label>课程名称（英文）</label>
									<input class="form-control" value="<?php echo $row['course_english_title'];?>" name="course_english_title">
								</div>
								<div class="form-group">
									<label>指导老师</label>
									<input class="form-control" value="<?php echo $row['course_teacher'];?>" name="course_teacher">
								</div>
								<div class="form-group">
									<label>年份</label>
									<input class="form-control" value="<?php echo $row['course_class_year'];?>" name="course_class_year">
								</div>	
								<div class="form-group">
									<label>1: 半年课程/ 2: 全年课程</label>
									<input class="form-control" value="<?php echo $row['course_half_one'];?>" name="course_half_one">								
								</div>									
								<div class="form-group">
									<label>1: 上半年/ 2: 下半年</label>
									<input class="form-control" value="<?php echo $row['course_class_upperlower'];?>" name="course_class_upperlower">								
								</div>									
								<div class="form-group">
									<label>1: 星期三 / 2: 星期五</label>
									<input class="form-control" value="<?php echo $row['course_class_day'];?>" name="course_class_day">									
								</div>
								<div class="form-group">
									<label>2: 高二年段不能选修 / 3: 高三年段不能选修 / 4: 不限年段</label>
									<input class="form-control" value="<?php echo $row['course_form'];?>" name="course_form">									
								</div>
								<div class="form-group">
									<label>教师毕业科系</label>
									<input class="form-control" value="<?php echo $row['course_teacher_studylevel'];?>" name="course_teacher_studylevel">
								</div>									
								<div class="form-group">
									<label>执教年段;执教科目</label>
										<table style="width: 100%">
											<tbody>
												<tr>
													<td style="width: 50%" align="center">执教年段
													</td>
													<td style="width: 50%" align="center">执教科目
													</td>
												</tr>											
												<tr>
													<td style="width: 50%"><input class="form-control" value="<?php echo $row['course_teacher_exp11'];?>" name="course_teacher_exp11">
													</td>
													<td style="width: 50%"><input class="form-control" value="<?php echo $row['course_teacher_exp12'];?>" name="course_teacher_exp12">
													</td>
												</tr>	
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>
												<tr>
													<td><input class="form-control" value="<?php echo $row['course_teacher_exp21'];?>" name="course_teacher_exp21">
													</td>
													<td><input class="form-control" value="<?php echo $row['course_teacher_exp22'];?>" name="course_teacher_exp22">
													</td>													
												<tr>
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>
												<tr>
													<td><input class="form-control" value="<?php echo $row['course_teacher_exp31'];?>" name="course_teacher_exp31">
													</td>
													<td><input class="form-control" value="<?php echo $row['course_teacher_exp32'];?>" name="course_teacher_exp32">
													</td>													
												<tr>												
											</tbody>
										</table>									
								</div>															
								<div class="form-group">
									<label>所需设备 / 场地</label>
									<input class="form-control" value="<?php echo $row['course_place'];?>" name="course_place">
								</div>	
								<div class="form-group">
									<label>课程类型</label>
									<input class="form-control" value="<?php echo $row['course_type'];?>" name="course_type">									
								</div>	
								<div class="form-group">
									<label>课程教材</label>
									<textarea rows="5" cols="50" class="form-control" style="resize: none;" name="course_material"><?php echo $row['course_material'];?></textarea>
								</div>
								<div class="form-group">
									<label>评分标准</label>
										<table style="width: 100%">
											<tbody>
												<tr>
													<td style="width: 30%">1.作业／报告:
													</td>
													<td style="width: 70%"><textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_mark1"><?php echo $row['course_mark1'];?></textarea>
													</td>													
												</tr>
												<tr>
													<td>2.考试／测验:
													</td>
													<td><textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_mark2"><?php echo $row['course_mark2'];?></textarea>
													</td>													
												</tr>
												<tr>
													<td>3.对课程的学习态度: 
													</td>
													<td><textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_mark3"><?php echo $row['course_mark3'];?></textarea>
													</td>													
												</tr>
												<tr>
													<td>4.课外相关自学能力:
													</td>
													<td><textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_mark4"><?php echo $row['course_mark4'];?></textarea>
													</td>													
												</tr>
												<tr>
													<td>5.其他:
													</td>
													<td><textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_mark5"><?php echo $row['course_mark5'];?></textarea>
													</td>													
												</tr>
											</tbody>
										</table>												
									

								</div>								
							</div>
							<div class="col-md-6">	
								<div class="form-group">
									<label>选修学生人数上限</label>
									<input class="form-control" value="<?php echo $row['course_student_limit'];?>" name="course_student_limit">									
								</div>							
								<div class="form-group">
									<label>选修条件</label>
									<textarea rows="5" cols="50" class="form-control" style="resize: none;" name="course_require"><?php echo $row['course_require'];?></textarea>
									<script>CKEDITOR.replace( 'course_require' );</script>
								</div>
								<div class="form-group">
									<label>课程简介</label>
									<textarea rows="5" cols="50" class="form-control" style="resize: none;" name="course_intro"><?php echo $row['course_intro'];?></textarea>
									<script>CKEDITOR.replace( 'course_intro' );</script>
								</div>
								<div class="form-group">
									<label>课程内容</label>
										<table style="width: 100%">
											<tbody>
												<tr>
													<td style="width: 90%" align="center">课程内容
													</td>
													<td style="width: 10%" align="center">节数
													</td>
												</tr>									
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>									
												<tr>
													<td style="width: 90%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content11"><?php echo $row['course_content11'];?></textarea>
													</td>
													<td style="width: 10%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content12"><?php echo $row['course_content12'];?></textarea>
													</td>
												</tr>									
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>										
												<tr>
													<td style="width: 90%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content21"><?php echo $row['course_content21'];?></textarea>
													</td>
													<td style="width: 10%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content22"><?php echo $row['course_content22'];?></textarea>
													</td>
												</tr>									
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>
												<tr>
													<td style="width: 90%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content31"><?php echo $row['course_content31'];?></textarea>
													</td>
													<td style="width: 10%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content32"><?php echo $row['course_content32'];?></textarea>
													</td>
												</tr>									
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>
												<tr>
													<td style="width: 90%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content41"><?php echo $row['course_content41'];?></textarea>
													</td>
													<td style="width: 10%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content42"><?php echo $row['course_content42'];?></textarea>
													</td>
												</tr>									
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>
												<tr>
													<td style="width: 90%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content51"><?php echo $row['course_content51'];?></textarea>
													</td>
													<td style="width: 10%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content52"><?php echo $row['course_content52'];?></textarea>	
													</td>
												</tr>									
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>
												<tr>
													<td style="width: 90%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content61"><?php echo $row['course_content61'];?></textarea>
													</td>
													<td style="width: 10%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content62"><?php echo $row['course_content62'];?></textarea>
													</td>
												</tr>									
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>
												<tr>
													<td style="width: 90%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content71"><?php echo $row['course_content71'];?></textarea>
													</td>
													<td style="width: 10%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content72"><?php echo $row['course_content72'];?></textarea>
													</td>
												</tr>									
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>
												<tr>
													<td style="width: 90%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content81"><?php echo $row['course_content81'];?></textarea>
													</td>
													<td style="width: 10%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content82"><?php echo $row['course_content82'];?></textarea>
													</td>
												</tr>									
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>
												<tr>
													<td style="width: 90%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content91"><?php echo $row['course_content91'];?></textarea>
													</td>
													<td style="width: 10%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content92"><?php echo $row['course_content92'];?></textarea>
													</td>
												</tr>									
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>
												<tr>
													<td style="width: 90%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content101"><?php echo $row['course_content101'];?></textarea>
													</td>
													<td style="width: 10%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content102"><?php echo $row['course_content102'];?></textarea>	
													</td>
												</tr>									
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>
												<tr>
													<td style="width: 90%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content111"><?php echo $row['course_content111'];?></textarea>
													</td>
													<td style="width: 10%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content112"><?php echo $row['course_content112'];?></textarea>
													</td>
												</tr>									
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>
												<tr>
													<td style="width: 90%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content121"><?php echo $row['course_content121'];?></textarea>
													</td>
													<td style="width: 10%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content122"><?php echo $row['course_content122'];?></textarea>
													</td>
												</tr>									
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>
												<tr>
													<td style="width: 90%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content131"><?php echo $row['course_content131'];?></textarea>
													</td>
													<td style="width: 10%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content132"><?php echo $row['course_content132'];?></textarea>
													</td>
												</tr>									
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>
												<tr>
													<td style="width: 90%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content141"><?php echo $row['course_content141'];?></textarea>
													</td>
													<td style="width: 10%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content142"><?php echo $row['course_content142'];?></textarea>
													</td>
												</tr>									
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>
												<tr>
													<td style="width: 90%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content151"><?php echo $row['course_content151'];?></textarea>
													</td>
													<td style="width: 10%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content152"><?php echo $row['course_content152'];?></textarea>	
													</td>
												</tr>									
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>
												<tr>
													<td style="width: 90%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content161"><?php echo $row['course_content161'];?></textarea>
													</td>
													<td style="width: 10%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content162"><?php echo $row['course_content162'];?></textarea>
													</td>
												</tr>									
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>
												<tr>
													<td style="width: 90%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content171"><?php echo $row['course_content171'];?></textarea>
													</td>
													<td style="width: 10%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content172"><?php echo $row['course_content172'];?></textarea>
													</td>
												</tr>									
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>
												<tr>
													<td style="width: 90%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content181"><?php echo $row['course_content181'];?></textarea>	
													</td>
													<td style="width: 10%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content182"><?php echo $row['course_content182'];?></textarea>
													</td>
												</tr>									
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>
												<tr>
													<td style="width: 90%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content191"><?php echo $row['course_content191'];?></textarea>
													</td>
													<td style="width: 10%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content192"><?php echo $row['course_content192'];?></textarea>
													</td>
												</tr>									
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>
												<tr>
													<td style="width: 90%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content201"><?php echo $row['course_content201'];?></textarea>
													</td>
													<td style="width: 10%">
													<textarea rows="1" cols="50" class="form-control" style="resize: none;" name="course_content202"><?php echo $row['course_content202'];?></textarea>	
													</td>
												</tr>									
												<tr>
													<td colspan="2" style="height: 15px"></td>
												</tr>
											</tbody>
										</table>	
									
								</div>
								
							</div>
								
							<button type="submit" class="btn btn-primary">修改课程</button>
							
							
							
							
							
							
						</form>
							
					
					
					
					
					
					
					</div>
				</div>
			</div>
			
			<?php
			
				}

			?>			
			
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
