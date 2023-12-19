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

		
			<?php
				include('connect.php');
				$id=$_GET['id'];

				$result = mysql_query("SELECT * FROM course_detail where course_id='$id'");
				while($row = mysql_fetch_array($result))
				{
					
				
		
			?>
				
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">添加学生</div>
					<div class="panel-body">

						<form role="form" action="add/admin_add_student_course_exe.php?id=<?php echo $row['course_id']; ?>" method="post">
						
							<div class="col-md-6">
								<input type="hidden" name="course_id" value="<?php echo $row['course_id']; ?>" readonly>
								<div class="form-group">
									<label>课程名称</label>
									<input class="form-control" value="<?php echo $row['course_title'];?>" name="course_title" readonly>
								</div>
								<div class="form-group">
									<label>课程名称（英文）</label>
									<input class="form-control" value="<?php echo $row['course_english_title'];?>" name="course_english_title" readonly>
								</div>
								<div class="form-group">
									<label>指导老师</label>
									<input class="form-control" value="<?php echo $row['course_teacher'];?>" name="course_teacher" readonly>
								</div>
								<div class="form-group">
									<label>年份</label>
									<input class="form-control" value="<?php echo $row['course_class_year'];?>" name="course_class_year" readonly>
								</div>								
								<div class="form-group">
									<label>1: 上半年 / 2: 下半年 / 3: 全年</label>
									<input class="form-control" name="upperlower" value="<?php echo $row['course_class_upperlower'];?>" name="course_class_upperlower" readonly>								
								</div>	
								<div class="form-group">
									<label>1: 半年课程 / 2: 全年课程 </label>
									<input class="form-control" name="halfone" value="<?php echo $row['course_half_one'];?>" name="course_class_upperlower" readonly>								
								</div>									
								<div class="form-group">
									<label>1: 星期三 / 2: 星期五</label>
									<input class="form-control" value="<?php echo $row['course_class_day'];?>" name="course_class_day" readonly>									
									
								</div>
								<div class="form-group">
									<label>课程类型</label>
									<input class="form-control" value="<?php echo $row['course_type'];?>" name="course_type" readonly>									
								</div>								
							</div>							
							<div class="col-md-6">
								<div class="form-group">
									<label>课程人数上限</label>
									<input class="form-control" value="<?php echo $row['course_student_limit'];?>" name="course_type" readonly>									
								</div>
							<?php
			
								}

							?>									
								<div class="form-group">
									<label>课程当前人数</label>
						
									
<?php
	include('connect.php');
	
	
			$id=$_GET['id'];
			$result = mysql_query("SELECT count(*) as total from course_selection where course_id='$id'");
			$data=mysql_fetch_assoc($result);
			{
?>				
									<input class="form-control" value="<?php echo $data['total'];?>" name="course_type" readonly>
									

<?php				
			}
?>									
									
	
																		
								</div>	
								<div class="form-group">
									<label>学生学号</label>
									<input class="form-control" required="required" name="student_number" >									
								</div>	
								<div class="form-group">
									<label>年份</label>
									<input class="form-control" required="required" name="course_class_year" >									
								</div>																




							
					<button type="submit" class="btn btn-primary">确定添加</button>
					
				

								
							
							</div>
							
							
							
							
							
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
