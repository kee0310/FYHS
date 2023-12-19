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
					<div class="panel-heading">增加学生账号</div>
					<div class="panel-body">

						<form role="form" action="add/admin_add_student_account_exe.php" method="post">
									<input type="hidden" name="student_tf" value="1">
									<input type="hidden" name="student_login_count" value="0">									
							<div class="col-md-6">										
								<div class="form-group">
									<label>学号（用作登入账号名称）</label>
									<input class="form-control" placeholder="学号" name="student_number">
								</div>
								<div class="form-group">
									<label>姓名</label>
									<input class="form-control" placeholder="姓名" name="student_name">
								</div>
								<div class="form-group">
									<label>班级</label>
									<input class="form-control" placeholder="班级" name="student_class">
								</div>
								<div class="form-group">
									<label>年段</label>
									<div class="radio">
										<label>
											<input type="radio" name="student_form" id="optionsRadios3" value="2">高二年段
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="student_form" id="optionsRadios3" value="3">高三年段
										</label>
									</div>
								</div>									
								<div class="form-group">
									<label>2 位乱码</label>
									<input class="form-control" placeholder="2 位乱码" name="student_login_number">
								</div>									
								<div class="form-group">
									<label>身份证号码 （用作登入密码）</label>
									<input class="form-control" placeholder="身份证号码" name="student_password">
								</div>
								<div class="form-group">
									<label>2 位乱码 + 身份证号码</label>
									<input class="form-control" placeholder="身份证号码" name="student_password_new">
								</div>																
							</div>
								
							<button type="submit" class="btn btn-primary">创建学生账号</button>
							
							
							
							
							
							
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
